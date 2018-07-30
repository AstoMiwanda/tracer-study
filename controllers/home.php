<?php

/**
 * 
 */
class home extends controller
{
	
	public function index()
	{
		session_start();
		$berita = self::get_limitHome('t_berita', '0', '1', 'id_berita');
		$listBerita = self::get_limitHome('t_berita', '1', '5', 'id_berita');
		$pengumuman = self::get_limitHome('t_pengumuman', '0', '1', 'id_pengumuman');
		$listPengumuman = self::get_limitHome('t_pengumuman', '1', '5', 'id_pengumuman');
		self::CreateHome('home', $berita, $listBerita, $pengumuman, $listPengumuman);
	}

	public function pengumuman()
	{
		session_start();
		$pengumuman = self::get_limitHome('t_pengumuman', '0', '1', 'id_pengumuman');
		$listPengumuman = self::get_limitHome('t_pengumuman', '1', '5', 'id_pengumuman');
		self::CreateHome('pengumuman', '', '', $pengumuman, $listPengumuman);
	}

	public function berita()
	{
		session_start();
		$berita = self::get_limitHome('t_berita', '0', '1', 'id_berita', 'berita');
		$listBerita = self::get_limitHome('t_berita', '1', '5', 'id_berita', 'pengumuman');
		self::CreateHome('berita', $berita, $listBerita);
	}

	public function kontak_kami()
	{
		session_start();
		self::CreateView('kontak_kami');
	}
}
?>