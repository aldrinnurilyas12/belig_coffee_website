<?php
class M_order extends CI_Model
{

	function get_myefood($kopel)
	{
		$hsl = $this->db->query("SELECT * FROM pemesanan WHERE plg_id='$kopel' ORDER BY DATE(pemesanan.tanggal_pemesanan) DESC");
		return $hsl;
	}

	function get_total_pelanggan()
	{
		$hsl = $this->db->query("SELECT COUNT(plg_id) AS tot_pelanggan FROM tbl_pelanggan");
		return $hsl;
	}

	function get_testi()
	{
		$hsl = $this->db->query("SELECT COUNT(plg_id) AS tot_testi FROM testimonial");
		return $hsl;
	}

	function get_total_porsi_terjual_bulan_ini()
	{
		$hsl = $this->db->query("SELECT SUM(detail_porsi) AS total_porsi FROM pemesanan JOIN tbl_detail ON pemesanan.pemesanan_id=detail_pemesanan_id WHERE MONTH(pemesanan.tanggal_pemesanan)=MONTH(CURDATE())");
		return $hsl;
	}

	// function get_total_penjualan_bulan_lalu()
	// {
	// 	$hsl = $this->db->query("SELECT COUNT(pemesanan.total) AS total_pemesanan FROM pemesanan WHERE MONTH(pemesanan.tanggal_pemesanan)=MONTH(CURDATE())-1");
	// 	return $hsl;
	// }


	function get_total_penjualan_bulan_lalu()
	{
		$hsl = $this->db->query("SELECT COUNT(pemesanan.total) AS total_pemesanan FROM pemesanan WHERE MONTH(pemesanan.tanggal_pemesanan)=MONTH(CURDATE())");
		return $hsl;
	}

	function total_terjual()
	{
		$result = $this->db->query("SELECT COUNT(pemesanan.total) as total_pemesanan from pemesanan where pemesanan.status='Pesanan selesai' ");
		return $result;
	}

	function get_total_porsi()
	{
		$result = $this->db->query("SELECT SUM(detail_porsi) AS total_porsi FROM pemesanan JOIN tbl_detail ON pemesanan.pemesanan_id=detail_pemesanan_id WHERE pemesanan.status='Pesanan selesai'");

		return $result;
	}




	function total_pendapatan()
	{
		$result = $this->db->query("SELECT SUM(pemesanan.total) as total_pendapatan from pemesanan where pemesanan.status='Pesanan selesai' ");
		return $result;
	}

	function get_total_penjualan_sekarang()
	{
		$hsl = $this->db->query("SELECT SUM(pemesanan.total) AS total_penjualan FROM pemesanan WHERE MONTH(pemesanan.tanggal_pemesanan)=MONTH(CURDATE())");
		return $hsl;
	}


	// function laku_terjual()
	// {

	// 	$result = $this->db->query("SELECT  tbl_menu.menu_nama , SUM(tbl_detail.detail_porsi) as laku_terjual, pemesanan.status
	// 	FROM tbl_menu
		
	// 	INNER JOIN tbl_detail
	// 	ON tbl_menu.menu_id = tbl_detail.detail_menu_id
	// 	INNER JOIN pemesanan
    //     ON tbl_detail.detail_pemesanan_id = pemesanan.pemesanan_id
	// 	WHERE pemesanan.status = 'Pesanan selesai'
	// 	GROUP BY tbl_menu.menu_nama;");

	// 	return $result;
	// }

	function getallbayar()
	{
		$result = $this->db->query("SELECT COUNT(pembayaran_id) as total FROM pembayaran");
		return $result;
	}

	function getallbooking()
	{
		$result = $this->db->query("SELECT COUNT(booking_id) as total_booking FROM booking");
		return $result;
	}



	function get_all_order()
	{
		$result = $this->db->query("SELECT * FROM pemesanan where pemesanan.status='Menunggu Konfirmasi'
		 OR pemesanan.status='Sedang diproses' OR pemesanan.status='Dikonfirmasi'");
		return $result;
	}

	function update_order($kode, $status)
	{
		$hsl = $this->db->query("UPDATE pemesanan SET pemesanan.status='$status' WHERE pemesanan_id='$kode'");
		return $hsl;
	}


	function update_booking($kode, $status)
	{
		$hsl = $this->db->query("UPDATE booking SET booking.status_bayar='$status' WHERE booking_id='$kode'");
		return $hsl;
	}

	function update_status_booking($kode, $plg_id, $plg_nama, $confirm)
	{
		$hsl = $this->db->query("INSERT into konfirmasi_booking (booking_id, plg_id, plg_nama, status_bayar)
		VALUES ('$kode','$plg_id','$plg_nama','$confirm')  ");
		return $hsl;
	}

	function get_invoice()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(pemesanan_id,6)) AS kd_max FROM pemesanan where date(pemesanan.tanggal_pemesanan)=CURDATE()");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "ORD" . date('dmy') . $kd;
	}

	function order_selesai()
	{
		$result = $this->db->query("SELECT * FROM pemesanan where pemesanan.status='Pesanan selesai'");
		return $result;
	}

