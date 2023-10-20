<?php

class M_history extends CI_Model
{

    function get_order()
    {

        $inv_plg_id = $this->session->userdata['kopel'];
        $this->db->where('plg_id', $inv_plg_id);
        $this->db->order_by('pemesanan_id', 'desc');
        $this->db->from('pemesanan');



        $query = $this->db->get();
        return $query->result();
    }

    function get_reservasi()
    {
        $plg_id = $this->session->userdata('kopel');
        $hasil = $this->db->query("SELECT booking.booking_id,booking.plg_id='$plg_id', booking.plg_nama, booking.total, booking.tanggal_booking,
         booking.status_bayar , booking.tanggal_booking,booking.notes, booking.no_meja, pembayaran.tanggal_pembayaran as tanggal_bayar
        FROM booking
        LEFT JOIN pembayaran
        ON booking.booking_id = pembayaran.booking_id
        WHERE booking.plg_id='$plg_id'
        ORDER BY pembayaran.tanggal_pembayaran;");
        return $hasil;
    }


    function get_id_inv()
    {
        $detail_pemesanan_id = $this->session->userdata['kopel'];
        $this->db->where('detail_pemesanan_id', $detail_pemesanan_id);
        $this->db->from('tbl_detail');


        $query = $this->db->get();
        return $query->result();
    }

    function getcount()
    {
        $inv_no = $this->session->userdata['kopel'];
        $this->db->select('*');

        $this->db->where('pemesanan_id', $inv_no);
        $this->db->from('pemesanan');

        $query = $this->db->get();
        return $query->result();
    }
}
