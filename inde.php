<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayanan Masyarakat</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	 <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?module=profil">Profile</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="index.php?module=register">Daftar</a></li>
            <li><a href="index.php?module=kontak">Kontak</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Kepolisian Negara <br>Republik Indonesia</h1>
                    <div class="s-12 m-10 l-8 center"></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <img src="img/polri.png">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->

      
      <!-- Section 1 -->
      
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      
      
      <!-- Section 5 --> 
<?php
					if (@$_GET['module'] == "") { 

		 
		?>
		<section class="section background-dark">
        <div class="line">
         Polsekta Samarinda Utara berdiri pada tahun 1996 dibawah naungan Poltabes Samarinda. Polsekta Samarinda Utara beralamat di Jl. D.I Panjaitan No. 46 Samarinda Utara. Latar belakang berdirinya Polsekta Samarinda Utara ialah karena adanya pembagian wilayah kecamatan yang meliputi Kecamatan Palaran, Kecamatan Samarinda Seberang, Kecamatan Samarinda Ulu, Kecamatan Samarinda Ilir, Kecamatan Samarinda Utara, dan Kecamatan Sungai Kunjang. Tujuan dari berdirinya Polsekta Samarinda Utara ialah untuk memberikan pelayanan kepada masyarakat sekitar khususnya yang berada dikawasan Kecamatan Samarinda Utara. 
        </div>
      </section>
	  <?php
		
		}else{
		
		if($_GET["module"]){
	include_once($_GET["module"].".php");
}
		}
					?>
	  
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Kontak (0541) 743543</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.762301499446!2d117.1890496!3d-0.4584945!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8bf79b3535f8497d!2sPolsekta+Samarinda+Utara!5e0!3m2!1sen!2sid!4v1527166914087" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jl. DI. Panjaitan, Mugirejo, Samarinda, Kota Samarinda, Kalimantan Timur 75116<br>
                     
                  </p>               
                </div>
               
                
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Nomor Telepon</h3>
                  <p>(0541) 743543<br>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2018 | Mediatama Web Indonesia</p>
          
        </div>
       
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>

