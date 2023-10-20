<?php
class History_order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('online') != TRUE) {
            session_start();
            $url =  base_url('mobile/home');
            redirect($url);
        };
        $this->load->model('m_history');
        $this->load->model('m_order');
        $this->load->model('m_pelanggan');
    }


    function index()
    {
        // $data['tot_pesanan'] = $this->m_history->getcount();
        $data['data'] = $this->m_history->get_order();
        // $data['datadetail'] = $this->m_order->get_all_order();
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_history_order', $data);
    }

    // function openhistory($inv_no)
    // {

    //     $inv_no = $this->uri->segment(4);
    //     $data['data'] = $this->m_history->get_id_inv($inv_no);

    //     $this->load->view('mobile/v_history_detail', $data);
    // }
}
