<?php

require_once './classes/base_url.php';
/**
 * 
 */
class controller extends database
{
	
	public function CreateView($viewName, $data = '', $listdata = ''){
		require_once("./view/$viewName.php");
	}

	public function CreatePagging($viewName, $data = '', $total_laman = '', $laman_sekarang = ''){
		require_once("./view/$viewName.php");
	}

	public function get($table, $desc = '') {
		if ($desc != '') {
			$data = self::query("SELECT * FROM $table ORDER BY $desc DESC");
		}else{
			$data = self::query("SELECT * FROM $table");
		}
		return $data;
	}

	public function get_where($table, $where, $id) {
		$data = self::query("SELECT * FROM $table WHERE `$where` = '$id'");
		return $data;
	}

	public function get_limit($table, $limitStart, $limitCount, $desc = '') {
		if ($desc != '') {
			$data = self::query("SELECT * FROM $table ORDER BY $desc DESC LIMIT $limitStart,$limitCount");
		}else {
			$data = self::query("SELECT * FROM $table LIMIT $limitStart,$limitCount");
		}
		return $data;
	}

	public function get_limitHome($table, $limitStart, $limitCount, $desc = '') {
		if ($desc != '') {

			$data = self::query("SELECT * FROM $table ORDER BY $desc DESC LIMIT $limitStart,$limitCount");

		}else {
			$data = self::query("SELECT * FROM $table LIMIT $limitStart,$limitCount");
		}
		return $data;
	}

	public function CreateHome($viewName, $berita = '', $listBerita = '', $pengumuman = '', $listPengumuman = ''){
		require_once("./view/$viewName.php");
	}

}

?>