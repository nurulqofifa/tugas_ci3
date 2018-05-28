<?php $this->load->view('templates/header'); ?>

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


            <?php       
 // $links ini berasal dari fungsi pagination       
  // Jika $links ada (data melebihi jumlah max per page), maka tampilkan        
            if (isset($links)) {            
              echo $links;        }        
              ?>            
            </main>

            <br>
            <br>

            <?php $this->load->view('templates/footer'); ?>