
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"><?php	echo $page_title ?></h1>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
					$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					
					<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Lengkap</label>
						<div class="col-sm-10"></div>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Kodepos</label>
						<div class="col-sm-10"></div>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10"></div>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10"></div>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10"></div>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Konfirmasi Password</label>
						<div class="col-sm-10"></div>
						<input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
					</div>
					<div class="form-group">
					    <label for="">Pilih Paket Membership</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="goldmember" value="2" checked>
					        <label class="form-check-label" for="goldmember">Gold Member</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="silvermember" value="3">
					        <label class="form-check-label" for="silvermember">Silver Member</label>
					    </div>
					</div>
					<br>
					<br>

					<button type="submit" class="btn btn-primary btn-block">Daftar</button>

					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</section>
</main>

