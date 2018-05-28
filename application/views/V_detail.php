<?php $this->load->view('templates/header'); ?>
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

    

    <!-- Menampilkan detail data dari database -->
     <div class="container text-center">
      <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul; ?></b><h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="../../images/<?php echo $key->images;?>" alt="Image" width="500" height="400">\
              
              <br></br>
              <br></br>
              <br></br>
              <?php echo $key->tanggal; ?>
              <br></br>
              <br></br>
              <br></br>

            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <?php echo $key->konten; ?>
            </td>
          </tr>
        </table>
      </div>
      <?php endforeach ?>
    </div>
    


   <?php $this->load->view('templates/footer'); ?>