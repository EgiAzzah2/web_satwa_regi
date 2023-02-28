<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_user	=	$_POST['id_user'];
	$nama		=	$_POST['nama'];
	$password	=	$_POST['password'];
	$no_telp	=	$_POST['no_telp'];
	$email		=	$_POST['email'];
	$alamat		=	$_POST['alamat'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_akun(id_user, nama, password, no_telp, email, alamat) VALUES('$id_user', '$nama', '$password', '$no_telp', '$email', '$alamat')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman login
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="login.php";</script>'; //GANTI
				}
				else //jika tid_userak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman registrasi
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="registrasi.php";</script>'; //GANTI
				}
?>




