<?php

/**
 * 
 */
class m_pengumuman extends m_controller
{
	
	public function add($data) {
		$judul = $data['judul_pengumuman'];
		$penulis = $data['penulis_pengumuman'];
		$tanggal = $data['tanggal_pengumuman'];
		$isi = $data['isi_pengumuman'];
		$tanggal_pengumuman = date('Y-m-d', strtotime($tanggal));
		self::query("INSERT INTO `t_pengumuman`(`judul_pengumuman`, `penulis_pengumuman`, `tanggal_pengumuman`, `isi_pengumuman`, `tema`) VALUES ('$judul','$penulis','$tanggal_pengumuman','$isi', 'pengumuman')");
	}

	public function delete($id) {
		self::query("DELETE FROM `t_pengumuman` WHERE id_pengumuman = $id");
	}

	public function update($id, $data) {
		$judul = $data['judul_pengumuman'];
		$penulis = $data['penulis_pengumuman'];
		$tanggal = $data['tanggal_pengumuman'];
		$isi = $data['isi_pengumuman'];
		self::query("UPDATE `t_pengumuman` SET `judul_pengumuman`='$judul',`penulis_pengumuman`='$penulis',`tanggal_pengumuman`='$penulis',`isi_pengumuman`='$isi' WHERE `id_pengumuman`=$id");
	}

	public function get_search($cari) {
		$data = self::query("SELECT * FROM `t_pengumuman` WHERE `id_pengumuman`='$cari' || `judul_pengumuman`='$cari' || `penulis_pengumuman`='$cari' || `tanggal_pengumuman`='$cari' || `isi_pengumuman`='$cari'");
		return $data;
	}
}
?>