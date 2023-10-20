<?php

use Dompdf\Dompdf;

require_once APPPATH . 'libraries/dompdf/autoload.inc.php';

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pengguna');
		$this->load->model('m_pelanggan');
		$this->load->model('m_order');
		$this->load->model('m_menu');
		$this->load->model('m_keluhan');
	}

	function index()
	{

		$this->load->view('admin/v_header_admin');
		$this->load->view('admin/v_sidebar_admin');
		$kode = $this->session->userdata('idadmin');

		$x['plg'] = $this->m_pelanggan->get_all_pelanggan_terbaru();
		$x['odr'] = $this->m_order->get_all_order();

		$x['statistikplg'] = $this->m_pelanggan->get_grafik_pelanggan();
		$x['pen_now'] = $this->m_order->total_pendapatan();
		$x['pen_last'] = $this->m_order->total_terjual();
		$x['tot_porsi'] = $this->m_order->get_total_porsi();
		$x['tot_plg'] = $this->m_order->get_total_pelanggan();
		$x['tot_testimonial'] = $this->m_order->get_testi();
		$x['done_keluhan'] = $this->m_keluhan->get_keluhan();
		$x['belum_keluhan'] = $this->m_keluhan->get_belum_keluhan();
		$x['tot_menu'] = $this->m_menu->get_all_menu();
		$x['top_menu'] = $this->m_menu->get_topmenu();
		$x['user'] = $this->m_pengguna->get_pengguna_login($kode);
		$x['top_pelanggan'] = $this->m_menu->get_all_detail();
		$x['total_keluhan'] = $this->m_keluhan->get_all_keluhan();

		$x['total_bayar'] = $this->m_order->getallbayar();
		$x['total_booking'] = $this->m_order->getallbooking();
		$this->load->view('admin/v_admin_home', $x);
	}

	function cetak_keluhan()
	{
		$data['keluhan'] = $this->m_keluhan->get_keluhan_tanggapi();
		$this->load->view('admin/v_sidebar_admin');
		$this->load->view('admin/v_cetak_keluhan', $data);
	}

	function lihat()
	{
		// Ambil nilai tgl_1 dan tgl_2 dari $_POST
		$tgl1 = $_POST['tgl_1'];
		$tgl2 = $_POST['tgl_2'];

		// Lakukan proses pengambilan data dari database sesuai filter tanggal
		$x['keluhan'] = $this->m_keluhan->get_keluhan_tanggapi($tgl1, $tgl2);
		$keluhan = $x['keluhan']->result_array();

		// Mengirimkan data keluhan sebagai response JSON
		echo json_encode($keluhan);
	}

	public function cetak_pdf()
	{
		// Ambil data dari POST request
		$tgl1 = $this->input->post('tgl_1');
		$tgl2 = $this->input->post('tgl_2');

		$keluhanData = $this->m_keluhan->get_keluhan_tanggapi($tgl1, $tgl2)->result_array();

		// Load library Dompdf
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/v_cetak_keluhan_pdf', ['keluhanData' => $keluhanData, 'start_date' => $tgl1, 'end_date' => $tgl2], true);

		// Load HTML ke Dompdf
		$dompdf->load_html($html);

		// Render HTML menjadi file PDF
		$dompdf->render();

		// Set nama file PDF yang akan diunduh
		$filename = 'tanggapan_report.pdf';

		// Menghasilkan file PDF dan mengirimkannya sebagai respon
		$dompdf->stream($filename);
	}
}
