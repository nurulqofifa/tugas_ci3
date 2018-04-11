<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class open extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
	}
	
	public function index()
	{
		//$this->load->view('Home');
		$this->load->model('M_berita');
		$data['artikel'] = $this->M_berita->get_all_berita();
		$this->load->view('home', $data);
	}
	
	public function about()
	{
		$this->load->view('About');
	}
	
	public function lists(){
		$x['data']=$this->m_berita->get_all_berita();
		$this->load->view('Home',$x);
	}

	public function view(){
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_berita->get_berita_by_kode($kode);
		$this->load->view('V_news',$x);
	}

	public function detail($id)
	{
		$this->load->model('M_berita');
		$data['detail'] = $this->M_berita->get_berita_by_kode($id);
		$this->load->view('home', $data);
	}
} 