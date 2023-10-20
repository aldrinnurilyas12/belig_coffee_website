<?php
class M_menu extends CI_Model
{

	function get_all_menu()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_menu");
		return $hsl;
	}

	function getminuman()
	{
		$hsl = $this->db->query(
			"SELECT *
		from tbl_menu 
		where menu_kategori_nama='minuman' and promo='tidak'"
		);
		return $hsl;
	}

	function getsignature()
	{
		$result = $this->db->query("SELECT * from tbl_menu where menu_kategori_nama ='signature' and promo ='tidak'");
		return $result;
	}


	function signature()
	{
		$hsl = $this->db->query(
			"SELECT *
		from tbl_menu 
		where menu_kategori_nama='signature' and promo='tidak'"
		);
		return $hsl;
	}



	function get_all_detail()
	{
		$result = $this->db->query("SELECT plg_nama,pemesanan.status,COUNT(pemesanan_id) as total_transaksi  
			
		 FROM pemesanan WHERE pemesanan.status='Pesanan selesai' GROUP BY plg_nama  
		ORDER BY total_transaksi DESC ");
		return $result;
	}


	function get_topmenu()
	{
		$result = $this->db->query("SELECT tbl_menu.menu_nama, tbl_menu.menu_gambar,detail_harjul,SUM(detail_harjul * detail_porsi) as pendapatan, SUM(detail_porsi) as terjual
		FROM tbl_menu 
		INNER JOIN tbl_detail
		ON tbl_menu.menu_id = tbl_detail.detail_menu_id
		INNER JOIN pemesanan
		ON tbl_detail.detail_pemesanan_id = pemesanan.pemesanan_id
		WHERE pemesanan.status='Pesanan selesai' 
		GROUP BY tbl_menu.menu_nama, tbl_menu.menu_gambar, detail_harjul ORDER BY `terjual` DESC");
		return $result;
	}





	function get_id_menu($id)
	{
		$query = $this->db->get_where('tbl_menu', array('menu_id' => $id));
		return $query;
	}

	//UPDATE MENU DENGAN GAMBAR //
	function update_menu_tanpa_harga_baru($kode, $nama, $deskripsi, $kategori, $kat_nama, $gambar)
	{
		$hsl = $this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama',menu_gambar='$gambar' where menu_id='$kode'");
		return $hsl;
	}
	function update_menu_dengan_harga_baru($kode, $nama, $deskripsi, $harga_baru, $kategori, $kat_nama, $gambar)
	{
		$hsl = $this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_baru='$harga_baru',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama',menu_gambar='$gambar' where menu_id='$kode'");
		return $hsl;
	}
	//END EDIT MENU DENGAN GAMBAR//

	//UPDATE MENU TANPA GAMBAR//
	function update_menu_tanpa_harga_baru_tanpa_gambar($kode, $nama, $deskripsi, $kategori, $kat_nama)
	{
		$hsl = $this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama' where menu_id='$kode'");
		return $hsl;
	}
	function update_menu_dengan_harga_baru_tanpa_gambar($kode, $nama, $deskripsi, $harga_baru, $kategori, $kat_nama)
	{
		$hsl = $this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_baru='$harga_baru',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama' where menu_id='$kode'");
		return $hsl;
	}
	//END UPDATE MENU TANPA GAMBAR//

	function hapus_menu($id)
	{
		$hsl = $this->db->query("DELETE FROM tbl_menu where menu_id='$id'");
		return $hsl;
	}


	//MODEL UNTUK MOBILE

	function promo()
	{
		$hsl = $this->db->query("SELECT tbl_menu.menu_id as id_menu, tbl_menu.menu_nama, tbl_menu.menu_deskripsi,tbl_menu.menu_harga_baru, tbl_menu.harga_menu,
		tbl_menu.promo, tbl_menu.diskon, tbl_menu.menu_gambar,
		tbl_menu.tgl_awal_promo, tbl_menu.tgl_akhir_promo, review.menu_id, review.plg_id, review.plg_nama, review.rating, review.isi_review, review.tanggal_review
		FROM tbl_menu
		LEFT JOIN review
		ON tbl_menu.menu_id = review.menu_id
		WHERE tbl_menu.promo='promo';");
		return $hsl;
	}

	function getmakanan()
	{
		$hsl = $this->db->query(
			"SELECT *
		from tbl_menu 
		where menu_kategori_nama='makanan' and promo='tidak'"
		);
		return $hsl;
	}
	function makanan()
	{
		$hsl = $this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_baru,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_kategori_id='1' ORDER BY menu_id DESC");
		return $hsl;
	}
	function minuman()
	{
		$hsl = $this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(harga_menu,2) AS harga_baru,harga_menu,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_kategori_id='2' ORDER BY menu_id DESC");
		return $hsl;
	}
	function favorite()
	{
		$hsl = $this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_baru,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_likes <> 0 ORDER BY menu_likes DESC");
		return $hsl;
	}

	function detail_menu($kode)
	{
		$hsl = $this->db->query("SELECT tbl_menu.*,LEFT(harga_menu,2)  FROM tbl_menu where menu_id='$kode'");
		return $hsl;
	}

	function add_like($kode)
	{
		$hsl = $this->db->query("UPDATE tbl_menu SET menu_likes=menu_likes+1 where menu_id='$kode'");
		return $hsl;
	}


	//END MODEL UNTUK MOBILE
	function update_data_menu($menu_id, $menu_gambar, $menu_nama, $menu_deskripsi, $menu_harga_baru, $diskon, $harga_diskon, $harga_menu, $promo)
	{
		$data = array(

			'menu_id' => $menu_id,
			'menu_gambar' => $menu_gambar,
			'menu_nama' => $menu_nama,
			'menu_deskripsi' => $menu_deskripsi,
			'menu_harga_baru' => $menu_harga_baru,
			'diskon' => $diskon,
			'harga_diskon' => $harga_diskon,
			'harga_menu' => $harga_menu,
			'promo' => $promo

		);

		$this->db->where('menu_id', $menu_id);
		$this->db->update('tbl_menu', $data);
	}
	function simpan_menu($nama, $deskripsi, $menu_harga_baru, $diskon, $harga_diskon, $harga_menu, $kategori, $kat_nama, $gambar, $promo, $tgl_awal_promo, $tgl_akhir_promo)
	{
		$hsl = $this->db->query("INSERT INTO tbl_menu (menu_nama,menu_deskripsi,menu_harga_baru, diskon, harga_diskon, harga_menu,menu_kategori_id,menu_kategori_nama,menu_gambar, promo, tgl_awal_promo , tgl_akhir_promo) 
		VALUES 
		('$nama','$deskripsi','$menu_harga_baru','$diskon','$harga_diskon','$harga_menu','$kategori','$kat_nama','$gambar','$promo','$tgl_awal_promo', '$tgl_akhir_promo')");
		return $hsl;
	}



	function delete($menu_id)
	{


		$this->db->query('SET FOREIGN_KEY_CHECKS=0;');
		$this->db->delete('tbl_menu', array('menu_id' => $menu_id));
	}


	function get_menu_id($menu_id)
	{
		$query = $this->db->get_where('tbl_menu', array('menu_id' => $menu_id));
		return $query;
	}


	function sendreview($payment_id, $tgl_bayar, $menu_id, $plg_id, $plg_nama, $menu_nama, $rating, $isi_review)
	{
		$hsl = $this->db->query("INSERT INTO review (pembayaran_id, tanggal_pembayaran, menu_id,plg_id, plg_nama, menu_nama, rating, isi_review) 
		VALUES 
		('$payment_id', '$tgl_bayar','$menu_id', '$plg_id', '$plg_nama', '$menu_nama', '$rating', '$isi_review')");
		return $hsl;
	}

	function get_review()
	{
		$hasil = $this->db->query("SELECT * from review");
		return $hasil;
	}
}
