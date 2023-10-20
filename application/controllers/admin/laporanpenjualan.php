<?php

use Dompdf\Dompdf;

require_once APPPATH . 'libraries/dompdf/autoload.inc.php';
class Laporanpenjualan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
    }

    function index()
    {
        $this->load->view('admin/v_header_admin');
        $this->load->view('admin/v_sidebar_admin');
        $data['tot_sales'] = $this->m_laporan->get_sales();
        $data['tot_pendapatan'] = $this->m_laporan->get_total_pendapatan();
        $this->load->view('admin/v_laporan_penjualan', $data);
    }
    
    function lihat()
    {
        // Ambil nilai tgl_1 dan tgl_2 dari $_POST
        $tgl1 = $_POST['tgl_1'];
        $tgl2 = $_POST['tgl_2'];
        
        // Lakukan proses pengambilan data dari database sesuai filter tanggal
        $x['tot_sales'] = $this->m_laporan->get_sales($tgl1, $tgl2);
        $x['tot_pendapatan'] = $this->m_laporan->get_total_pendapatan($tgl1, $tgl2);
        $tot_sales = $x['tot_sales']->result_array();
        $tot_pendapatan = $x['tot_pendapatan']->result_array();

        $data = [
            $tot_sales,
            $tot_pendapatan
        ];

        echo json_encode($data);
    }

    function lihat2()
    {
        // Ambil nilai tgl_1 dan tgl_2 dari $_POST
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];

        $month = $tahun . '-' . $bulan;

        // Lakukan proses pengambilan data dari database sesuai filter tanggal
        $x['tot_sales'] = $this->m_laporan->get_sales_menu($month);
        $tot_sales = $x['tot_sales']->result_array();

        echo json_encode($tot_sales);
    }

    public function cetak_pdf()
    {
        // Ambil data dari POST request
        $tgl1 = $this->input->post('tgl_1');
        $tgl2 = $this->input->post('tgl_2');

        $penjualanData = $this->m_laporan->get_sales($tgl1, $tgl2)->result_array();

        // var_dump($penjualanData);die;

        // Load library Dompdf
        $dompdf = new Dompdf();

        $html = $this->load->view('admin/v_cetak_penjualan_pdf', ['penjualanData' => $penjualanData, 'start_date' => $tgl1, 'end_date' => $tgl2], true);

        // Load HTML ke Dompdf
        $dompdf->load_html($html);

        // Render HTML menjadi file PDF
        $dompdf->render();

        // Set nama file PDF yang akan diunduh
        $filename = 'penjualan_report.pdf';

        // Menghasilkan file PDF dan mengirimkannya sebagai respon
        $dompdf->stream($filename);
    }

    public function cetak_pdf2()
    {
        // Ambil data dari POST request
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];

        $month = $tahun . '-' . $bulan;

        $originalDate = $month;
        $newDate = date("F Y", strtotime($originalDate));

        $penjualanData = $this->m_laporan->get_sales_menu($month)->result_array();

        // Load library Dompdf
        $dompdf = new Dompdf();

        $html = $this->load->view('admin/v_cetak_penjualan_menu_pdf', ['penjualanMenuData' => $penjualanData, 'month' => $newDate], true);

        // Load HTML ke Dompdf
        $dompdf->load_html($html);

        // Render HTML menjadi file PDF
        $dompdf->render();

        // Set nama file PDF yang akan diunduh
        $filename = 'penjualan_menu_report.pdf';

        // Menghasilkan file PDF dan mengirimkannya sebagai respon
        $dompdf->stream($filename);
    }


    function laporanmenu()
    {

        $this->load->view('admin/v_header_admin');
        $this->load->view('admin/v_sidebar_admin');

        $data['sales_menu'] = $this->m_laporan->get_sales_menu();
        $this->load->view('admin/v_laporan_menu', $data);
    }


    public function cetakpenjualan_pdf()
    {
        // Ambil data dari POST request
        $tgl1 = $this->input->post('tgl_1');
        $tgl2 = $this->input->post('tgl_2');

        // Panggil model untuk mendapatkan data testimonial berdasarkan rentang tanggal
        $testimonialData = $this->m_testimonial->get_all_testimonial($tgl1, $tgl2)->result_array();

        // Load library Dompdf
        $dompdf = new Dompdf();

        // Convert data testimonial menjadi HTML
        $html = $this->load->view('admin/v_cetak_testimonial_pdf', ['testimonialData' => $testimonialData, 'start_date' => $tgl1, 'end_date' => $tgl2], true);

        // Load HTML ke Dompdf
        $dompdf->load_html($html);

        // Render HTML menjadi file PDF
        $dompdf->render();

        // Set nama file PDF yang akan diunduh
        $filename = 'testimonial_report.pdf';

        // Menghasilkan file PDF dan mengirimkannya sebagai respon
        $dompdf->stream($filename);
    }
}
