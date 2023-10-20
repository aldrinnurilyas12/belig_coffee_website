<?php
class Editmenu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_menu');
        $this->load->library('upload');
    }


    function index()
    {
        $this->load->view('admin/v_editmenu');
    }

    function ubah()
    {
        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['max_width']  = '10000'; //lebar maksimum 1288 px
        $config['max_height']  = '10000'; //tinggi maksimu 1000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $menu_id = str_replace("'", "", $this->input->post('menu_id'));
                $menu_gambar = $gbr['file_name'];
                $menu_nama = str_replace("'", "", $this->input->post('nama'));
                $menu_deskripsi = str_replace("'", "", $this->input->post('deskripsi'));
                $menu_harga_baru = str_replace("'", "", $this->input->post('menu_harga_baru'));
                $diskon = str_replace("'", "", $this->input->post('diskon'));
                $harga_diskon = str_replace("'", "", $this->input->post('harga_diskon'));
                $harga_menu = str_replace("'", "", $this->input->post('harga_menu'));


                $promo = str_replace("'", "", $this->input->post('promo'));
                $this->m_menu->update_data_menu($menu_id, $menu_gambar, $menu_nama, $menu_deskripsi, $menu_harga_baru, $diskon, $harga_diskon, $harga_menu, $promo);
                echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu <b>' . $menu_nama . '</b> Berhasil ditambahkan ke database.</div>');
                redirect('admin/menu');
            } else {
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu tidak dapat ditambahkan, file gambar yang Anda masukkan terlalu besar.</div>');
                redirect('admin/menu');
            }
            redirect('admin/menu');
        } else {
            redirect('admin/menu');
        }
    }









    function update_menu($id)
    {
        $id = $this->uri->segment(4);
        $result = $this->m_menu->get_id_menu($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(

                'menu_id'    => $i['menu_id'],
                'menu_nama'  => $i['menu_nama'],
                'menu_deskripsi'     => $i['menu_deskripsi'],
                'menu_harga_baru'    => $i['menu_harga_baru'],
                'diskon' => $i['diskon'],
                'harga_diskon' => $i['harga_diskon'],
                'harga_menu' => $i['harga_menu'],
                'promo'    => $i['promo'],
                'menu_gambar' => $i['menu_gambar']



            );

            $this->load->view('admin/v_editmenu', $data);
        } else {
            echo "Data Was Not Found";
        }
    }


    function delete()
    {
        $menu_id = $this->uri->segment(4);
        $this->m_menu->delete($menu_id);
        redirect('admin/menu/load_menu');
    }
}
