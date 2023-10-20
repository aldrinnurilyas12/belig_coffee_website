<?php
class Order extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_order');
		$this->load->model('m_status');
		$this->load->model('m_pengguna');
		$this->load->model('m_pembayaran');
	}

	function index()
	{
		$this->load->view('admin/v_header_admin');
		$this->load->view('admin/v_sidebar_admin');
		$kode = $this->session->userdata('idadmin');
		$data['user'] = $this->m_pengguna->get_pengguna_login($kode);
		$data['data'] = $this->m_order->get_all_order();
		$data['orderselesai'] = $this->m_order->order_selesai();
		$data['stts'] = $this->m_status->get_all_status();
		$this->load->view('admin/v_pemesanan', $data);
	}

	function update_order()
	{
		$kode = $this->input->post('kode');
		$status = str_replace("'", "", $this->input->post('status'));
		$this->m_order->update_order($kode, $status);
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Status order untuk No Invoice: <b>' . $kode . '</b> Berhasil diupdate.</div>');
		redirect('admin/order');
	}
	function hapus_order()
	{
		$kode = $this->input->post('kode');
		$this->m_order->hapus_order($kode);
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Order untuk invoice: <b>' . $kode . '</b> Berhasil dihapus.</div>');
		redirect('admin/order');
	}




	function datapembayaran()
	{
		$this->load->view('admin/v_header_admin');
		$this->load->view('admin/v_sidebar_admin');

		$bayar['statusbooking'] = $this->m_status->konfirmasi_booking();
		$bayar['bookingdata'] = $this->m_pembayaran->getbooking();
		$bayar['dineindata'] = $this->m_pembayaran->getpemesanan();
		$bayar['pembayaran'] = $this->m_pembayaran->getdatapembayaran();
		$this->load->view('admin/v_pembayaranreservasi', $bayar);
	}



	function update_booking_status()
	{
		$kode = $this->input->post('booking_id');
		$plg_id = $this->input->post('plg_id');
		$plg_nama = $this->input->post('plg_nama');
		$confirm = str_replace("'", "", $this->input->post('status_bayar'));
		$this->m_order->update_status_booking($kode, $plg_id, $plg_nama, $confirm);
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Status order untuk No Invoice: <b>' . $kode . '</b> Berhasil diupdate.</div>');
		redirect('admin/order/datapembayaran');
	}
}
