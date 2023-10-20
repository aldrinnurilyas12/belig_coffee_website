<?php
class M_testimonial extends CI_Model
{

    function save_testimonial($plg_id, $plg_nama, $pembayaran_id, $tanggalpesan, $rating, $isi_testimonial, $balasan)
    {

        $result = $this->db->query("INSERT INTO testimonial
        ( plg_id, plg_nama,pembayaran_id, tanggal_pembayaran,rating, isi_testimonial,balasan)
         VALUES ( '$plg_id', '$plg_nama','$pembayaran_id', '$tanggalpesan','$rating', '$isi_testimonial', '$balasan' )");

        return $result;
    }

    function get_all_testimonial($tgl1 = null, $tgl2 = null)
    {
        if (isset($tgl1) && isset($tgl2)) {
            $this->db->select('testimonial.plg_nama, rating, isi_testimonial, balasan, tgl_testimonial, tbl_pelanggan.plg_photo as users_foto');
            $this->db->from('testimonial');
            $this->db->join('tbl_pelanggan', 'id_testimonial = tbl_pelanggan.plg_id', 'left');
            $this->db->where('tgl_testimonial >=', $tgl1 . ' 00:00:00');
            $this->db->where('tgl_testimonial <=', $tgl2 . ' 23:59:59');
            $this->db->order_by('testimonial.plg_nama');
            $result = $this->db->get();
            return $result;
            // $query = $this->db->last_query();
            // print_r($query);
        } else {
            $result = $this->db->query("SELECT testimonial.id_testimonial, testimonial.plg_nama,testimonial.pembayaran_id, testimonial.tanggal_pembayaran,
            testimonial.rating,
            testimonial.isi_testimonial,balasan,testimonial.tgl_testimonial, 
            tbl_pelanggan.plg_photo as users_foto 
            FROM testimonial
            LEFT JOIN tbl_pelanggan
            ON id_testimonial = tbl_pelanggan.plg_id
            ORDER BY testimonial.plg_nama asc");
            return $result;
        }
    }


    function getsemuatesti()
    {

        $result = $this->db->query("SELECT testimonial.id_testimonial, testimonial.plg_nama, testimonial.pembayaran_id, testimonial.tanggal_pembayaran,
        testimonial.rating,
             testimonial.isi_testimonial, testimonial.tgl_testimonial, 
            tbl_pelanggan.plg_photo as users_foto 
            FROM testimonial
            LEFT JOIN tbl_pelanggan
            ON testimonial.id_testimonial = tbl_pelanggan.plg_id
            ORDER BY tbl_pelanggan.plg_photo asc");
        return $result;
    }

    function get_id_testimonial($id_testimonial)
    {

        $query = $this->db->get_where('testimonial', array('id_testimonial' => $id_testimonial));
        return $query;
    }

    function datatestimonial()
    {
        $result = $this->db->query("SELECT * FROM testimonial");
        return $result;
    }


    function get_testi()
    {
        $plg_id = $this->session->userdata('kopel');
        $this->db->select('*');
        $this->db->where('plg_id', $plg_id);
        $this->db->from('testimonial');
        $this->db->order_by('tgl_testimonial', 'desc');

        $query = $this->db->get();
        return $query->result();
    }

    function reply($id_testimonial, $plg_id, $plg_nama, $rating, $isi_testimonial, $balasan)
    {
        $data = array(

            'id_testimonial' => $id_testimonial,
            'plg_id' => $plg_id,
            'plg_nama' => $plg_nama,
            'rating' => $rating,
            'isi_testimonial' => $isi_testimonial,
            'balasan' => $balasan


        );

        $this->db->where('id_testimonial', $id_testimonial);
        $this->db->update('testimonial', $data);
    }


    function get_idpayment($pembayaran_id)
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
}
