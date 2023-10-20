<?php

class M_pembayaran extends CI_Model
{


    function get_idbooking($booking_id)
    {
        $hsl = $this->db->query("SELECT * FROM booking WHERE booking_id='$booking_id'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'booking_id' => $data->booking_id,
                    'tanggal_booking' => $data->tanggal_booking,
                    'total'             => $data->total

                );
            }
        }
        return $hasil;
    }


    function get_idpemesanan($pemesanan_id)
    {
        $hsl = $this->db->query("SELECT * FROM pemesanan WHERE pemesanan_id='$pemesanan_id'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'pemesanan_id' => $data->pemesanan_id,
                    'tanggal_pemesanan' => $data->tanggal_pemesanan,
                    'total'             => $data->total

                );
            }
        }
        return $hasil;
    }



    public function save_payment(
        $no_payment,
        $booking_id,
        $plg_id,
        $plg_nama,
        $tanggal_booking,
        $bank,
        $total,
        $notes,
        $foto_bukti
    ) {
        $data = $this->db->query("INSERT INTO pembayaran(pembayaran_id,booking_id,plg_id, plg_nama, 
        tanggal_booking,bank, total,notes,foto_bukti)
        Values ('$no_payment','$booking_id', '$plg_id', '$plg_nama', '$tanggal_booking','$bank', 
        '$total','$notes','$foto_bukti')");
        return $data;
    }

    public function save_paymentdinein(
        $no_payment,
        $pemesanan_id,
        $plg_id,
        $plg_nama,
        $tanggal_pemesanan,
        $bank,
        $total,
        $notes,
        $foto_bukti
    ) {
        $data = $this->db->query("INSERT INTO pembayaran(pembayaran_id,pemesanan_id,plg_id, plg_nama, 
        tanggal_pemesanan,bank, total,notes,foto_bukti)
        Values ('$no_payment','$pemesanan_id', '$plg_id', '$plg_nama', '$tanggal_pemesanan','$bank', 
        '$total','$notes','$foto_bukti')");
        return $data;
    }


    function get_payment()
    {
        $plg_id = $this->session->userdata('kopel');
        $hasil = $this->db->query("SELECT pembayaran.booking_id,
        pembayaran.plg_nama, pembayaran.tanggal_booking, pembayaran.bank, 
        pembayaran.total, pembayaran.notes, pembayaran.foto_bukti, pembayaran.tanggal_pembayaran
         FROM pembayaran   where pembayaran.plg_id ='$plg_id'  and pembayaran.booking_id LIKE 'BOK%' ORDER BY pembayaran.tanggal_pembayaran DESC;");
        return $hasil;
    }

    function get_paymentdinein()
    {
        $plg_id = $this->session->userdata('kopel');

        $hasil = $this->db->query("SELECT pembayaran_id, pembayaran.pemesanan_id,
        pembayaran.plg_nama, pembayaran.tanggal_pemesanan, pembayaran.bank, 
        pembayaran.total, pembayaran.notes, pembayaran.foto_bukti, pembayaran.tanggal_pembayaran
         FROM pembayaran   where pembayaran.plg_id ='$plg_id'  and pembayaran.pemesanan_id LIKE 'ORD%';");
        return $hasil;
    }






    function get_reservasi()
    {

        $hasil = $this->db->query("SELECT * from booking");
        return $hasil;
    }

    function getdetail()
    {
        $result = $this->db->query("SELECT * FROM detail_reservasi");
        return $result;
    }

    function getdatapembayaran()
    {
        $hasil = $this->db->query("SELECT * FROM pembayaran");
        return $hasil;
    }

    function getbooking()
    {
        $result = $this->db->query("SELECT pembayaran.foto_bukti, pembayaran.pembayaran_id, pembayaran.booking_id, pembayaran.plg_id, pembayaran.plg_nama,
        pembayaran.tanggal_booking, pembayaran.bank, pembayaran.total, pembayaran.notes, pembayaran.foto_bukti, pembayaran.tanggal_pembayaran FROM pembayaran
        WHERE booking_id LIKE 'BOK%';");
        return $result;
    }

    function getpemesanan()
    {
        $result = $this->db->query("SELECT  pembayaran.foto_bukti , pembayaran.pembayaran_id, pembayaran.pemesanan_id, pembayaran.plg_id, pembayaran.plg_nama,
        pembayaran.tanggal_pemesanan, pembayaran.bank, pembayaran.total, pembayaran.notes, pembayaran.foto_bukti, pembayaran.tanggal_pembayaran FROM pembayaran
        WHERE pemesanan_id LIKE 'ORD%';");
        return $result;
    }
}
