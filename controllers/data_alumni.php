<?php

/**
 * 
 */
class data_alumni extends controller
{

	public function index() {

		login::ceklogin();

		if(isset($_GET['cari'])){
			$cari = array($_GET['cari']);
			$data = data_alumni::search($cari);
		}

		if (isset($_GET['filter'])) {
			$filter = array($_GET['filter']);
			$data = data_alumni::filter($filter);
		}

		if(isset($_GET['per_laman'])) {
			$per_laman = array($_GET['per_laman']);
		}else {
			$per_laman = 10;
		}
		$per_laman = $per_laman;

		$laman_sekarang = 1;
		if(isset($_GET['laman'])) {
			$laman_sekarang = $_GET['laman'];
			$laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
		}
		$con = mysqli_connect("localhost","root","","db_tracer_study");
		if (mysqli_connect_errno()) {
			echo "Koneksi Gagal!!";
		}
		$query = "SELECT * FROM `t_alumni`";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$total_data = mysqli_num_rows($result);
		$total_laman = ceil($total_data / $per_laman);
		$awal = ($laman_sekarang - 1) * $per_laman;
		$data_limit = self::get_limit('t_alumni', $awal, $per_laman);
		self::CreatePagging('data_alumni', $data_limit, $total_laman, $laman_sekarang);
	}

	public function getAdd() {
		login::ceklogin();
		self::CreateView('tambah_alumni');
	}

	public function add() {
		$data = array('nama' => $_POST['nama'],
					'tempat_lahir' => $_POST['tempat_lahir'],
					'tanggal_lahir' => $_POST['tanggal_lahir'],
					'angkatan' => $_POST['angkatan'],
					'pekerjaan' => $_POST['pekerjaan'],
					'email' => $_POST['email'],
					'nohp' => $_POST['nohp'],
					'no_ijazah' => $_POST['no_ijazah'],
					'alamat' => $_POST['alamat'] );
		m_alumni::add($data);
		header('Location: ./data_alumni');
	}

	public function delete() {
		login::ceklogin();
		$id = $_GET['id'];
		m_alumni::delete($id);
		header('Location: ../data_alumni');
	}

	public function update() {
		login::ceklogin();
		$id = $_GET['id'];
		$data = self::get_where('t_alumni', 'id_alumni', $id);
		self::CreateView('edit_alumni', $data);
	}

	public function updateAction() {
		$id = $_POST['id'];
		$data = array('nama' => $_POST['nama'],
					'angkatan' => $_POST['angkatan'],
					'pekerjaan' => $_POST['pekerjaan'],
					'email' => $_POST['email'],
					'nohp' => $_POST['nohp'],
					'no_ijazah' => $_POST['no_ijazah'],
					'alamat' => $_POST['alamat']);
		m_alumni::update($id, $data);
		header('Location: ./data_alumni');
	}

	public function search($cari) {
		$data = m_alumni::get_search($cari);
		return $data;
	}

	public function filter($filter) {
		$data = m_alumni::get_filter($filter);
		return $data;
	}

	public function uploadExcel()
	{
		require_once './template/excel_reader.php';
		if(isset($_POST['submit'])) {

			$target = basename($_FILES['dataAlumni']['name']);
		    move_uploaded_file($_FILES['dataAlumni']['tmp_name'], $target);
		 
			// tambahkan baris berikut untuk mencegah error is not readable
		    chmod($_FILES['dataAlumni']['name'],0777);
		    
		    $data = new Spreadsheet_Excel_Reader($_FILES['dataAlumni']['name'],false);
		    
			// menghitung jumlah baris file xls
		    $baris = $data->rowcount($sheet_index=0);
		    
		    // jika kosongkan data dicentang jalankan kode berikut
		    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;

		    if($drop == 1) {
		    	//kosongkan tabel pegawai
		    	$truncate ="TRUNCATE TABLE t_alumni";
		    	mysqli_query($truncate);
		    };

		    // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
		    for ($i=2; $i<=$baris; $i++) {
		    	//membaca data (kolom ke-1 sd terakhir)
		    	$nama = $data->val($i, 1);
		    	$tempat_lahir = $data->val($i, 2);
		    	$tanggal = $data->val($i, 3);
		    	$angkatan = $data->val($i, 4);
		    	$pekerjaan = $data->val($i, 5);
		    	$alamat = $data->val($i, 6);
		    	$email = $data->val($i, 7);
		    	$nohp = $data->val($i, 8);
		    	$no_ijazah = $data->val($i, 9);
		    	$tanggal_lahir = date('Y-m-d', strtotime($tanggal));

		    	//setelah data dibaca, masukkan ke tabel pegawai sql
		    	$hasil = self::query("INSERT INTO `t_alumni`(`nama_lengkap_alumni`, `tempat_lahir`, `tanggal_lahir`, `angkatan`, `pekerjaan`, `alamat`, `email`, `no_hp`, `no_ijazah`) VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$angkatan','$pekerjaan','$alamat','$email','$nohp','$no_ijazah')");
		    }
		    
		    if(!$hasil) {
		    	// jika import gagal
		    	echo "<script>alert('Data Berhasil di Import !');
				window.location.replace('http://localhost/tracer-study/data_alumni')</script>";
			}else{
				//jika impor berhasil
				echo "<script>alert('Data Gagal di Import !');
				window.location.replace('http://localhost/tracer-study/data_alumni')</script>";
			}

			//hapus file xls yang udah dibaca
			unlink($_FILES['dataAlumni']['name']);
		}
	}
}

?>