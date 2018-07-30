<?php

/**
 * 
 */
class m_berita extends m_controller
{
	
	public function add($data) {
		$judul = $data['judul_berita'];
		$penulis = $data['penulis_berita'];
		$tanggal = $data['tanggal_berita'];
		$isi = $data['isi_berita'];
		$tanggal_berita = date('Y-m-d', strtotime($tanggal));
		self::query("INSERT INTO `t_berita`(`judul_berita`, `penulis_berita`, `tanggal_berita`, `isi_berita`) VALUES ('$judul','$penulis','$tanggal_berita','$isi')");
	}

	public function delete($id) {
		self::query("DELETE FROM `t_berita` WHERE id_berita = $id");
	}

	public function update($id, $data) {
		$judul = $data['judul_berita'];
		$penulis = $data['penulis_berita'];
		$tanggal = $data['tanggal_berita'];
		$isi = $data['isi_berita'];
		self::query("UPDATE `t_berita` SET `judul_berita`='$judul',`penulis_berita`='$penulis',`tanggal_berita`='$penulis',`isi_berita`='$isi' WHERE `id_berita`=$id");
	}

	public function get_search($cari) {
		$data = self::query("SELECT * FROM `t_berita` WHERE `id_berita`='$cari' || `judul_berita`='$cari' || `penulis_berita`='$cari' || `tanggal_berita`='$cari' || `isi_berita`='$cari'");
		return $data;
	}
}
?>