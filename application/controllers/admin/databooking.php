<?php

class Databooking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran');
        $this->load->model('m_status');
        $this->load->model('m_order');
    }


    function index()
    {

        $this->load->view('admin/v_header_admin');
        $this->load->view('admin/v_sidebar_admin');
        $data['databooking'] = $this->m_pembayaran->get_reservasi();
        $data['status_data'] = $this->m_status->get_all_status();
        $this->load->view('admin/v_databooking', $data);
    }


    function update_status()
    {
        $kode = $this->input->post('kode');
        $status_data = str_replace("'", "", $this->input->post('status'));
        $this->m_order->update_booking($kode, $status_data);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Status order untuk No Invoice: <b>' . $kode . '</b> Berhasil diupdate.</div>');
        redirect('admin/databooking');
    }
}
