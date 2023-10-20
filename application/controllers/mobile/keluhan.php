<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keluhan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('online') != TRUE) {
            session_start();
            $url =  base_url('mobile/home');
            redirect($url);
        };

        $this->load->model('m_keluhan');
        $this->load->model('m_pelanggan');
    }


    function index()
    {

        $data['keluhan'] = $this->m_keluhan->get_cust_keluh();
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_keluhan', $data);
    }
    function send_keluhan()
    {

        $plg_id = strip_tags($this->input->post('plg_id'));
        $plg_nama = strip_tags($this->input->post('plg_nama'));
        $pembayaran_id = strip_tags($this->input->post('pembayaran_id'));
        $tgl_bayar = strip_tags($this->input->post('tanggal_pembayaran'));
        $kategori = strip_tags($this->input->post('kategori'));
        $keluhan = strip_tags($this->input->post('keluhan'));
        $tanggapan = strip_tags($this->input->post('tanggapan'));
        $kel_status = strip_tags($this->input->post('kel_status'));


        $this->m_keluhan->save_keluh($plg_id, $plg_nama, $pembayaran_id, $tgl_bayar, $kategori, $keluhan, $tanggapan, $kel_status);
        redirect('mobile/keluhan');
    }


    function get_pembayaran()
    {
        $pembayaran_id = $this->input->post('pembayaran_id');
        $data = $this->m_keluhan->get_idpembayaran($pembayaran_id);
        echo json_encode($data);
    }

    function get_booking()
    {
        $booking_id = $this->input->post('booking_id');
        $data = $this->m_keluhan->get_idbooking($booking_id);
        echo json_encode($data);
    }
}
