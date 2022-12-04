<?php

require 'database.php';
include_once '../memberslist/notifdb.php'; 
session_start();
if (!empty($_POST))
{
$fnameError = null;
$emailError = null;
$phoneError = null;
$messageError = null;



$fname= $_POST['fname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];




$valid = true;
if (empty($fname)) {
$fnameError = 'Please enter your Name';
$valid = false;
}
if ($valid) {
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO queries (fname, email, phone, message) values (?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute(array($fname, $email, $phone, $message));
Database::disconnect();
header("Location: user.php");

}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/x-icon" href="assets/pakul.jpg" />
  <title>MEMBER | LOAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="loan.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
 
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:pakul.pmpc@gmail.com">pakul.pmpc@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:09157636586">0915 763 6586 </a></span></i>
      </div>
    
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="loan.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="../logo.jpg" alt="">
         
        <h1>PMPC: PAKUL<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
                  
        <?php

          $sql_get = mysqli_query($con,"SELECT * FROM notification WHERE status=0");
          $count = mysqli_num_rows($sql_get);

          ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Announcement<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="count">
          <?php echo $count; ?></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php

          $sql_get1 = mysqli_query($con,"SELECT * FROM notification WHERE status=0");
          if(mysqli_num_rows($sql_get1)>0)
          {
          while($result = mysqli_fetch_assoc($sql_get1))
          {
          echo '<a class="dropdown-item text-primary" href="read_msg.php?id='.$result['id'].'">'.$result['name'].'</a>';
          echo '<div class="dropdown-divider"></div>';
          }
          }
          else{
          echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No message for now!<i class="fas fa-frown-open"></i></a>';
          }

          ?>

          <?php

          $sql_get = mysqli_query($con,"SELECT * FROM events WHERE status=0");
          $count = mysqli_num_rows($sql_get);

          ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Events<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="count">
          <?php echo $count; ?></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php

          $sql_get1 = mysqli_query($con,"SELECT * FROM events WHERE status=0");
          if(mysqli_num_rows($sql_get1)>0)
          {
          while($result = mysqli_fetch_assoc($sql_get1))
          {
          echo '<a class="dropdown-item text-primary" href="read_events.php?id='.$result['id'].'">'.$result['events_what'].'</a>';
          echo '<div class="dropdown-divider"></div>';
          }
          }
          else{
          echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No upcoming events for now!<i class="fas fa-frown-open"></i></a>';
          }

          ?>


          <li><a href="#loan">View Loan Services</a></li>
          <li class="dropdown"><a href="#"><span>List Of Members</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                  <li><a href="pending.php">Pending Members</a></li>
                  <li><a href="approvemem.php">Approved Members</a></li>

</ul>
              </li>
             
          <li><a href="../logout.php">Log-Out</a></li>

        </ul>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
      
          <h2>Welcome  <span>Registered Member!</span></h2>
          <p style="font-size:20px;"> <b>MABUHAY!</b> </p>
          <p>" Halina't magsama-sama, mga kapwa magsasaka. <br>Maayos na kooperatiba susi sa ginhawang tinatamasa!!!  "</p> 
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#loan" class="btn-get-started">Get Started</a>
            <br>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="../join.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">





    <!-- ======= Our Services Section ======= -->
    <section id="loan" class="services sections-bg">
      <div class="container" >

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Narito ang ilan sa mga handog ng kooperatiba para sa mga regular na myembro nito</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
              <i class="bi bi-cash"></i>
              </div>
              <h3>MOTOR LOAN</h3>
              <p>Maaari kang manghiram ng pera pambili ng motor na iyong gusto, ito ay may interest rate na <b>12%</b> kada buwan at maaaring abutin ang perang maaaring utangin sa  halagang  <b><i> 250,000 pesos </i></b>depende sa iyong naging share sa Kooperatiba</p>
              <a href="#" class="readmore stretched-link">Forms and Requirements Here<i class="bi bi-arrow-right"></i></a>
             </div>
            
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="bi bi-cash"></i>
              </div>
              <h3>Multi-Purpose Loan</h3>
              <p>Ito naman ay pautang para sa mga alagang hayop tulad ng pugo, manok, baboy, house-improvement at iba pa, ito ay may  <b>2% na interest rate kada buwan</b> maaaring umabot sa halagang   <b><i>100, 000 pesos </i></b>ang pwedeng mahiram depende sa iyong share sa kooperatiba </p>
              <a href="#" class="readmore stretched-link">Forms and Requirements Here<i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="bi bi-cash"></i>
              </div>
              <h3>Educational Loan</h3>
              <p>Hatid ng kooperatiba ang serbisyong ito para sa mga myembrong may anak na nagaaral sa sekondarya ta kolehiyo, ito ay may interest rate <b> na 1% kada buwan</b> maaari namang umabot ang halagang pwedeng utanin sa   <b><i>30,000 pesos</i></b></p>
            
              <a href="#" class="readmore stretched-link">Forms and Requirements Here<i class="bi bi-arrow-right"></i></a>
            
            </div>
            
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="bi bi-cash"></i>
              </div>
              <h3>Business Capital Loan</h3>
              <p>ito ay para naman sa mga myembrong ninanais mag umpisa ng negosyo, ito ay may interest rate na <b>_______</b> at maaaring umabot sa halagang   <b><i>______- pesos</i></b> ang maaaring hiramin</p>
              <a href="#" class="readmore stretched-link">Forms and Requirements Here<i class="bi bi-arrow-right"></i></a>
            
            </div>
          </div><!-- End Service Item -->

       

        </div>

      </div>
    </section><!-- End Our Services Section -->
 <!-- ======= About Us Section ======= -->
 
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="loan.php" class="logo d-flex align-items-center">
            <span>Four-Keeps +1</span>
          </a>
          <p>Saira Camille Y. Ignacio</p>
          <p>Girllie A. Yabut</p>
          <p>Jomer V. Pili</p>
          <p>Jaybyann S. Manalus</p>
          <p>May-an Dozal</p>
          
        </div>

     

        <div class="col-lg-2 col-6 footer-links">
          <h4>Reach out the PMPC here⬇</h4>
          <div class="social-links d-flex mt-4">
            <a href="mailto:pakul.pmpc@gmail.com" class="gmail"><i class="bi bi-google"></i></a>
            <a href="tel:555-666-7777" class="call"><i class="bi bi-telephone-fill"></i></a>
            <a href="https://www.facebook.com/PakulPMPCoop" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100017566899744" class="messenger"><i class="bi bi-messenger"></i></a>
          </div>
        </div>

     
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>