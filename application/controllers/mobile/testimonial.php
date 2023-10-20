<?php
class Testimonial extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


        $this->load->model('m_testimonial');
        $this->load->model('m_pelanggan');
        $this->load->model('m_keluhan');
    }


    function index()
    {


        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $data['data'] = $this->m_testimonial->getsemuatesti();
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_testimonial', $data);
    }

    function loadentry()
    {
        if ($this->session->userdata('online') != TRUE) {
            $url = base_url('mobile/member');
            redirect($url);
        };
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $data['datatesti'] = $this->m_testimonial->get_testi();
        $this->load->view('mobile/v_entrytestimonial', $data);
    }

    function before_testimonial()
    {

        $this->load->view('mobile/v_navbar_before');
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $data['data'] = $this->m_testimonial->getsemuatesti();
        $this->load->view('mobile/v_before_testi', $data);
    }

    function send_testimonial()
    {

        $plg_id = strip_tags($this->input->post('plg_id'));
        $plg_nama = strip_tags($this->input->post('plg_nama'));
        $pembayaran_id = strip_tags($this->input->post('pembayaran_id'));
        $tanggalpesan = strip_tags($this->input->post('tanggal_pembayaran'));

        $rating = strip_tags($this->input->post('rating'));
        $isi_testimonial = strip_tags($this->input->post('isi_testimonial'));
        $balasan = strip_tags($this->input->post('balasan'));
        $this->m_testimonial->save_testimonial($plg_id, $plg_nama, $pembayaran_id, $tanggalpesan, $rating, $isi_testimonial, $balasan);
        redirect('mobile/testimonial/loadentry');
    }


    function get_pemesanan()
    {
        $pemesanan_id = $this->input->post('pemesanan_id');
        $data = $this->m_keluhan->get_idpemesanan($pemesanan_id);
        echo json_encode($data);
    }

    function get_pembayaran()
    {
        $pembayaran_id = $this->input->post('pembayaran_id');
        $data = $this->m_testimonial->get_idpayment($pembayaran_id);
        echo json_encode($data);
    }
}
