<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('V_news', $data);
	}

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
		$data = array();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul', 'judul terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_content', 'content terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_tanggal', 'tanggal terlebih dahulu', 'required', array('required' => 'isi %s, '));
		// $this->form_validation->set_rules('input_gambar', 'gambar terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_penulis', 'Judul terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_sumber', 'sumber terlebih dahulu', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('lokasi_penulisan', 'lokasi_penulisan terlebih dahulu', 'required', array('required' => 'isi %s, '));

		if($this->form_validation->run()==FALSE){
			$this->load->view('form_tambah');
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

		$this->load->view('form_tambah', $data);
	}
}

	public function Delete($id){
		$this->load->model('artikel');
		$this->artikel->hapus($id);
		redirect('blog');
	}


	public function Edit($id){
		$this->load->model("artikel");
		$data['tipe'] = "Edit";
		$data['default'] = $this->artikel->get_default($id);

		if(isset($_POST['simpan'])){
			$this->artikel->update($_POST, $id);
			redirect('blog');
		}
		$this->load->view('home_view_form', $data);
	}
}