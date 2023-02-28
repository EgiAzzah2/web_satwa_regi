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

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container d-flex justify-content-center">
      <h2 class="text-uppercase">
        Berikan Saran Anda
      </h2>
    </div>
    <div class="container-fluid layout_padding-top">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-10 offset-md-2">
            <div class="contact_img-box">
              <img src="images/form-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 form_bg px-0">
          <div class="col-md-10 px-0">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder=" Nama" />
                  </div>
                  <div>
                    <input type="email" placeholder="  Email" />
                  </div>

                  <div>
                    <input type="text" placeholder="Message" class="message_input" />
                  </div>
                  <div class="mt-3 d-flex justify-content-end">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

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