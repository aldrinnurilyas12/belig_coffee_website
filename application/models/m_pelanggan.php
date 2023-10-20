<?php
class M_pelanggan extends CI_Model
{

	function get_grafik_pelanggan()
	{
		// $query=$this->db->query("SELECT DATE_FORMAT(plg_register,'%M') AS bulan,COUNT(plg_id) AS total FROM tbl_pelanggan WHERE YEAR(plg_register)=YEAR(CURDATE()) GROUP BY MONTH(plg_register)");

		// if($query->num_rows() > 0){
		//     foreach($query->result() as $data){
		//         $hasil[] = $data;
		//     }
		//     return $hasil;
		// }
	}

	function get_all_pelanggan()
	{
		$hsl = $this->db->query("select * from tbl_pelanggan order by plg_id desc");
		return $hsl;
	}

	function get_customer($id)
	{
		$query = $this->db->get_where('tbl_pelanggan', array('plg_id' => $id));
		return $query;
	}




	function update_customer($plg_id, $plg_nama, $plg_alamat, $plg_notelp, $plg_email)
	{
		$data = array(
			'plg_id' => $plg_id,
			'plg_nama' => $plg_nama,
			'plg_alamat' => $plg_alamat,
			'plg_notelp' => $plg_notelp,
			'plg_email' => $plg_email,

		);
		$this->db->where('plg_id', $plg_id);
		$this->db->update('tbl_pelanggan', $data);
	}







	function cek_pelanggan($u, $p)
	{
		$hsl = $this->db->query("select * from tbl_pelanggan where plg_email='$u' and plg_password=md5('$p')");
		return $hsl;
	}
	function simpan_pelanggan_dengan_gambar($nama, $alamat, $kontak, $email, $pass, $gambar)
	{
		$hsl = $this->db->query("INSERT INTO tbl_pelanggan(plg_nama,plg_alamat,plg_notelp,plg_email,plg_photo,plg_password) VALUES ('$nama','$alamat','$kontak','$email','$gambar',md5('$pass'))");
		return $hsl;
	}
	function simpan_pelanggan_tanpa_gambar($nama, $alamat, $kontak, $email, $pass)
	{
		$hsl = $this->db->query("INSERT INTO tbl_pelanggan(plg_nama,plg_alamat,plg_notelp,plg_email,plg_password) VALUES ('$nama','$alamat','$kontak','$email',md5('$pass'))");
		return $hsl;
	}
	function hapus_pelanggan($kode)
	{
		$hsl = $this->db->query("delete from tbl_pelanggan where plg_id='$kode'");
		return $hsl;
	}

	function get_all_pelanggan_terbaru()
	{
		$hsl = $this->db->query("select * from tbl_pelanggan order by plg_id desc");
		return $hsl;
	}


	function get_order($id)
	{

		$id = $this->session->userdata('kopel');
		$result = $this->db->query("SELECT COUNT(pemesanan_id) + COUNT(booking.booking_id) as total_order
		from pemesanan
		LEFT JOIN booking
		ON pemesanan.plg_id = booking.plg_id
		WHERE pemesanan.plg_id='$id' AND status ='Pesanan selesai'
		GROUP BY pemesanan.plg_id;");
		return $result;
	}

	function get_payment($id)
	{
		$id = $this->session->userdata('kopel');
		$result = $this->db->query("SELECT COUNT(pembayaran_id) as total_payment from pembayaran where plg_id='$id' GROUP BY plg_id");
		return $result;
	}

	function get_testimonial($id)
	{
		$id = $this->session->userdata('kopel');
		$result = $this->db->query("SELECT plg_id, COUNT(id_testimonial) as total_testi from testimonial WHERE plg_id='$id' group by plg_id");
		return $result;
	}

	function get_keluhan($id)
	{
		$id = $this->session->userdata('kopel');
		$result = $this->db->query("SELECT plg_id, COUNT(keluhan) as total_keluhan from keluhan where plg_id='$id'
		GROUP BY plg_id");
		return $result;
	}
}
