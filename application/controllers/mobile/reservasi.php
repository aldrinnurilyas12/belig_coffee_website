<?php

class Reservasi extends CI_Controller
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
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbarreservasi', $z);
        $this->load->view('mobile/v_add_menu_reservasi', $x);
    }
}
