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
            </a>
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
   <h2 class="text-uppercase">
        Silakan Registrasi
      </h2>
    <div class="container d-flex justify-content-center">
     
	   <div class="col-md-10 px-0">
            <form method="POST"action="registrasi_simpan.php">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder=" id_user" name="id_user">
                  </div>
                  <div>
                    <input type="nama" placeholder="  nama" name="nama">
                  </div>
				   <div>
                    <input type="password" placeholder="  password" name="password">
                  </div>
				   <div>
                    <input type="no_telp" placeholder="  no_telp" name="no_telp">
                  </div>
				   <div>
                    <input type="email" placeholder="  email" name="email">
                  </div>
				   <div>
                    <input type="alamat" placeholder="  alamat" name="alamat">
                  </div>

                  
                  <div class="mt-3 d-flex justify-content-end">
                    <button type="simpan">
                      Send
                    </button>
                  </div>
                </div>
				
              </div>
            </form>
          </div>
    </div>
    <div class="container-fluid layout_padding-top">
      <div class="row">
      </div>
    </div>
  </section>
</body>

</html>