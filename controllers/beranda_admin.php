<?php

/**
 * 
 */
class beranda_admin extends controller
{
	
	public function index()
	{
		login::ceklogin();
		$data = login::dataLogin();
		self::CreateView('beranda_admin', $data);
	}

	public function updateAdmin()
	{
		login::ceklogin();
		$data = array('id' => $_POST['id'],
				'username' => $_POST['username'],
				'nama' => $_POST['namaLengkap'],
				'telp' => $_POST['telp'],
				'sms' => $_POST['sms'],
				'mail' => $_POST['mail'],
				'alamat' => $_POST['alamat'],
				'website' => $_POST['website'] );
		m_admin::update($data);
		header('Location: ./beranda_admin');
	}
}
?>