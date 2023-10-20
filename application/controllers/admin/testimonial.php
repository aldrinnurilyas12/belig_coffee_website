<?php

use Dompdf\Dompdf;

require_once APPPATH . 'libraries/dompdf/autoload.inc.php';
class Testimonial extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_testimonial');
    }


    function index()
    {

        $this->load->view('admin/v_header_admin');
        $this->load->view('admin/v_sidebar_admin');
        $x['data'] = $this->m_testimonial->get_all_testimonial();
        $this->load->view('admin/v_datatestimonial', $x);
    }

    function cetak_laporan()

    {
        $this->load->view('admin/v_sidebar_admin');
        $x['testimonial'] = $this->m_testimonial->get_all_testimonial();
        $this->load->view('admin/v_cetak_testimonial', $x);
    }

    function lihat()
    {
        // Ambil nilai tgl_1 dan tgl_2 dari $_POST
        $tgl1 = $_POST['tgl_1'];
        $tgl2 = $_POST['tgl_2'];

        // Lakukan proses pengambilan data dari database sesuai filter tanggal
        $x['testimonial'] = $this->m_testimonial->get_all_testimonial($tgl1, $tgl2);
        $testimonial = $x['testimonial']->result_array();

        // Mengirimkan data testimonial sebagai response JSON
        echo json_encode($testimonial);
    }

    public function cetak_pdf()
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
