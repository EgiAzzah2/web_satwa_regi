<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Newsoft</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
      rel="stylesheet"
    />
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
            <a class="navbar-brand" href="index.html">
              <span>
                Newsoft
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div
                class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3"
              >
                <form class="form-inline mb-3 mb-lg-0 ">
                  <button
                    class="btn  my-sm-0 nav_search-btn"
                    type="submit"
                  ></button>
                </form>
                <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="login.php">
                      <span>Login</span>
                    </a>
                  </li>
				   <li class="nav-item mr-5">
                    <a class="nav-link" href="saran.php">
                      <span>saran</span>
                    </a>
                  </li>
				   <li class="nav-item mr-5">
                    <a class="nav-link" href="dasboard_pengunjung.php">
                      <span>dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
            
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class=" slider_section position-relative">
        <div class="container">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="slider_item-box">
                  <div class="slider_item-container">
                    <div class="slider_item-detail">
                      <h1>
                      DATA SATWA LANGKA
                      </h1>
                      <p>
                      JIKA TIDAK BISA MAKA HARUS BISA
                      </p>
                    </div>
                  </div>
                </div>
              </div>
             
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="sr-only">Next</span>
        </a>
      </section>
      <!-- end slider section -->
    </div>
    <!-- end contact section -->

    <form method="GET" action="cari.php" style="text-align: center;">
	<label>Kata Pencarian : </label>
	<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit">Cari</button>
</form>
	<table id="example1" class="table table-bordered table-striped" >
	<thead>
		<tr>
			<th>id_satwa</th>
			<th>gambar</th>
			<th>nama</th>
			<th>biografi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include('koneksi.php');
			if(isset($_GET['kata_cari'])) {
				$kata_cari = $_GET['kata_cari'];
				$query = "SELECT * FROM tb_satwa WHERE id_satwa like '%".$kata_cari."%' OR gambar like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR biografi like '%".$kata_cari."%'  ORDER BY id_satwa ASC";
			} else {
				$query = "SELECT * FROM tb_satwa ORDER BY id_satwa ASC";
			}
				
			$result = mysqli_query($koneksi, $query);

			if(!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}
			while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row['id_satwa']; ?></td>
			<td><img src="images/<?php echo $row['gambar']; ?>" width="300px"></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['biografi']; ?></td>
			
		</tr>
		<?php
		}
		?>
	</tbody>
</table>

    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
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
