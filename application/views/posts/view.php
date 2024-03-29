<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted-on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<hr>
<div class="col-md-3">
    <img class="post-thumb" src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="100px">
</div>
<?php echo form_open('/posts/delete/' . $post['id']); ?>
<a class="btn btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<input type="submit" name="submit" id="" value="Delete" class="btn btn-danger">
</form>
<hr><br><br>
<h3>Comments</h3>
<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
        <h5><?php echo $comment['body']; ?>[by <strong> <?php echo $comment['name']; ?></strong> ] </h5>
    <?php endforeach ?>
<?php else : ?>
    <p>No comments to display</p>
<?php endif; ?>
<hr>
<h3>Add Comments</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>