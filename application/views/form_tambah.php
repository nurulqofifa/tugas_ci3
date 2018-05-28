<?php $this->load->view('templates/header'); ?>
    <br>
    <br>
    <br>
<div class="container">
  <?php echo validation_errors(); ?>
      <?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
          <label>Kategori</label>
            <select name="id_cat" class="form-control" required>
              <option value="">Pilih Kategori</option>
              <?php foreach($categories as $categories): ?>
              <option value="<?php echo $categories->id_cat; ?>"><?php echo $categories->cat_name; ?></option>
              <?php endforeach; ?>
            </select>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
          <td>penulis </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
        </tr>
        <tr>
          <td>lokasi_penulisan</td>
          <td>:</td>
          <td><input type="text" name="lokasi_penulisan" value="<?php echo set_value('lokasi_penulisan'); ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
    <br>
    <br>
    <br>
<?php $this->load->view('templates/footer'); ?>

