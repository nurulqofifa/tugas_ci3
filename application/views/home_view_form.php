<!doctype html>
<html lang="en">
<head>
  <base href="<?=base_url()?>">
  <meta charset="UTF-8">
  <title>Add Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>x
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">My Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="myweb">Home</a></li>
            <li><a href="myweb/profil">About</a></li>
            <li class="active"><a href="blog">Blog</a></li>
            <li><a href="teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>

  <div class="container">
    <h1><?=$tipe?> Articel</h1>
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-2">
          Judul
        </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="judul" value="<?=isset($default['judul'])? $default['judul'] : ""?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">
          Content         
        </label>
        <div class="col-sm-10">
          <textarea name="konten" class="form-control" required><?=isset($default['konten'])? $default['konten'] : ""?></textarea>
        </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2">Gambar :</label>
         
          <div class="col-sm-10">
            <span class="input-group-addon"><input type="file" required name="images" class="file"></span>
          </div><br>
        </div>
      <div class="form-group">
        <label class="control-label col-sm-2">
          Date          
        </label>
        <div class="col-sm-10">
          <input type="date" required class="form-control" name="tanggal" value="<?=isset($default['tanggal'])? $default['tanggal'] : ""?>">
        </div>
      </div>
      <center>
      <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
      </center>
    </form>
  </div>
</body>
</html>