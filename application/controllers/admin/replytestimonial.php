<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Replytestimonial extends CI_Controller
{




    function __construct()
    {
        parent::__construct();
        $this->load->model('m_testimonial');
        $this->load->library('upload');
    }
    public function index()

    {

        $this->load->view('template/sidebar');
        $this->load->view('admin/v_replytestimonial');
    }



    // function ubah()
    // {


    //     $id_testimonial = strip_tags($this->input->post('id_testimonial'));
    //     $nm_customer = strip_tags($this->input->post('nm_customer'));
    //     $rating = strip_tags($this->input->post('rating'));
    //     $pesan_testimonial = strip_tags($this->input->post('pesan_testimonial'));
    //     $balasan = strip_tags($this->input->post('balasan'));
    //     $this->testimonial_model->balasantestimonial($id_testimonial, $nm_customer, $rating, $pesan_testimonial, $balasan);
    //     redirect('../index.php/datatestimonial');
    // }



    function reply()
    {


        $id_testimonial = strip_tags($this->input->post('id_testimonial'));
        $plg_id = strip_tags($this->input->post('plg_id'));
        $plg_nama = strip_tags($this->input->post('plg_nama'));
        $rating = strip_tags($this->input->post('rating'));
        $isi_testimonial = strip_tags($this->input->post('isi_testimonial'));
        $balasan = strip_tags($this->input->post('balasan'));
        $this->m_testimonial->reply($id_testimonial, $plg_id, $plg_nama, $rating, $isi_testimonial, $balasan);
        redirect('../admin/testimonial');
    }



    function balasan($id)

    {

        $id = $this->uri->segment(4);
        $result = $this->m_testimonial->get_id_testimonial($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'id_testimonial' => $i['id_testimonial'],
                'plg_id'  => $i['plg_id'],
                'plg_nama'  => $i['plg_nama'],
                'rating'     => $i['rating'],
                'isi_testimonial' => $i['isi_testimonial'],
                'balasan'    => $i['balasan'],
                'tgl_testimonial' => $i['tgl_testimonial'],
                'tgl_bayar' => $i['tanggal_pembayaran']





            );
            $this->load->view('admin/v_sidebar_admin');
            $this->load->view('admin/v_replytestimonial', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
}
