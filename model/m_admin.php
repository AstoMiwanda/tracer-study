<?php

/**
 * 
 */
class m_admin extends m_controller
{
	
	public function update($data)
	{
		$id = $data['id'];
		$username = $data['username'];
		$nama = $data['nama'];
		$telp = $data['telp'];
		$sms = $data['sms'];
		$mail = $data['mail'];
		$alamat = $data['alamat'];
		$website = $data['website'];
		self::query("UPDATE `t_user` SET `username`='$username',`nama_lengkap_user`='$nama',`telepon`='$telp',`sms`='$sms',`email`='$mail',`alamat`='$alamat',`website`='$website' WHERE `id_user` = '$id'");
	}
}
?>