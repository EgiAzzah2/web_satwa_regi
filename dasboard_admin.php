<?php
session_start();
if (!isset($_SESSION["id_user"])) 
{
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$id_user=$_SESSION["id_user"];
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Newsoft</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
         

          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
              
              <ul class="navbar-nav  mr-5">
                <li class="nav-item mr-5">
                  <a class="nav-link" href="dasboard_admin.php">
                    <span>dasboard</span>
                  </a>
                </li>
				<li class="nav-item mr-5">
                  <a class="nav-link" href="data_satwa.php">
                    <span>data satwa</span>
                  </a>
                </li>
				<li class="nav-item mr-5">
                  <a class="nav-link" href="logout.php">
                    <span>logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>



  <!-- feature section  -->
  <section class="feature_section layout_padding">
    <div class="container">
      <h1 div class="mb-4"> Selamat Datang,
	<?php 
	  require_once 'koneksi.php';
		$query = "SELECT * FROM tb_akun WHERE id_user='$_SESSION[id_user]'";
		$result = mysqli_query($koneksi, $query);	
		while($data = mysqli_fetch_assoc($result) )
		{
		  ?>
			<?php echo $data['nama']; ?>
		  <?php 
		} 				
	?>
</h1>
</h1>
    </div>
    
  </section>

  <!-- end feature section -->

  <!-- info section -->
  
  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>