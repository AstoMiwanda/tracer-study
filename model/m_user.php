<?php

/**
 * 
 */
class m_user extends m_controller
{
	
	public function add($data) {
		$username = $data['username'];
		$password = $data['password'];
		$nama = $data['nama_lengkap_user'];
		self::query("INSERT INTO `t_user`(`username`, `password`, `nama_lengkap_user`) VALUES ('$username','$password','$nama')");
	}

	public function delete($id) {
		self::query("DELETE FROM `t_user` WHERE id_user = $id");
	}

	public function update($id, $data) {
		$username = $data['username'];
		$password = $data['password'];
		$nama = $data['nama'];
		self::query("UPDATE `t_user` SET `username`='$username',`password`='$password',`nama_lengkap_user`='$nama' WHERE `id_user`=$id");
	}

	public function get_search($cari) {
		$data = self::query("SELECT * FROM `t_user` WHERE `id_user`='$cari' || `username`='$cari' || `nama_lengkap_user`='$cari'");
		return $data;
	}
}
?>