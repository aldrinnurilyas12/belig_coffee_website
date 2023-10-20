<?php
class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_history');
        $this->load->library('upload');
    }


    function index()
    {

        $this->load->view('mobile/v_login');
    }

    function register()
    {
        $this->load->view('mobile/v_register');
    }
    function simpan_pelanggan()
    {

        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|JPG|JPEG'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '1024'; //maksimum besar file 2M
        $config['max_width']  = '100000'; //lebar maksimum 1288 px
        $config['max_height']  = '100000'; //tinggi maksimu 1000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $gambar = $gbr['file_name'];
                $nama = strip_tags(str_replace("'", "", $this->input->post('nama')));
                $alamat = strip_tags(str_replace("'", "", $this->input->post('alamat')));
                $kontak = strip_tags(str_replace("'", "", $this->input->post('kontak')));
                $email = strip_tags(str_replace("'", "", $this->input->post('email')));
                $pass = strip_tags(str_replace("'", "", $this->input->post('pass')));
                $pass2 = strip_tags(str_replace("'", "", $this->input->post('pass2')));
                if ($pass <> $pass2) {
                    echo $this->session->set_flashdata('msg', '<div class="notifications warning">Password dan Ulangi Password yang Anda masukan tidak sama.</div>');
                    redirect('mobile/member/register');
                } else {
                    $this->m_pelanggan->simpan_pelanggan_dengan_gambar($nama, $alamat, $kontak, $email, $pass, $gambar);
                    echo $this->session->set_flashdata('msg', '<div class="notifications success">Data <b>' . $nama . '</b> Berhasil di simpan ke database.</div>');
                    redirect('mobile/member');
                }
            } else {
                echo $this->session->set_flashdata('msg', '<div class="notifications error">Data tidak dapat di simpan, file gambar yang Anda masukkan terlalu besar.</div>');
                redirect('mobile/member/register');
            }
        } else {
            $nama = strip_tags(str_replace("'", "", $this->input->post('nama')));
            $alamat = strip_tags(str_replace("'", "", $this->input->post('alamat')));
            $kontak = strip_tags(str_replace("'", "", $this->input->post('kontak')));
            $email = strip_tags(str_replace("'", "", $this->input->post('email')));
            $pass = strip_tags(str_replace("'", "", $this->input->post('pass')));
            $pass2 = strip_tags(str_replace("'", "", $this->input->post('pass2')));
            if ($pass <> $pass2) {
                echo $this->session->set_flashdata('msg', '<div class="notifications warning">Password dan Ulangi Password yang Anda masukan tidak sama.</div>');
                redirect('mobile/member/register');
            } else {
                $this->m_pelanggan->simpan_pelanggan_tanpa_gambar($nama, $alamat,  $kontak, $email, $pass);
                echo $this->session->set_flashdata('msg', '<div class="notifications success">Data <b>' . $nama . '</b> Berhasil di simpan ke database.</div>');
                redirect('mobile/member');
            }
        }
    }



    function feedback()
    {
        $this->load->view('mobile/v_feedback');
    }



    function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('email')));
        $password = strip_tags(str_replace("'", "", $this->input->post('pass')));
        $u = $username;
        $p = $password;
        $cadmin = $this->m_pelanggan->cek_pelanggan($u, $p);
        if ($cadmin->num_rows > 0) {
            $this->session->set_userdata('online', true);
            $this->session->set_userdata('pengguna', $u);
            $this->session->set_userdata('hakakses', 3);
            $xcadmin = $cadmin->row_array();
            $this->session->set_userdata('nama_pel', $xcadmin['plg_nama']);
            $this->session->set_userdata('kopel', $xcadmin['plg_id']);
        } else {
            $this->session->set_userdata('online', false);
        }
        if ($this->session->userdata('online') == true) {
            redirect('mobile/member/berhasillogin');
        } else {
            redirect('mobile/member/gagallogin');
        }
    }


    function profil($id)
    {
        $id = $this->uri->segment(4);
        $result = $this->m_pelanggan->get_customer($id);
        $this->load->model('m_pelanggan');
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(

                'plg_id'    => $i['plg_id'],
                'plg_nama'  => $i['plg_nama'],
                'plg_alamat' => $i['plg_alamat'],
                'plg_notelp' => $i['plg_notelp'],
                'plg_email' => $i['plg_email'],
                'plg_photo' => $i['plg_photo'],
                'plg_register' => $i['plg_register']



            );

            $data['order'] = $this->m_pelanggan->get_order($id);
            $data['keluhan'] = $this->m_pelanggan->get_keluhan($id);
            $data['testimonial'] = $this->m_pelanggan->get_testimonial($id);
            $data['pembayaran'] = $this->m_pelanggan->get_payment($id);
            $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);
            $this->load->view('mobile/v_profile_navbar', $z);
            $this->load->view('mobile/v_profile', $data);
        } else {
            echo "Data Was Not Found";
        }
    }



    function update_profile()
    {
        $plg_id = $this->input->post('plg_id');
        $plg_nama = $this->input->post('plg_nama');
        $plg_alamat = $this->input->post('plg_alamat');
        $plg_notelp = $this->input->post('plg_notelp');
        $plg_email = $this->input->post('plg_email');
        $update_at = $this->input->post('update_at');
        $this->m_pelanggan->update_customer($plg_id, $plg_nama, $plg_alamat, $plg_notelp, $plg_email, $update_at);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu <b>' . $plg_nama . '</b> Berhasil ditambahkan ke database.</div>');
        redirect('mobile/member/profil/' . $plg_id);
    }








    function cek_login()
    {
        if ($this->session->userdata('online')) {
        }
    }

    function berhasillogin()
    {
        if (empty($this->cart->total_items())) {
            $kopel = $this->session->userdata('kopel');
            $this->db->query("update tbl_pelanggan set plg_status='1' where plg_id='$kopel'");
            redirect('mobile/beranda');
        } else {
            redirect('mobile/beranda');
        }
    }

    function gagallogin()
    {
        $url = base_url('mobile/member');
        echo $this->session->set_flashdata('msg', '<div class="notifications error"><i class="fa fa-exclamation-circle"></i> Email atau Password yang anda masukan salah. Mohon Check Kembali!</div>');
        redirect($url);
    }

    function logout()
    {
        $kopel = $this->session->userdata('kopel');
        $this->db->query("update tbl_pelanggan set plg_status='0' where plg_id='$kopel'");
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }


    function yourhistory()
    {
        $this->load->view('v_historyorder');
    }





    function historyreservasi()

    {

        $data['data'] = $this->m_history->get_reservasi();
        // $data['datadetail'] = $this->m_order->get_all_order();
        $id = $this->session->userdata('kopel');
        $z['datapelanggan'] = $this->m_pelanggan->get_customer($id);

        $this->load->view('mobile/v_navbar', $z);
        $this->load->view('mobile/v_riwayat_reservasi', $data);
    }
}
