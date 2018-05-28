<?php $this->load->view('templates/header'); ?>
<br><br><br>
<br><br><br>
<br><br><br>

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

<br><br><br>
<br><br><br>
<br><br><br>

<?php $this->load->view('templates/footer'); ?>