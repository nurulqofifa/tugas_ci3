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

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container-fluid bg-1 text-center">
        <!-- <h3 class="margin">Who Am I?</h3> -->
        <center>  <img src="assets/img/20.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
         <h3>macam macam hijab</h3>
         <h6>kunjungi <b>ABOUT</b> untuk info selanjutnya</h6>
       </div>
     </center>
   </header>


   <!-- Menampilkan data dari database -->
   <div class="container text-center">
    <?php foreach ($artikel as $key): ?>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <table style="margin-bottom: 30px;">
          <tr>
            <td>
              <a href="blog/detail/<?php echo $key->id ?>" style="color: black;">
                <img src="images/<?php echo $key->images;?>" alt="Image" width="500" height="400">
                <br>
                <?php echo $key->judul ?><br>
                <?php echo $key->konten; ?>
              </a>
              <br>
              <!--            <button>Edit</button> -->
              <a href='blog/edit/<?php echo $key->id;?>' class='btn btn-sm btn-denger'> Edit </a>     
              <a href='blog/delete/<?php echo $key->id;?>' class='btn btn-sm btn-denger'> Hapus </a>
            </td>
          </tr>
        </table>
      </div>
    <?php endforeach ?>
  </div>


  <!-- form untuk insert data -->




  <div class="container">

    <table>

        <!-- <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>    
          <td><input type="date" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr> -->
          <br>
          <br>
          
          <a href="blog/tambah" class="btn btn-sm btn-danger">Tambah</a>

          <br>
          <br>
          <br>
          <br>
          
          <div class="container">

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>


            <?php       
 // $links ini berasal dari fungsi pagination       
  // Jika $links ada (data melebihi jumlah max per page), maka tampilkan        
            if (isset($links)) {            
              echo $links;        }        
              ?>            
            </main>

            <br>
            <br>


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

          </body>

          </html>
