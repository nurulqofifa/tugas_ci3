<?php
class Artikel extends CI_Model{
	//function simpan_berita($jdl,$berita,$gambar){
		//$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		//return $hsl;
	//}
	//mengakses semua database
	public function get_artikels(){
		$query = $this->db->get('tabel_blog');
		return $query->result();
	}	

	//mengakses database sesuai id
	public function get_single($id)
	{
		$query = $this->db->query('select * from tabel_blog where id='.$id);
		return $query->result();
	}

	//insert gambar

	public function upload()
	{
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//insert data

	public function insert($upload)
	{
		$data = array(
			// 'id' => '',
			'judul' => $this->input->post('input_judul'),
			'konten' => $this->input->post('input_content'),
			'tanggal' => $this->input->post('input_tanggal'),
			'images' => $upload['file']['file_name']
		);

		$this->db->insert('tabel_blog', $data);
	}
	
	public function get_default($id)
	{
		$data = array();
  		$options = array('id' => $id);
  		$Q = $this->db->get_where('tabel_blog',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
   			}
  		$Q->free_result();
 		return $data;
	}


	public function update($post, $id){
		$judul = $this->db->escape($POST['judul']);
		$konten = $this->db->escape($POST['konten']);
		$tanggal= $this->db->escape($POST['tanggal']);
		
		$sql = $this->db->query("UPDATE tabel_blog SET judul = $judul, konten = $konten, tanggal = $tanggal");

		return true;
	}

	public function Hapus($id){
		$query = $this->db->query('DELETE from tabel_blog where id = '.$id);
	}
}