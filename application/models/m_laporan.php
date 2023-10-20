<?php
class M_laporan extends CI_Model
{

    function get_sales($tgl1 = null, $tgl2 = null)
    {
        if (isset($tgl1) && isset($tgl2)) {
            $query = $this->db->query("SELECT tbl_invoice.inv_no, tbl_invoice.inv_plg_nama, 
            SUM(tbl_detail.detail_porsi) as total_porsi, COUNT(tbl_detail.detail_menu_nama) as total_menu, inv_total as total, tbl_invoice.inv_status, 
            tbl_invoice.inv_tanggal  
            FROM tbl_detail 
            LEFT JOIN tbl_invoice ON tbl_invoice.inv_no = detail_pemesanan_id 
            WHERE tbl_invoice.inv_status = 'Pesanan selesai' 
                AND tbl_invoice.inv_tanggal >= '" . $tgl1 . " 00:00:00' 
                AND tbl_invoice.inv_tanggal <= '" . $tgl2 . " 23:59:59'
            GROUP BY tbl_invoice.inv_no, tbl_invoice.inv_plg_nama, tbl_invoice.inv_status, tbl_invoice.inv_tanggal
            ORDER BY inv_total DESC;");
            return $query;
        } else {
            $query = $this->db->query("SELECT tbl_invoice.inv_no, tbl_invoice.inv_plg_nama, 
            SUM(tbl_detail.detail_porsi) as total_porsi, COUNT(tbl_detail.detail_menu_nama) as total_menu, inv_total as total,tbl_invoice.inv_status, 
            tbl_invoice.inv_tanggal  FROM tbl_detail LEFT JOIN tbl_invoice ON tbl_invoice.inv_no = detail_pemesanan_id 
            WHERE tbl_invoice.inv_status='Pesanan selesai' GROUP BY tbl_invoice.inv_no  
            ORDER BY inv_total DESC;");
            return $query;
        }
    }

    function get_total_pendapatan($tgl1 = null, $tgl2 = null)
    {
        if ($tgl1 && $tgl2) {
            $pendapatan = $this->db->query("SELECT SUM(inv_total) as pendapatan from tbl_invoice WHERE inv_status='Pesanan selesai'
            AND tbl_invoice.inv_tanggal >= '" . $tgl1 . " 00:00:00' 
            AND tbl_invoice.inv_tanggal <= '" . $tgl2 . " 23:59:59'
            ");
            return $pendapatan;
        } else {
            $pendapatan = $this->db->query("SELECT SUM(inv_total) as pendapatan from tbl_invoice WHERE inv_status='Pesanan selesai'");
            return $pendapatan;
        }
    }


    public function view_all()
    {
        $result = $this->db->query("SELECT * FROM tbl_invoice");
        return $result; // Tampilkan semua data tbl_invoice
    }

    public function view_by_date($tgl_awal, $tgl_akhir)
    {
        $tgl_awal = $this->db->escape($tgl_awal);
        $tgl_akhir = $this->db->escape($tgl_akhir);
        $this->db->where('date(inv_tanggal) BETWEEN ' . $tgl_awal . ' AND ' . $tgl_akhir); // Tambahkan where tanggal nya
        return $this->db->get('tbl_invoice')->result(); // Tampilkan data tbl_invoice sesuai tanggal yang diinput oleh user pada filter
    }



    function get_sales_menu($month = null)
    {
        // if (isset($tgl1) && isset($tgl2)) {
        //     $query = $this->db->query("SELECT detail_menu_nama, SUM(detail_porsi) as total_terjual
        //     FROM tbl_detail
        //     LEFT JOIN tbl_invoice
        //     ON tbl_detail.detail_pemesanan_id = tbl_invoice.inv_no
        //     WHERE tbl_invoice.inv_status = 'Pesanan selesai'
        //     GROUP BY tbl_detail.detail_menu_nama;");
        //     return $query;

        if ($month) {
            $query = $this->db->query("SELECT detail_menu_nama, SUM(detail_porsi) as total_terjual, detail_harjul, sum(detail_harjul * detail_porsi) as pendapatan
            FROM tbl_detail
            LEFT JOIN tbl_invoice
            ON tbl_detail.detail_pemesanan_id = tbl_invoice.inv_no
            WHERE tbl_invoice.inv_status = 'Pesanan selesai'
            AND tbl_invoice.inv_tanggal LIKE '$month-%'
            GROUP BY tbl_detail.detail_menu_nama, detail_harjul;");
            return $query;
        }else{
            $query = $this->db->query("SELECT detail_menu_nama, SUM(detail_porsi) as total_terjual, detail_harjul, sum(detail_harjul * detail_porsi) as pendapatan
            FROM tbl_detail
            LEFT JOIN tbl_invoice
            ON tbl_detail.detail_pemesanan_id = tbl_invoice.inv_no
            WHERE tbl_invoice.inv_status = 'Pesanan selesai'
            GROUP BY tbl_detail.detail_menu_nama, detail_harjul;");
            return $query;
        }

    }
}