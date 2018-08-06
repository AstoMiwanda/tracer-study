<?php

/**
 * 
 */
class data_berita extends controller
{
	
	public function index() {

		login::ceklogin();

		$per_laman = 5;
		if(isset($_GET['per_laman'])) {
			$per_laman = $_GET['per_laman'];
		}
		$laman_sekarang = 1;
		if(isset($_GET['laman'])) {
			$laman_sekarang = $_GET['laman'];
			$laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
		}
		$con = mysqli_connect("localhost","root","","db_tracer_study");
		if (mysqli_connect_errno()) {
			echo "Koneksi Gagal!!";
		}

		if (isset($_GET['cari'])) {
			$cari = $_GET['cari'];
			$query = "SELECT * FROM `t_berita` WHERE `id_berita`='$cari' || `judul_berita`='$cari' || `penulis_berita`='$cari' || `tanggal_berita`='$cari' || `isi_berita`='$cari'";
		}else { $query = "SELECT * FROM `t_berita`"; }

		$result = mysqli_query($con, $query) or die(mysql_error());
		$total_data = mysqli_num_rows($result);
		$total_laman = ceil($total_data / $per_laman);
		$awal = ($laman_sekarang - 1) * $per_laman;

		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data_limit = data_berita::search($awal, $per_laman, $cari);
		}else{
			$data_limit = self::get_limit('t_berita', $awal, $per_laman);
		}
		self::CreatePagging('data_berita', $data_limit, $total_laman, $laman_sekarang);
	}

	public function getAdd() {
		login::ceklogin();
		self::CreateView('tambah_berita');
	}

	public function add() {
		$data = array('judul_berita' => $_POST['judul_berita'],
					'penulis_berita' => $_POST['penulis_berita'],
					'tanggal_berita' => $_POST['tanggal_berita'],
					'isi_berita' => $_POST['isi_berita'] );
		m_berita::add($data);
		header('Location: ./data_berita');
	}

	public function delete() {
		login::ceklogin();
		$id = $_GET['id'];
		m_berita::delete($id);
		header('Location: ../data_berita');
	}

	public function update() {
		login::ceklogin();
		$id = $_GET['id'];
		$data = self::get_where('t_berita', 'id_berita', $id);
		self::CreateView('edit_berita', $data);
	}

	public function updateAction() {
		$id = $_POST['id'];
		$data = array('judul_berita' => $_POST['judul'],
					'penulis_berita' => $_POST['penulis'],
					'tanggal_berita' => $_POST['tanggal'],
					'isi_berita' => $_POST['isi'] );
		m_berita::update($id, $data);
		header('Location: ./data_berita');
	}

	public function search($awal, $per_laman, $cari) {
		$data = m_berita::get_search($awal, $per_laman, $cari);
		return $data;
	}

	public function uploadExcel()
	{
		require_once './template/excel_reader.php';
		if(isset($_POST['submit'])) {

			$target = basename($_FILES['dataBerita']['name']);
		    move_uploaded_file($_FILES['dataBerita']['tmp_name'], $target);
		 
			// tambahkan baris berikut untuk mencegah error is not readable
		    chmod($_FILES['dataBerita']['name'],0777);
		    
		    $data = new Spreadsheet_Excel_Reader($_FILES['dataBerita']['name'],false);
		    
			// menghitung jumlah baris file xls
		    $baris = $data->rowcount($sheet_index=0);
		    
		    // jika kosongkan data dicentang jalankan kode berikut
		    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;

		    if($drop == 1) {
		    	//kosongkan tabel pegawai
		    	$truncate ="TRUNCATE TABLE t_berita";
		    	mysqli_query($truncate);
		    };

		    // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
		    for ($i=2; $i<=$baris; $i++) {
		    	//membaca data (kolom ke-1 sd terakhir)
		    	$judul_berita = $data->val($i, 1);
		    	$penulis = $data->val($i, 2);
		    	$tanggal = $data->val($i, 3);
		    	$isi = $data->val($i, 4);
		    	$tema = $data->val($i, 5);
		    	$tanggal_berita = date('Y-m-d', strtotime($tanggal));

		    	//setelah data dibaca, masukkan ke tabel pegawai sql
		    	$hasil = self::query("INSERT INTO `t_berita`(`judul_berita`, `penulis_berita`, `tanggal_berita`, `isi_berita`, `tema`) VALUES ('$judul_berita','$penulis','$tanggal_berita','$isi','$tema')");
		    }
		    
		    if(!$hasil) {
		    	// jika import gagal
		    	echo "<script>alert('Data Berhasil di Import !');
				window.location.replace('http://localhost/tracer-study/data_berita')</script>";
			}else{
				//jika impor berhasil
				echo "<script>alert('Data Gagal di Import !');
				window.location.replace('http://localhost/tracer-study/data_berita')</script>";
			}

			//hapus file xls yang udah dibaca
			unlink($_FILES['dataBerita']['name']);
		}
	}
}
?>