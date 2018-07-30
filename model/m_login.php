<?php

/**
 * 
 */
class m_login extends m_controller
{
	public function con()
	{
		$con = mysqli_connect("localhost","root","","db_tracer_study");
		if (mysqli_connect_errno()) {
			echo "Koneksi Gagal!!";
		}
		return $con;
	}

	public function login($username, $pass) {
		session_start();

		$con = m_login::con();
		$query = "SELECT * FROM `t_user` WHERE `username`='$username' AND `password`='$pass'";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		return $rows;
	}

	public function getData($username, $pass)
	{
		$con = m_login::con();
		$query = "SELECT * FROM `t_user` WHERE `username`='$username' AND `password`='$pass'";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$data = mysqli_fetch_array($result, MYSQL_ASSOC);
		return $data;
	}
}
?>