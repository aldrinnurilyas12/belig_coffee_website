<?php
class M_keluhan extends CI_Model
{

    function save_keluh($plg_id, $plg_nama, $pembayaran_id, $tgl_bayar, $kategori, $keluhan, $tanggapan, $kel_status)
    {

        $result = $this->db->query("INSERT INTO keluhan
        (plg_id, plg_nama, pembayaran_id, tanggal_pembayaran, kategori, keluhan,tanggapan,kel_status)
         VALUES ( '$plg_id', '$plg_nama','$pembayaran_id', '$tgl_bayar', '$kategori', '$keluhan', '$tanggapan','Belum Ditanggapi')");
        return $result;
    }


    function get_keluhan()
    {
        $hsl = $this->db->query("SELECT COUNT(plg_id) AS tot_keluhan FROM keluhan where kel_status='sudah ditanggapi'");
        return $hsl;
    }

    function get_keluhan_tanggapi($tgl1 = null, $tgl2 = null)
    {
        if (isset($tgl1) && isset($tgl2)) {
            $result = $this->db->query("SELECT * FROM keluhan WHERE tanggal_keluhan >= '" . $tgl1 . " 00:00:00' AND tanggal_keluhan <= '" . $tgl2 . " 23:59:59' AND kel_status='sudah ditanggapi'");
            return $result;
        } else {
            $result = $this->db->query("SELECT * FROM keluhan where kel_status='sudah ditanggapi'");
            return $result;
        }
    }

    function get_belum_keluhan()
    {
        $hsl = $this->db->query("SELECT COUNT(plg_id) AS belum_keluhan FROM keluhan where kel_status='Belum Ditanggapi'");
        return $hsl;
    }




    function get_all_keluhan()
    {
        $query = $this->db->query("SELECT keluhan.keluhan_id, keluhan.plg_nama, 
        keluhan.kategori, keluhan.keluhan,keluhan.tanggapan, keluhan.kel_status,keluhan.tanggal_pembayaran,keluhan.tanggal_keluhan, tbl_pelanggan.plg_notelp as telepon
        FROM keluhan
        LEFT JOIN tbl_pelanggan
        ON keluhan.keluhan_id = tbl_pelanggan.plg_id
       ORDER BY keluhan.plg_nama
        
        ");
        return $query;
    }

    function get_cust_keluh()
    {
        $plg_id = $this->session->userdata('kopel');
        $this->db->select('*');
        $this->db->where('plg_id', $plg_id);
        $this->db->from('keluhan');
        $this->db->order_by('tanggal_keluhan', 'desc');


        $query = $this->db->get();
        return $query->result();
    }

    function get_keluhan_id($keluhan_id)
    {
        $query = $this->db->get_where('keluhan', array('keluhan_id' => $keluhan_id));
        return $query;
    }



    function reply($keluhan_id, $plg_id, $plg_nama, $kategori, $keluhan, $tanggapan, $kel_status)
    {
        $data = array(

            'keluhan_id' => $keluhan_id,
            'plg_id' => $plg_id,
            'plg_nama' => $plg_nama,
            'kategori' => $kategori,
            'keluhan' => $keluhan,
            'tanggapan' => $tanggapan,
            'kel_status' => $kel_status


        );

        $this->db->where('keluhan_id', $keluhan_id);
        $this->db->update('keluhan', $data);
    }



    function get_idpembayaran($pembayaran_id)
    {
        $hsl = $this->db->query("SELECT * FROM pembayaran WHERE pembayaran_id='$pembayaran_id'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'pembayaran_id' => $data->pembayaran_id,
                    'tanggal_pembayaran' => $data->tanggal_pembayaran


                );
            }
        }
        return $hasil;
    }


    function get_idbooking($booking_id)
    {
        $hsl = $this->db->query("SELECT * FROM booking WHERE booking_id='$booking_id'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'booking_id' => $data->booking_id,
                    'tanggal_booking' => $data->tanggal_booking


                );
            }
        }
        return $hasil;
    }
}
