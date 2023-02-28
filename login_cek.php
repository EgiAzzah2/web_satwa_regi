<?php
session_start();
include "koneksi.php";
$id_user = $_POST["id_user"];
$password = $_POST["password"];
$sql = "select * from tb_akun where id_user='".$id_user."' and password='".$password."' limit 1";
$hasil = mysqli_query ($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
?>
<?php
	if ($jumlah>0) 
	{
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_user"]=$row["id_user"];
		header("Location:dasboard_admin.php");
	}
	else 
	{
?>
			<script type='text/javascript'>
				toastr.error('Invalid_user, Data Akun Tid_userak sesuai !');
				function pindah(url)
				{
					window.location = url;
				}
				setInterval('pindah("login.php")',3000);
			</script>

<?php
}
?>