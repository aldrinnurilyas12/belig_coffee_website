<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Replykeluhan extends CI_Controller
{




    function __construct()
    {
        parent::__construct();
        $this->load->model('m_keluhan');
        $this->load->library('upload');
    }
    public function index()

    {

        $this->load->view('template/sidebar');
        $this->load->view('admin/v_replykeluhan');
    }



    // function ubah()
    // {


    //     $keluhan_id = strip_tags($this->input->post('id_testimonial'));
    //     $nm_customer = strip_tags($this->input->post('nm_customer'));
    //     $rating = strip_tags($this->input->post('rating'));
    //     $pesan_testimonial = strip_tags($this->input->post('pesan_testimonial'));
    //     $balasan = strip_tags($this->input->post('balasan'));
    //     $this->testimonial_model->balasantestimonial($id_testimonial, $nm_customer, $rating, $pesan_testimonial, $balasan);
    //     redirect('../index.php/datatestimonial');
    // }



    function reply()
    {


        $keluhan_id = strip_tags($this->input->post('keluhan_id'));
        $plg_id = strip_tags($this->input->post('plg_id'));
        $plg_nama = strip_tags($this->input->post('plg_nama'));
        $kategori = strip_tags($this->input->post('kategori'));
        $keluhan = strip_tags($this->input->post('keluhan'));
        $tanggapan = strip_tags($this->input->post('tanggapan'));
        $kel_status = strip_tags($this->input->post('kel_status'));
        $this->m_keluhan->reply($keluhan_id, $plg_id, $plg_nama, $kategori, $keluhan, $tanggapan, $kel_status);
        redirect('../admin/pengguna/keluhan');
    }



    function balasan($id)

    {

        $id = $this->uri->segment(4);
        $result = $this->m_keluhan->get_keluhan_id($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'keluhan_id' => $i['keluhan_id'],
                'plg_id'  => $i['plg_id'],
                'plg_nama'  => $i['plg_nama'],
                'kategori'     => $i['kategori'],
                'keluhan' => $i['keluhan'],
                'tanggapan'    => $i['tanggapan'],
                'kel_status'    => $i['kel_status'],
                'tgl_bayar' => $i['tanggal_pembayaran'],

                'tanggal_keluhan' => $i['tanggal_keluhan']




            );
            $this->load->view('admin/v_sidebar_admin');
            $this->load->view('admin/v_replykeluhan', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
}
