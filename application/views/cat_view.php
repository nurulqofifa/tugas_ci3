<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="assets/https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="assets/css/freelancer.min.css" rel="stylesheet">
  
  <!-- datatabel -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?> assets/dt/datatables.min.css"/>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
<!--         <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu -->
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="home">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="home">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#news">News</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category">Category</a>
            </li>
<!--             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          -->          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>



    <div>
      <a href='category/create' class='btn btn-sm btn-denger'> Tambah </a>
    </div>

    <div class="card-content table-responsive">
      <table class="table" id="myTable">
        <thead class="text-primary">
          <tr>
          <th>Id Kategori</th>
          <th>Kategori</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
          <?php
          foreach ($category as $key) :  ?>
          <tr>
            <td><?php echo $key->id_cat ?></td>
            <td><?php echo $key->cat_name ?></td>
            <td><?php echo $key->cat_name ?></td>
            <td>
              <a href='category/Edit/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Edit </a>     
              <a href='category/delete/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Hapus </a>         </td>
            </tr>
          <?php endforeach;?>
        </tbody>

      </table>
    </div>
   <!--  <div class="well well-sm">
      <?php
        foreach ($category as $key) :  ?>
          <div class="row">
            <div class="col-sm-12 col-md-12">
             <table>
             	<tr>
			          <td>ID CATEGORY</td>
			          <td>:</td>
			          <td><h3><?php echo $key->id_cat ?></h3></td>
             	</tr>
             	<tr>
             		<td>Category Name</td>
          			<td>:</td>
          			<td><h3><?php echo $key->cat_name ?></h3></td>

             	</tr>
             	<tr>
             		<td>Category Description</td>
          			<td>:</td>
          			<td><h3><?php echo $key->cat_name ?></h3></td>
             		  
             	</tr>
              <td>
               <a href='category/Edit/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Edit </a>     
                <a href='category/delete/<?php echo $key->id_cat;?>' class='btn btn-sm btn-denger'> Hapus </a>           
              </td>
          </div>
      </div>
  </div>
<?php endforeach;?> -->


<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="assets/js/jqBootstrapValidation.js"></script>
<script src="assets/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="assets/js/freelancer.min.js"></script>


<script type="text/javascript" src="<?php echo base_url() ?> assets/dt/datatables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>


</body>
</html>