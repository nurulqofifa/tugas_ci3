<?php
class Artikel extends CI_Model{
	//function simpan_berita($jdl,$berita,$gambar){
		//$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		//return $hsl;
	//}
	//mengakses semua database

	public function get_all_artikel( $limit = FALSE, $offset = FALSE ) 
	{
        // Jika variable $limit ada pada parameter maka kita limit query-nya
		if ( $limit ) {
			$this->db->limit($limit, $offset);
		}

		$this->db->order_by('tabel_blog.tanggal', 'DESC');

        // Inner Join dengan table Categories

		$query = $this->db->get('tabel_blog');

    	// Return dalam bentuk object
		return $query->result();
	}

	public function get_total() 
	{
        // Dapatkan jumlah total artikel
		return $this->db->count_all("tabel_blog");
	}

	public function get_artikels(){
		$query = $this->db->get('tabel_blog');
		return $query->result();
	}	

	//mengakses database sesuai id
	public function get_single($id)
	{
		$query = $this->db->query('select * from tabel_blog where id='.$id);
		return $query->result();

		$this->db->select('*');
		$this->db->from('tabel_blog');
		$this->db->join('categories', 'tabel_blog.id_cat = categories.id_cat');
		$this->db->where('tabel_blog.id='.$id);
		return $this->db->get()->result();
	}

	//insert gambar

	public function upload()
	{
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
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
			'images' => $upload['file']['file_name'],
			'id_cat' => $this->input->post('id_cat'),

		);

		$this->db->insert('tabel_blog', $data);
	}
	
	// public function get_default($id)
	// {
	// 	$data = array();
 //  		$options = array('id' => $id);
 //  		$Q = $this->db->get_where('tabel_blog',$options,1);
 //    		if ($Q->num_rows() > 0){
 //      			$data = $Q->row_array();
 //   			}
 //  		$Q->free_result();
 // 		return $data;
	// }


	public function update($upload, $id){
		if($upload['result']=='success')
		{
			$data = array('judul' => $this->input->post('judul'),
				'konten' => $this->input->post('content'),
				'penulis' => $this->input->post('penulis'),
				'sumber' => $this->input->post('sumber'),
				'lokasi_penulisan' => $this->input->post('id_kategori'),
				'id_cat' => $this->input->post('id_cat'),
				'images' => $upload['file']['file_name']
			);
		} 
		else 
		{
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('content'),
				'penulis' => $this->input->post('penulis'),
				'sumber' => $this->input->post('sumber'),
				'lokasi_penulisan' => $this->input->post('lokasi_penulisan'),
				'id_cat' => $this->input->post('id_cat'),
			);
		} 
		$this->db->where('id',$id);
		$this->db->update('tabel_blog', $data);
	}

	public function Hapus($id){
		$query = $this->db->query('DELETE from tabel_blog where id = '.$id);
	}	
}