	function order_produk($no_invoice, $total, $notes, $meja)
	{
		$kopel = $this->session->userdata('kopel');
		$napel = $this->session->userdata('nama_pel');
		$notes = $this->input->post('notes');
		$meja = $this->input->post('meja');
		$this->db->query("INSERT INTO pemesanan (pemesanan_id,plg_id,plg_nama,pemesanan.status,pemesanan.total,notes, meja) VALUES
		 ('$no_invoice','$kopel','$napel','Menunggu Konfirmasi','$total','$notes','$meja')");
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'detail_menu_id'	 =>	$item['id'],
				'detail_menu_nama'   =>	$item['name'],
				'detail_harjul'		 =>	$item['price'],
				'detail_porsi'  	 =>	$item['qty'],
				'detail_subtotal'    =>	$item['subtotal'],
				'detail_pemesanan_id' 	 =>	$no_invoice


			);
			$this->db->insert('tbl_detail', $data);
		}
		return true;
	}


	function reservation_order($no_booking, $total, $tanggal_kedatangan, $jumlah_tamu, $notes, $no_meja)
	{
		$kopel = $this->session->userdata('kopel');
		$napel = $this->session->userdata('nama_pel');
		$tanggal_kedatangan = $this->input->post('tanggal_kedatangan');
		$jumlah_tamu = $this->input->post('jumlah_tamu');
		$no_meja = $this->input->post('no_meja');
		$notes = $this->input->post('notes');
		$this->db->query("INSERT INTO booking (booking_id,plg_id,plg_nama,total, tanggal_kedatangan,jumlah_tamu, no_meja, notes, status_bayar) VALUES
		 ('$no_booking','$kopel','$napel','$total','$tanggal_kedatangan','$jumlah_tamu', '$no_meja', '$notes','Menunggu Konfirmasi')");
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'detail_menu_id'	 =>	$item['id'],
				'detail_menu_nama'   =>	$item['name'],
				'detail_harjul'		 =>	$item['price'],
				'detail_porsi'  	 =>	$item['qty'],
				'detail_subtotal'    =>	$item['subtotal'],
				'detail_booking_id' 	 =>	$no_booking


			);
			$this->db->insert('booking_detail', $data);
		}
		return true;
	}



	function no_booking()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(booking_id,6)) AS kd_max FROM booking where date(tanggal_booking)=CURDATE()");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "BOK" . date('dmy') . $kd;
	}


	function paymentcode()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(pembayaran_id,6)) AS kd_max FROM pembayaran where date(tanggal_pembayaran)=CURDATE()");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "PAY" . date('dmy') . $kd;
	}


	// JANGAN LUPA JOIN PADA TABEL PEMBAYARAN.

	function get_checkoutreservasi($no_booking)
	{
		$hsl = $this->db->query("SELECT booking_id, plg_id, plg_nama, total, tanggal_kedatangan,jumlah_tamu, no_meja, notes,tanggal_booking, booking_detail.detail_menu_id, 
		booking_detail.detail_menu_nama,booking_detail.detail_harjul,booking_detail.detail_porsi, booking_detail.detail_subtotal, booking_detail.detail_booking_id, booking.status_bayar FROM booking LEFT JOIN booking_detail
		 ON booking.booking_id = booking_detail.detail_booking_id WHERE booking.booking_id='$no_booking';");
		return $hsl;
	}















	function set_pembayaran_cod($no_invoice)
	{
		$hsl = $this->db->query("UPDATE pemesanan SET inv_rek_id='COD' WHERE inv_no='$no_invoice'");
		return $hsl;
	}

	function get_checkout($no_invoice)
	{
		$hsl = $this->db->query("SELECT pemesanan_id,pemesanan.tanggal_pemesanan,plg_nama,pemesanan.status,pemesanan.notes,pemesanan.meja,pemesanan.total,detail_menu_id,
		detail_menu_nama,detail_harjul,detail_porsi,detail_subtotal FROM pemesanan JOIN tbl_detail ON pemesanan_id=detail_pemesanan_id WHERE pemesanan_id='$no_invoice'");
		return $hsl;
	}
	function get_rekening($pem_id)
	{
		$hsl = $this->db->query("select * from tbl_rekening where rek_id='$pem_id'");
		return $hsl;
	}
	function set_pembayaran_transfer($no_invoice, $rek_id, $rek_no, $rek_bank, $rek_nama, $rek_cabang)
	{
		$hsl = $this->db->query("UPDATE pemesanan SET inv_rek_id='$rek_id',inv_rek_no='$rek_no',inv_rek_bank='$rek_bank',inv_rek_nama='$rek_nama',inv_rek_cabang='$rek_cabang' WHERE inv_no='$no_invoice'");
		return $hsl;
	}

	function hapus_order($kode)
	{
		$this->db->trans_start();
		$this->db->query("delete from tbl_detail where detail_pemesanan_id='$kode'");
		$this->db->query("delete from pemesanan where inv_no='$kode'");
		$this->db->trans_complete();
		if ($this->db->trans_status() == true)
			return true;
		else
			return false;
	}
}