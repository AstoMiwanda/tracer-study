<?php

/**
 * 
 */
class login extends controller
{
	
	public function index() {
		self::CreateView('login');
	}

	public function masuk() {
		$username = $_POST['username'];
		$pass = md5($_POST['password']);
		$rows = m_login::login($username, $pass);
		if($rows==1) {
			$data = m_login::getData($username, $pass);
			echo $data['id_user'];
			$_SESSION['username'] = $username;
			header('Location: ./beranda_admin');
		}else{
			header('Location: ./login');
		}
	}

	public function logout()
	{
		session_start();
		if (session_destroy()) {
			header('location: ./login');
		}
	}

	public function ceklogin()
	{
		session_start();
		if (!isset($_SESSION['username'])) {
			header('location: ./login');
		}
	}

	public function dataLogin()
	{
		$id = $_SESSION['username'];
		$data = self::get_where('t_user', 'username', $id);
		return $data;
	}
}

?>