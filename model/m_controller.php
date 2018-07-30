<?php

/**
 * 
 */
class m_controller extends database
{
	
	public function con()
	{
		$con = mysqli_connect("localhost", "root", "", "db_tracer_study");

		if (mysqli_connect_errno()) {
			echo "Failed to connect Mysql";
		}

		return $con;
	}
}
?>