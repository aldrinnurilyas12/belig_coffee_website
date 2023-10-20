<?php
class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran');
        $this->load->model('m_pelanggan');
        $this->load->model('m_order');
        $this->load->library('upload');
    }

    function index()
    {
    }


    function get_reservasi()
    {
        $booking_id = $this->input->post('booking_id');
        $data = $this->m_pembayaran->get_idbooking($booking_id);
        echo json_encode($data);
    }

    function get_pemesanan()
    {
        $pemesanan_id = $this->input->post('pemesanan_id');
        $data = $this->m_pembayaran->get_idpemesanan($pemesanan_id);
        echo json_encode($data);
    }


    function paymentdinein()
    {
        $id = $this->session->userdata('kopel');

        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
        $data['pembayarandinein'] = $this->m_pembayaran->get_paymentdinein();

        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_pembayarandinein', $data);
    }



    public function pembayaranreservasi()


    {
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);

        $data['pembayaran'] = $this->m_pembayaran->get_payment();
        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_pembayaranreservasi', $data);
    }

    function send_payment()
    {
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/buktibayar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['max_width']  = '10000'; //lebar maksimum 1288 px
        $config['max_height']  = '10000';
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $foto_bukti = $gbr['file_name'];
                $no_payment = $this->m_order->paymentcode();
                $booking_id = strip_tags($this->input->post('booking_id'));
                $plg_id = strip_tags($this->input->post('plg_id'));
                $plg_nama = strip_tags($this->input->post('plg_nama'));
                $tanggal_booking = strip_tags($this->input->post('tanggal_booking'));
                $bank = strip_tags($this->input->post('bank'));
                $total = strip_tags($this->input->post('total'));
                $notes = strip_tags($this->input->post('notes'));


                $this->m_pembayaran->save_payment($no_payment, $booking_id, $plg_id, $plg_nama, $tanggal_booking, $bank, $total, $notes,  $foto_bukti);
                redirect('mobile/pembayaran/pembayaranreservasi');
            } else {
                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp|JPG|PNG";
            }
        } else {


            echo '<script language="javascript">';
            echo 'alert("Anda belum mengisi data pembayaran")';
            echo '</script>';
        }
    }





    function send_paymentdinein()
    {
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/buktibayar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['max_width']  = '10000'; //lebar maksimum 1288 px
        $config['max_height']  = '10000';
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $foto_bukti = $gbr['file_name'];
                $no_payment = $this->m_order->paymentcode();
                $pemesanan_id = strip_tags($this->input->post('pemesanan_id'));
                $plg_id = strip_tags($this->input->post('plg_id'));
                $plg_nama = strip_tags($this->input->post('plg_nama'));
                $tanggal_pemesanan = strip_tags($this->input->post('tanggal_pemesanan'));
                $bank = strip_tags($this->input->post('bank'));
                $total = strip_tags($this->input->post('total'));
                $notes = strip_tags($this->input->post('notes'));


                $this->m_pembayaran->save_paymentdinein($no_payment, $pemesanan_id, $plg_id, $plg_nama, $tanggal_pemesanan, $bank, $total, $notes,  $foto_bukti);
                redirect('mobile/pembayaran/paymentdinein');
            } else {
                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp|JPG|PNG";
            }
        } else {


            echo '<script language="javascript">';
            echo 'alert("Anda belum mengisi data pembayaran")';
            echo '</script>';
        }
    }
}
