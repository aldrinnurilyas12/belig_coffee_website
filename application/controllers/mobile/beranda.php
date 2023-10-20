<?php
class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('online') != TRUE) {
            session_start();
            $url =  base_url('mobile/home');
            redirect($url);
        };
        $this->load->model('m_beranda');
        $this->m_beranda->cek_login();
        $this->load->model('m_menu');
        $this->load->model('m_order');
        $this->load->model('m_kategori');
        $this->load->model('m_pelanggan');
        $this->load->library('upload');
    }



    function index()
    {

        $x['data'] = $this->m_menu->promo();
        $x['dataminum'] = $this->m_menu->getminuman();
        $x['datamakanan'] = $this->m_menu->getmakanan();
        $x['datasignature'] = $this->m_menu->getsignature();
        $x['review'] = $this->m_menu->get_review();
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_beranda', $x);
    }

    function getminuman()
    {
        $x['data'] = $this->m_menu->minuman();

        $this->load->view('mobile/v_beranda');
    }


    function about()
    {

        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_about', $z);
    }
}
