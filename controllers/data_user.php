<?php

/**
 * 
 */
class data_user extends controller
{
	
	public function index() {

		login::ceklogin();

		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = data_user::searchUser($cari);
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
		$query = "SELECT * FROM `t_user`";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$total_data = mysqli_num_rows($result);
		$total_laman = ceil($total_data / $per_laman);
		$awal = ($laman_sekarang - 1) * $per_laman;
		$data_limit = self::get_limit('t_user', $awal, $per_laman);
		self::CreatePagging('data_user', $data_limit, $total_laman, $laman_sekarang);
		// self::CreateView('data_user', $data);
	}

	public function getAdd() {
		login::ceklogin();
		self::CreateView('tambah_user');
	}

	public function add() {
		$data = array('username' => $_POST['username'],
					'password' => md5($_POST['password']),
					'nama_lengkap_user' => $_POST['nama_lengkap_user'] );
		m_user::add($data);
		header('Location: ./data_user');
	}

	public function delete() {
		login::ceklogin();
		$id = $_GET['id'];
		m_user::delete($id);
		header('Location: ../data_user');
	}

	public function update() {
		login::ceklogin();
		$id = $_GET['id'];
		$data = self::get_where('t_user', 'id_user', $id);
		self::CreateView('edit_user', $data);
	}

	public function updateAction() {
		$id = $_POST['id'];
		$data = array('nama' => $_POST['nama'],
					'username' => $_POST['username'],
					'password' => md5($_POST['password']) );
		m_user::update($id, $data);
		header('Location: ./data_user');
	}

	public function searchUser($cari) {
		$data = m_user::get_search($cari);
		return $data;
	}

	public function uploadExcel()
	{
		require_once './template/excel_reader.php';
		if(isset($_POST['submit'])) {

			$target = basename($_FILES['dataUser']['name']);
		    move_uploaded_file($_FILES['dataUser']['tmp_name'], $target);
		 
			// tambahkan baris berikut untuk mencegah error is not readable
		    chmod($_FILES['dataUser']['name'],0777);
		    
		    $data = new Spreadsheet_Excel_Reader($_FILES['dataUser']['name'],false);
		    
			// menghitung jumlah baris file xls
		    $baris = $data->rowcount($sheet_index=0);
		    
		    // jika kosongkan data dicentang jalankan kode berikut
		    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;

		    if($drop == 1) {
		    	//kosongkan tabel pegawai
		    	$truncate ="TRUNCATE TABLE t_user";
		    	mysqli_query($truncate);
		    };

		    // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
		    for ($i=2; $i<=$baris; $i++) {
		    	//membaca data (kolom ke-1 sd terakhir)
		    	$username = $data->val($i, 1);
		    	$password = md5($data->val($i, 2));
		    	$nama = $data->val($i, 3);
		    	$telepon = $data->val($i, 4);
		    	$sms = $data->val($i, 5);
		    	$email = $data->val($i, 6);
		    	$alamat = $data->val($i, 7);
		    	$website = $data->val($i, 8);

		    	//setelah data dibaca, masukkan ke tabel pegawai sql
		    	$hasil = self::query("INSERT INTO `t_user`(`username`, `password`, `nama_lengkap_user`, `telepon`, `sms`, `email`, `alamat`, `website`) VALUES ('$username','$password','$nama','$telepon','$sms','$email','$alamat','$website')");
		    }
		    
		    if(!$hasil) {
		    	// jika import gagal
		    	echo "<script>alert('Data Berhasil di Import !');
				window.location.replace('http://localhost/tracer-study/data_user')</script>";
			}else{
				//jika impor berhasil
				echo "<script>alert('Data Gagal di Import !');
				window.location.replace('http://localhost/tracer-study/data_user')</script>";
			}

			//hapus file xls yang udah dibaca
			unlink($_FILES['dataUser']['name']);
		}
	}
}
?>