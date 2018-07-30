<?php

/**
 * 
 */
class m_alumni extends m_controller
{
	public function add($data) {
		$nama = $data['nama'];
		$tempat_lahir = $data['tempat_lahir'];
		$tanggal = $data['tanggal_lahir'];
		$angkatan = $data['angkatan'];
		$pekerjaan = $data['pekerjaan'];
		$email = $data['email'];
		$nohp = $data['nohp'];
		$no_ijazah = $data['no_ijazah'];
		$alamat = $data['alamat'];
		$tanggal_lahir = date('Y-m-d', strtotime($tanggal));
		self::query("INSERT INTO `t_alumni`(`nama_lengkap_alumni`, `tempat_lahir`, `tanggal_lahir`, `angkatan`, `pekerjaan`, `alamat`, `email`, `no_hp`, `no_ijazah`) VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$angkatan','$pekerjaan','$alamat','$email','$nohp','$no_ijazah')");
	}

	public function delete($id) {
		self::query("DELETE FROM `t_alumni` WHERE id_alumni = $id");
	}

	public function update($id, $data) {
		$nama = $data['nama'];
		$angkatan = $data['angkatan'];
		$pekerjaan = $data['pekerjaan'];
		$email = $data['email'];
		$nohp = $data['nohp'];
		$no_ijazah = $data['no_ijazah'];
		$alamat = $data['alamat'];
		self::query("UPDATE `t_alumni` SET `nama_lengkap_alumni`='$nama', `angkatan`='$angkatan', `pekerjaan`='$pekerjaan', `alamat`='$alamat', `email`='$email', `no_hp`='$nohp', `no_ijazah`='$no_ijazah' WHERE `id_alumni`='$id'");
	}

	public function get_search($cari) {
		$data = self::query("SELECT * FROM `t_alumni` WHERE `id_alumni`='$cari' || `nama_lengkap_alumni`='$cari' || `tempat_lahir`='$cari' || `tanggal_lahir`='$cari' || `angkatan`='$cari' || `pekerjaan`='$cari' || `alamat`='$cari' || `email`='$cari' || `no_hp`='$cari' || `no_ijazah`='$cari'");
		return $data;
	}

	public function get_filter($filter) {
		$data = self::query("SELECT * FROM `t_alumni` WHERE `angkatan`='$filter'");
		return $data;
	}
}
?>