<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_satwa		=	$_POST['id_satwa'];
	$gambar		    =	$_POST['gambar'];
	$nama			=	$_POST['nama'];
	$biografi		=	$_POST['biografi'];
	
	$sql = mysqli_query($koneksi, "UPDATE tb_satwa SET id_satwa='$id_satwa', gambar='$gambar', nama='$nama', biografi='$biografi' WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="data_satwa.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>