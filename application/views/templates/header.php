<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Freelancer - Start Bootstrap Theme</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ?>assets/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
		<div class="container">
<!--         <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        	Menu -->
        	<i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        	<ul class="navbar-nav ml-auto">
        		<li class="nav-item mx-0 mx-lg-1">
        			<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url() ?>home">Home</a>
        		</li>
        		<li class="nav-item mx-0 mx-lg-1">
        			<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url() ?>home">About</a>
        		</li>
        		<li class="nav-item mx-0 mx-lg-1">
        			<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url() ?>blog">News</a>
        		</li>
        		<li class="nav-item mx-0 mx-lg-1">
        			<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url() ?>Category">Category</a>
        		</li>
        	</ul>

        	<!-- log out -->

        	<?php if(!$this->session->userdata('logged_in')) : ?>

        		<div class="btn-group" role="group" aria-label="Data baru">
        			<?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
        			<?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

        		</div>

        	<?php endif; ?>

        	<?php if($this->session->userdata('logged_in')) : ?>
        		<div class="btn-group" role="group" aria-label="Data baru">

        			<?php echo anchor('blog/tambah', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
        			<?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
        			<?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
        		</div>
        	<?php endif; ?>
        </div>
    </div>
</nav>

<!-- Navigasi -->
<?php if($this->session->flashdata('user_registered')): ?>
	<?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('login_failed')): ?>
	<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedin')): ?>
	<?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
	<?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
<?php endif; ?>