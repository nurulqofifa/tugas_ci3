<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('Artikel');
		$data['artikel'] = $this->Artikel->get_artikels();
		$this->load->view('V_news', $data);


		$data['artikel'] = 'Artikel'; 
		
		// Dapatkan data dari model Blog dengan pagination
		// Jumlah artikel per halaman
		$limit_per_page = 6;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->Artikel->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["artikel"] = $this->Artikel->get_all_artikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);

			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}
	}


		// public function index()
		// {

		// }


	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('V_detail', $data);
	}

	//controller insert

	public function tambah()
	{
		$this->load->model('artikel');
		$this->load->model('category_model');
		$data = array();
		$data['categories'] = $this->category_model->get_category();


		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul', 'judul terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_content', 'content terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_tanggal', 'tanggal terlebih dahulu', 'required', array('required' => 'isi %s, '));
		// $this->form_validation->set_rules('input_gambar', 'gambar terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_penulis', 'Judul terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_sumber', 'sumber terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('lokasi_penulisan', 'lokasi_penulisan terlebih dahulu', 'required', array('required' => 'isi %s, '));

		if($this->form_validation->run()==FALSE){
			$this->load->view('form_tambah', $data);
		}
		else{
			if ($this->input->post('simpan')) {
				$upload = $this->artikel->upload();

				if ($upload['result'] == 'success') {
					$this->artikel->insert($upload);
					redirect('blog');
				}else{
					$data['message'] = $upload['error'];
				}
			}

			$this->load->view('V_news', $data);
		}
	}

	public function Delete($id){
		$this->load->model('artikel');
		$this->artikel->hapus($id);
		redirect('blog');
	}


	public function Edit($id){
		$this->load->model('artikel');
		$this->load->model('category_model');
		$data['categories'] = $this->category_model->get_category();
		$data['single'] = $this->artikel->get_single($id);

		if(isset($_POST['simpan'])){
			$upload=$this->artikel->upload();
			$this->artikel->update($upload, $id);
			redirect('blog');
		}
		$this->load->view('update_blog', $data);
	}

	// Gunakan fungsi dari model untuk mengisi data dalam dropdown
        // $data['categories'] = $this->category_model->generate_cat_dropdown();

	public function datatable($id){
		$this->load->model('Artikel');
		$data['artikel'] = $this->Artikel->get_artikels();
		$this->load->view('V_news', $data);
	}



}