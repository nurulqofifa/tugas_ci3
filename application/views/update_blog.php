<?php $this->load->view('templates/header'); ?>

<div class="container">
  <?php foreach ($single as $key): ?>
    <?php
    echo form_open('blog/Edit/'.$key->id, array('enctype'=>'multipart/form-data')); 
    ?>
    <table>
      <tr>
        <td>Id Artikel</td>
        <td>:</td>
        <td><input type="text" name="id" readonly value="<?php echo $key->id; ?>"></td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>:</td>
        <td><input type="text" name="judul" value="<?php echo $key->judul; ?>"></td>
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
        <td>Content</td>
        <td>:</td>
        <td><input type="text" name="content" value="<?php echo $key->konten; ?>"></td>
      </tr>
        <!-- <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr> -->
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>penulis </td>
          <td>:</td>
          <td><input type="text" name="penulis" value="<?php echo $key->penulis; ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="sumber" value="<?php echo $key->sumber; ?>"></td>
        </tr>
        <tr>
          <td>lokasi_penulisan</td>
          <td>:</td>
          <td><input type="text" name="lokasi_penulisan" value="<?php echo $key->lokasi_penulisan; ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    <?php endforeach ?>
  </div>

  
<?php $this->load->view('templates/footer'); ?>