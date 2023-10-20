<?php
class Menu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_menu');
		$this->load->model('m_kategori');
		$this->load->library('upload');
		$this->load->model('m_pengguna');
	}


	function index()
	{
		$this->load->view('admin/v_header_admin');
		$this->load->view('admin/v_sidebar_admin');
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->m_pengguna->get_pengguna_login($kode);
		$x['kat'] = $this->m_kategori->get_all_kategori();
		$x['data'] = $this->m_menu->get_all_menu();
		$this->load->view('admin/v_entrymenu', $x);
	}

	function load_menu()
	{
		$this->load->view('admin/v_sidebar_admin');
		$x['data'] = $this->m_menu->get_all_menu();
		$this->load->view('admin/v_menuadmin', $x);
	}

	function simpan_menu()
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
				$gambar = $gbr['file_name'];
				$nama = str_replace("'", "", $this->input->post('nama'));
				$deskripsi = str_replace("'", "", $this->input->post('deskripsi'));
				$menu_harga_baru = str_replace("'", "", $this->input->post('menu_harga_baru'));
				$diskon = str_replace("'", "", $this->input->post('diskon'));
				$harga_diskon = str_replace("'", "", $this->input->post('harga_diskon'));
				$harga_menu = str_replace("'", "", $this->input->post('harga_menu'));
				$kategori = str_replace("'", "", $this->input->post('kategori'));
				$a = $this->m_kategori->get_kategori_by_id($kategori);
				$q = $a->row_array();
				$kat_nama = $q['kategori_nama'];
				$promo = str_replace("'", "", $this->input->post('promo'));
				$tgl_awal_promo = str_replace("'", "", $this->input->post('tgl_awal_promo'));
				$tgl_akhir_promo = str_replace("'", "", $this->input->post('tgl_akhir_promo'));
				$this->m_menu->simpan_menu($nama, $deskripsi, $menu_harga_baru, $diskon, $harga_diskon, $harga_menu, $kategori, $kat_nama, $gambar, $promo, $tgl_awal_promo, $tgl_akhir_promo);
				echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu <b>' . $nama . '</b> Berhasil ditambahkan ke database.</div>');
				redirect('admin/menu/load_menu');
			} else {
				echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu tidak dapat ditambahkan, file gambar yang Anda masukkan terlalu besar.</div>');
				redirect('admin/menu');
			}
			redirect('admin/menu');
		} else {
			redirect('admin/menu');
		}
	}

	// function update_menu($id)
	// {
	// 	$id = $this->uri->segment(3);
	// 	$result = $this->m_menu->get_id_menu($id);
	// 	if ($result->num_rows() > 0) {
	// 		$i = $result->row_array();
	// 		$data = array(
	// 			'menu_id'    => $i['menu_id'],
	// 			'menu_nama'  => $i['menu_nama'],
	// 			'menu_deskripsi'     => $i['menu_deskripsi'],
	// 			'menu_harga_baru'    => $i['menu_harga_baru'],
	// 			'diskon' => $i['diskon'],
	// 			'harga_diskon' => $i['harga_diskon'],
	// 			'harga_menu' => $i['harga_menu'],
	// 			'promo'    => $i['promo']



	// 		);

	// 		$this->load->view('editmenu', $data);
	// 	} else {
	// 		echo "Data Was Not Found";
	// 	}
	// }

	function hapus_menu($id)
	{
		$id = $this->input->post('menu_id');
		$nama = $this->input->post('kategori');
		$this->m_menu->hapus_menu($id);
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Menu <b>' . $nama . '</b> Berhasil dihapus dari database.</div>');
		redirect('admin/menu/load_menu');
	}



	function view_review()
	{
		$this->load->view('admin/v_header_admin');
		$this->load->view('admin/v_sidebar_admin');
		$review['review'] = $this->m_menu->get_review();
		$this->load->view('admin/v_datareview', $review);
	}
}
