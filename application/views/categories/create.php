<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create'); ?>
<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" id="" placeholder="Enter Name" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>