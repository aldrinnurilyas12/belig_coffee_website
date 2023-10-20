<?php
class Review extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_pelanggan');
        $this->load->model('m_testimonial');
    }

    function index()
    {

        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_entryreview');
    }




    function sendreview()
    {

        $payment_id = strip_tags($this->input->post('pembayaran_id'));
        $tgl_bayar = strip_tags($this->input->post('tanggal_pembayaran'));
        $menu_id = strip_tags($this->input->post('menu_id'));
        $plg_id = strip_tags($this->input->post('plg_id'));
        $plg_nama = strip_tags($this->input->post('plg_nama'));
        $menu_nama = strip_tags($this->input->post('menu_nama'));
        $rating = strip_tags($this->input->post('rating'));
        $isi_review = strip_tags($this->input->post('isi_review'));

        $this->m_menu->sendreview($payment_id, $tgl_bayar, $menu_id, $plg_id, $plg_nama, $menu_nama, $rating, $isi_review);
        redirect('../mobile/beranda');
    }

    function givereview($id)

    {
        if ($this->session->userdata('online') != TRUE) {
            $url = base_url('mobile/member');
            redirect($url);
        };

        $id = $this->uri->segment(4);
        $result = $this->m_menu->get_menu_id($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'menu_id' => $i['menu_id'],
                'menu_nama'  => $i['menu_nama'],
            );
            $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
            $this->load->view('mobile/v_navbar', $z);
            $this->load->view('mobile/v_entryreview', $data);
        } else {
            echo "Data Was Not Found";
        }
    }


    function get_pembayaran()
    {
        $pembayaran_id = $this->input->post('pembayaran_id');
        $data = $this->m_testimonial->get_idpayment($pembayaran_id);
        echo json_encode($data);
    }
}
