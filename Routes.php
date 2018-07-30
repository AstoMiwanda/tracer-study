<?php

Route::set('login', function(){
	login::index();
});

Route::set('loginSubmit', function(){
	login::masuk();
});

Route::set('logout', function(){
	login::logout();
});


//beranda_admin
Route::set('beranda_admin', function(){
	beranda_admin::index();
});
Route::set('updateAdmin', function(){
	beranda_admin::updateAdmin();
});

//data_alumni
Route::set('data_alumni', function(){
	data_alumni::index();
});

Route::set('deleteAlumni', function(){
	data_alumni::delete();
});

Route::set('updateAlumni', function(){
	data_alumni::update();
});

Route::set('updateAlumniSubmit', function(){
	data_alumni::updateAction();
});

Route::set('getTambahAlumni', function(){
	data_alumni::getAdd();
});

Route::set('tambahAlumni', function(){
	data_alumni::add();
});
Route::set('uploadAlumni', function(){
	data_alumni::uploadExcel();
});


//data_berita
Route::set('data_berita', function(){
	data_berita::index();
});

Route::set('deleteBerita', function(){
	data_berita::delete();
});

Route::set('updateBerita', function(){
	data_berita::update();
});

Route::set('updateBeritaSubmit', function(){
	data_berita::updateAction();
});

Route::set('getTambahBerita', function(){
	data_berita::getAdd();
});

Route::set('tambahBerita', function(){
	data_berita::add();
});

Route::set('uploadBerita', function(){
	data_berita::uploadExcel();
});


//data_pengumuman
Route::set('data_pengumuman', function(){
	data_pengumuman::index();
});

Route::set('deletePengumuman', function(){
	data_pengumuman::delete();
});

Route::set('updatePengumuman', function(){
	data_pengumuman::update();
});

Route::set('updatePengumumanSubmit', function(){
	data_pengumuman::updateAction();
});

Route::set('getTambahPengumuman', function(){
	data_pengumuman::getAdd();
});

Route::set('tambahPengumuman', function(){
	data_pengumuman::add();
});

Route::set('uploadPengumuman', function(){
	data_pengumuman::uploadExcel();
});


//data_user
Route::set('data_user', function(){
	data_user::index();
});

Route::set('deleteUser', function(){
	data_user::delete();
});

Route::set('updateUser', function(){
	data_user::update();
});

Route::set('updateUserSubmit', function(){
	data_user::updateAction();
});

Route::set('getTambahUser', function(){
	data_user::getAdd();
});

Route::set('tambahUser', function(){
	data_user::add();
});

Route::set('uploadUser', function(){
	data_user::uploadExcel();
});


//home
Route::set('home', function(){
	home::index();
});
//pengumuman
Route::set('pengumuman', function(){
	home::pengumuman();
});
//berita
Route::set('berita', function(){
	home::berita();
});
//kontak_kami
Route::set('kontak_kami', function(){
	home::kontak_kami();
});
?>