<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_order');
		$this->load->model('m_kategori');
		$this->load->library('upload');
	}


	function index()
	{
		//$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('mobile/v_navbar_before');

		$x['data'] = $this->m_menu->promo();
		$x['dataminum'] = $this->m_menu->getminuman();
		$x['datasignature'] = $this->m_menu->getsignature();
		$x['datamakanan'] = $this->m_menu->getmakanan();
		$this->load->view('mobile/v_home', $x);
	}

	function about()
	{


		$this->load->view('mobile/v_navbar_before');
		$this->load->view('mobile/v_about');
	}
}
