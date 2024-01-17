<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="200px" width="200px">
        </div>


        <div class="col-md-3">
            <small class="post-date">Posted-on: <?php echo $post['created_at']; ?> in <?php echo $post['name']; ?></small><br>
            <?php echo word_limiter($post['body'], 1); ?>
            <p class="btn btn-success"><a href="<?php echo site_url('/posts/' . $post['slug']); ?>">
                    <font color="red">Read more</font>
                </a></p>
        </div>
    </div>

<?php endforeach; ?>