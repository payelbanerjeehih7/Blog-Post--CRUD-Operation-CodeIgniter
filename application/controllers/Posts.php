<?php
class Posts extends CI_Controller
{
    public function index()
    {

        $data['title'] = "Latest Posts";

        $data['posts'] = $this->post_model->get_posts();
        // print_r($data['posts'][0]['post_image']);
        // die;

        $this->load->view('template/header');
        $this->load->view('posts/index', $data);
        $this->load->view('template/footer');
    }
    public function view($slug = NULL)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        $post_id=$data['post']['id'];
        $data['comments']=$this->comment_model->get_comments($post_id);

        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = $data['post']['title'];

        $this->load->view('template/header');
        $this->load->view('posts/view', $data);
        $this->load->view('template/footer');
    }
    public function create()
    {
        $data['title'] = "Create Post";

        $data['categories'] = $this->post_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('posts/create', $data);
            $this->load->view('template/footer');
        } else {
            //upload image
            $config['upload_path'] = './assets/images/posts/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }

            $this->post_model->create_post($post_image);
            redirect('posts');
        }
    }
    public function delete($id)
    {
        // echo $id;
        $this->post_model->delete_post($id);
        redirect('posts');
    }
    public function edit($slug)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = "Edit Post";

        $data['categories'] = $this->post_model->get_categories();

        // print_r($data);
        // die;

        $this->load->view('template/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        // echo "submitted";
        $this->post_model->update_post();
        redirect(('posts'));
    }
}
