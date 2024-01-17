<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">ciBlog</a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>/about">About</a></li>
                    <li><a href="<?php echo base_url(); ?>/posts">Blog</a></li>
                    <li><a href="<?php echo base_url(); ?>/categories">Categories</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                    <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>

                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">