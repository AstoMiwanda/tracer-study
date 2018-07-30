<?php

/**
 * 
 */
class data_pengumuman extends controller
{
	
	public function index() {

		login::ceklogin();

		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = data_pengumuman::search($cari);
		}

		$per_laman = 10;
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
		$query = "SELECT * FROM `t_pengumuman`";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$total_data = mysqli_num_rows($result);
		$total_laman = ceil($total_data / $per_laman);
		$awal = ($laman_sekarang - 1) * $per_laman;
		$data_limit = self::get_limit('t_pengumuman', $awal, $per_laman);
		self::CreatePagging('data_pengumuman', $data_limit, $total_laman, $laman_sekarang);
	}

	public function getAdd() {
		login::ceklogin();
		self::CreateView('tambah_pengumuman');
	}

	public function add() {
		$data = array('judul_pengumuman' => $_POST['judul_pengumuman'],
					'penulis_pengumuman' => $_POST['penulis_pengumuman'],
					'tanggal_pengumuman' => $_POST['tanggal_pengumuman'],
					'isi_pengumuman' => $_POST['isi_pengumuman'] );
		m_pengumuman::add($data);
		header('Location: ./data_pengumuman');
	}

	public function delete() {
		login::ceklogin();
		$id = $_GET['id'];
		m_pengumuman::delete($id);
		header('Location: ../data_pengumuman');
	}

	public function update() {
		login::ceklogin();
		$id = $_GET['id'];
		$data = self::get_where('t_pengumuman', 'id_pengumuman', $id);
		self::CreateView('edit_pengumuman', $data);
	}

	public function updateAction() {
		$id = $_POST['id'];
		$data = array('judul_pengumuman' => $_POST['judul'],
					'penulis_pengumuman' => $_POST['penulis'],
					'tanggal_pengumuman' => $_POST['tanggal'],
					'isi_pengumuman' => $_POST['isi'] );
		m_pengumuman::update($id, $data);
		header('Location: ./data_pengumuman');
	}

	public function search($cari) {
		$data = m_pengumuman::get_search($cari);
		return $data;
	}

	public function uploadExcel()
	{
		require_once './template/excel_reader.php';
		if(isset($_POST['submit'])) {

			$target = basename($_FILES['dataPengumuman']['name']);
		    move_uploaded_file($_FILES['dataPengumuman']['tmp_name'], $target);
		 
			// tambahkan baris berikut untuk mencegah error is not readable
		    chmod($_FILES['dataPengumuman']['name'],0777);
		    
		    $data = new Spreadsheet_Excel_Reader($_FILES['dataPengumuman']['name'],false);
		    
			// menghitung jumlah baris file xls
		    $baris = $data->rowcount($sheet_index=0);
		    
		    // jika kosongkan data dicentang jalankan kode berikut
		    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;

		    if($drop == 1) {
		    	//kosongkan tabel pegawai
		    	$truncate ="TRUNCATE TABLE t_pengumuman";
		    	mysqli_query($truncate);
		    };

		    // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
		    for ($i=2; $i<=$baris; $i++) {
		    	//membaca data (kolom ke-1 sd terakhir)
		    	$judul = $data->val($i, 1);
		    	$penulis = $data->val($i, 2);
		    	$tanggal = $data->val($i, 3);
		    	$isi = $data->val($i, 4);
		    	$tema = $data->val($i, 5);
		    	$tanggal_pengumuman = date('Y-m-d', strtotime($tanggal));

		    	//setelah data dibaca, masukkan ke tabel pegawai sql
		    	$hasil = self::query("INSERT INTO `t_pengumuman`(`judul_pengumuman`, `penulis_pengumuman`, `tanggal_pengumuman`, `isi_pengumuman`, `tema`) VALUES ('$judul','$penulis','$tanggal_pengumuman','$isi','$tema')");
		    }
		    
		    if(!$hasil) {
		    	// jika import gagal
		    	echo "<script>alert('Data Berhasil di Import !');
				window.location.replace('http://localhost/tracer-study/data_pengumuman')</script>";
			}else{
				//jika impor berhasil
				echo "<script>alert('Data Gagal di Import !');
				window.location.replace('http://localhost/tracer-study/data_pengumuman')</script>";
			}

			//hapus file xls yang udah dibaca
			unlink($_FILES['dataPengumuman']['name']);
		}
	}
}
?>