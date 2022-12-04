<?php

require 'userpage/database.php';
include_once 'memberslist/notifdb.php'; 

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
header("Location: index.php");

}
}





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MAIN PAGE | PMPCMMS : PAKUL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="userpage/assets/pakul.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="userpage/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@1.5.0/dist/css/bootstrap.min.css">

  <link href="userpage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="userpage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
        <!-- font awesome-->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <style>
        #count{
border-radius:50%;
position: relative;
top:-10px;
left:-10px;
}

.d-block{
    width:80%;
    height:100%;
    margin-left:10%;
}
.carousel-control-next-icon{
    color:orange;
}


/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/

.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: -15px;
  z-index: 99999;
  background: var(--color-secondary);
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: black;
  line-height: 0;
}

.scroll-top:hover {
  background: rgba(248, 90, 64, 0.8);
  color: black;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
  bottom: 15px;
}

</style>
 

    <body id="page-top">
        <!-- Navigation-->
 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Pakul Multi-Purpose Cooperative</a>
                <button class="navbar-toggler navbar-toggler-right" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarResponsive" 
                aria-controls="navbarResponsive" 
                aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        



            <?php

            $sql_get = mysqli_query($con,"SELECT * FROM events WHERE status=0");
            $count = mysqli_num_rows($sql_get);

            ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Events <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="count">
            <?php echo $count; ?></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php

        $sql_get1 = mysqli_query($con,"SELECT * FROM events WHERE status=0");
        if(mysqli_num_rows($sql_get1)>0)
        {
        while($result = mysqli_fetch_assoc($sql_get1))
        {
        echo '<a class="dropdown-item text-primary" href="userpage/read_events.php?id='.$result['id'].'">'.$result['events_what'].'</a>';
        echo '<div class="dropdown-divider"></div>';
        }
        }
        else{
        echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No upcoming events for now!<i class="fas fa-frown-open"></i></a>';
        }

        ?>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#membership">Membership</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Log-in</a></li>
                        

                        

        </li>
                        <ul>
                    
                </div></div>
            </div>
        </nav>


    <!-- Masthead-->
    <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Pakul Primary Multi-Purpose Cooperative</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Pakul 3109 Jaen, Nueva Ecija Philippines</p>
                        <a class="btn btn-primary btn-xl" href="#services">Mabuhay Users!</a>
                    </div>
                </div>
            </div>
        </header>
            


           

        
 
                    <!----REQUIREMENTS--->



        <!-- services-->
        <center>

        <section class="page-section " id="services">

        <div class="container px-4 px-lg-1">
                <h2 class="text-center mt-0"> WHAT WE OFFER HERE IN CO-OP</h2>
                <hr class="divider"/>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        
                        <div class="mt-5">
                            <div class="mb-2"></div>
                        
                        
                            <button type="button"  data-toggle="modal" data-target="#myModal"><i class="bi-patch-question-fill fs-1 text-primary"></i></button>
                                <h3 class="h4 mb-2">Livelihood Program</h3>
                                <p>Narito ang ilan sa mga handog ng kooperatiba para sa Livelihood Loan</p>


                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                
                                    <h3 class="h4 mb-2">Livelihood Program</h3>
                                </div>
                                <div class="modal-body">
      <img src="userpage/services/serv1.jpg" class="d-block" alt="...">

                                <p class="text-muted mb-0">Pangunahing layunin ng kooperatiba ay maiangat ang buhay ng pamilya sa pamamagitan ng pagsasaka.<br>Naglungsad ang PMPC ng Livelihood Program upang magbigay at magturo ng sapat na kaalaman sa ibat ibang sektor ng agrikultura. </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    


                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <button type="button"  data-toggle="modal" data-target="#myModal1"><i class="bi-patch-question-fill fs-1 text-primary"></i></button>
                              <h3 class="h4 mb-2">Educational Loan</h3>
                              <p>Narito ang ilan sa mga handog ng kooperatiba para sa Educational Loan</p>

                            <!-- Scrollable modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                
                                    <h3 class="h4 mb-2">Educational Loan</h3>

                                </div>
                                <div class="modal-body">
                                     <img src="userpage/services/serv2.jpg" class="d-block" alt="...">
                                     <p class="text-muted mb-0">Nag handog din ng pautang ang kooperatiba, itoy isang tulong para sa mga magaaral na anak ng myembro ng nasabing samahan. <br>Ang nasabing utang ay maaring bayaran sa loob ng anim na buwan na hulugan. Itoy may patubo na 1% kada buwan.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>  
                        </div>
                    </div>


                     


                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <button type="button"  data-toggle="modal" data-target="#myModal2"><i class="bi-patch-question-fill fs-1 text-primary"></i></button>
                                <h3 class="h4 mb-2">Machinery Help</h3>
                                <p>Narito ang ilan sa mga handog ng kooperatiba para sa Machinery Help</p>

                            <!-- Scrollable modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                
                                    <h3 class="h4 mb-2">Machinery Help</h3>


                                </div>
                                <div class="modal-body">
                                     <img src="userpage/services/serv3.jpg" class="d-block" alt="...">
                                     <p class="text-muted mb-0">Nag handog din ng pautang ang kooperatiba, itoy isang tulong para sa mga magaaral na anak ng myembro ng nasabing samahan. <br>Ang nasabing utang ay maaring bayaran sa loob ng anim na buwan na hulugan. Itoy may patubo na 1% kada buwan.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>  
                            </div>
                    </div>



                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">

                        <button type="button"  data-toggle="modal" data-target="#myModal3"><i class="bi-patch-question-fill fs-1 text-primary" style="font-size:50px;"></i></button>
                        <h3 class="h4 mb-2">Multi-Purpose Loan</h3>
                        <p>Narito ang ilan sa mga handog ng kooperatiba para sa Multi-Purpose Loan</p>


                            <!-- Scrollable modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal3" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                
                                    <h3 class="h4 mb-2">Multi-Purpose Loan</h3>



                                </div>
                                <div class="modal-body">
                                     <img src="userpage/services/serv4.jpg" class="d-block" alt="...">
                                     <p class="text-muted mb-0">Maliban sa Educational Loan ang kooperatiba ay naghahandog din ng munting pautang para sa mga myembro na gustong magsimula ng maliit na negosyo katulad ng tindahan.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>   </div>
                    </div>






                            <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">

                        <button type="button"  data-toggle="modal" data-target="#myModal5"><i class="bi-patch-question-fill fs-1 text-primary"></i></button>
                        <h3 class="h4 mb-2">Rice, Agriculture Machinery and Motor Loan</h3>
                        <p>Narito ang ilan sa mga handog ng kooperatiba para sa Rice Agriculture Machinery and Motor Loan</p>


                            <!-- Scrollable modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal5" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <h3 class="h4 mb-2">Rice, Agriculture Machinery and Motor Loan</h3>



                                </div>
                                <div class="modal-body">
                                     <img src="userpage/services/serv3.jpg" class="d-block" alt="...">
                                     <p class="text-muted mb-0">Hatid din ng kooperatiba ang ibat ibang tulong sa bigas, gamit sa pagsasaka at kahit ang pagpupundar ng motor at makinarya. Ito ay tulong para sa mga regular na myembro ng kooperatiba.</p>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>  
                            </div>  


                            </div>
                    </div>
                         
             
         
        </section>
</center>

    <!-- CONTACT-->
       
        <!-- About-->
        <section class="page-section bg-primary" id="about">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>


  </div>

  <div class="carousel-inner">
 
    <div class="carousel-item">
      <img src="userpage/about/2.jpg" class="d-block" alt="...">
    
    </div>
    <div class="carousel-item active">
      <img src="userpage/about/5.jpg" class="d-block" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="userpage/about/1.jpg" class="d-block" alt="...">
    
    </div>
    <div class="carousel-item">
      <img src="userpage/about/3.jpg" class="d-block" alt="...">
      
    </div>
   
    <div class="carousel-item">
      <img src="userpage/about/about.jpg" class="d-block" alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </section>
  
        <!-- registratiom-->
        <section class="page-section" id="membership">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Asking For ?</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                          
                                <div class="mb-2">
                                <i class="bi bi-card-list fs-1 text-primary"></i>
                                </div></a>

                                <button type="button"  data-toggle="modal" data-target="#requirements">  <h3 class="h4 mb-2">Requirements</h3></button>
                                <p>Tingnan ang mga dokumento at proseso na kinakailangan upang maging myembro ng kooperatiba</p>
                            <div class="modal fade" id="requirements" role="dialog">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                <div class="modal-header">
                                  
                                </div>
                                <div class="modal-body">

    
	<link rel="stylesheet" type="text/css" href="userpage/requirements.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  
<body>
	<div class="service">
		<div class="title">
			<h3>Hakbang at mga kinakailangan upang maging miyembro ng kooperatiba</h3>
		</div>
<label style="color:white;">DOWNLOAD APPLICATION FORM HERE</label>&nbsp;<button><a href="download/application_form.docx">DOCUMENT</a></button>
<br><label style="color:white;">DOWNLOAD CHECKLIST OF REQUIREMENTS HERE</label>&nbsp;<button><a href="download/requirements.docx">DOCUMENT</a></button></a>

<div class="box">
			<div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
			<h5>APLIKASYON SA PAGSAPI</h5>
				<div class="pra">
					<p>Ito ay maaari nilang sagutan sa pinabagong paraan ng pagsali sa kooperatiba. Pumunta lamang sa userpage-membership-ask for registration.</p>
					<p style="text-align: center;">
			
					</p>
				</div></div>
				
				<div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h5>ATTENDANCE TO PRE-MEMBERSHIP APPLICATION</h5>
				<div class="pra">
                    <p>(PMES-NO PROXY) ibibgay ng kooperatiba pagkatapos aprubahan ang aplikasyon sa pagsapi</p>
					<p style="text-align: center;">
			
					</p>
				</div>
			</div>
				<div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h5>PERSONAL INTERVIEW AT THE OFFICE</h5>
				<div class="pra">
					<p>Ito ay isinasagawa pagkatapos ng seminar na ibibigay ng kooperatiba sa mga bagong mimyembro nito.</p>

					<p style="text-align: center;">
			
					</p>
				</div>
			</div>
</div>

          

			<div class="box">
				<div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h5>MGA KARAGDAGANG REQUIREMENTS</h5>
				<div class="pra">
					<p>
                        <ul>
                            <li>Barangay Clearance</li>
                            <li>Residence Certificate Number</li>
                            <li>Marriage Contract</li>
                            <li>Tax Payer's Identification Number (TIN)</li>
                        </ul>
                    </p>
					<p style="text-align: center;">
			
					</p>
				</div>
			</div> 
            
			<div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>

				<h5>KASUNDUAN SA PAGSAPI</h5>
				<div class="pra">
					<p>Kasunduan na pipirmahan ng isang myembro bilang pangako na sya ay magiimpok at pangakong pinapatotohanan ang sagot sa aplikasyon sa pagsapi sa kooperatiba.</p>
					<p style="text-align: center;">
			
					</p>
				</div>
				</div>

         
            <div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h5>MAGDALA NG PICTURE NA SUMUSUNOD</h5>
				<div class="pra">
					<p>
                        <ul>
                            <li>One(1) 2x2 colored ID photo(recent shot)</li>
                            <li>Two(2) 1x1 colored ID photo(recent shot)</li>
                          
                        </ul>
                    </p>
					<p style="text-align: center;">
			
					</p>
				</div>
				</div>
			</div>
			<div class="box">
    <div class="card">
            <span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h5>ASAHANG BAYARIN SA PAGSAPI</h5>
				<div class="pra">
					<p>Membership Contribution (4,000php)</p>
                    <p>Membership Fee (250php)</p>
					<p style="text-align: center;">
			
					</p>
				</div>
			</div>
	</div>


	

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                
                           


                          
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
  

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                           <a href="userpage/register.php"><div class="mb-2"><i class="bi-person-plus-fill fs-1 text-primary"></i></div></a>
                            <h3 class="h4 mb-2">Ask for Registration</h3>
                            <p class="text-muted mb-0">Ask for Registration? <br>Kung ibig ninyong magparehistro ay pindutin lamang ito.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="userpage/pendingpublic.php"><div class="mb-2"><i class="bi-table fs-1 text-primary"></i></div></a>
                            <h3 class="h4 mb-2">List of Seminar Attendee</h3>
                            <p class="text-muted mb-0">Tingnan ang mga listahan ng mga aplikanteng naka schedule para sa seminar<br>(Ang mga mahahalagang impormasyon ng bawat persona ay di maaring makita.)</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><a href="#contact"><i class="bi-patch-question-fill fs-1 text-primary"></i></a></div>
                            <h3 class="h4 mb-2">Inqueries?</h3>
                            <p class="text-muted mb-0">Kung mayroon kayong ibig na itanong ibigay lamang ang inyong mga impormasyon upang kami ay maka-ugnay saiyo.</p>
                        </div>
                    </div>
            <!---       <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="loan.php"><div class="mb-2"><i class="bi bi-files fs-1 text-primary"></i></div></a>
                            <h3 class="h4 mb-2">View Reports of the Cooperative</h3>
                            <p class="text-muted mb-0">Para sa mga miyembro lamang"<br>Narito ang listahan ng mga myembro ng kooperatiba at </p>
                            
                        </div>
                    </div>--->
                   <!------ <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="passbook.php"><div class="mb-2"><i class="bi bi-book-half fs-1 text-primary"></i></div></a>
                            <h3 class="h4 mb-2">View the Passbook of the Members</h3>
                            <p class="text-muted mb-0"> Para sa mga ipon/savings at kapital ng mga myembro ng kooperatiba</p>
                            
                        </div>
                    </div>----->
                   
                </div>
            </div>
        </section>

        <section class="page-section bg-primary" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">MAKIPAG-UGNAYAN</h2>
                        <hr class="divider" />
                        <p class="text-white mb-5">Ibigay lamang ang mga impormasyong nasa ibaba upang matawagan namin kayo sa inyong mga gustong alamin sa aming kooperatiba.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
              
                        <form id="contactForm"  autocomplete="off"
                        data-sb-form-api-token="API_TOKEN" 
                        action="index.php" 
                        method="POST">

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="name" 
                                type="text" 
                                placeholder="Enter your name..." 
                                data-sb-validations="required"
                                value="<?php echo !empty($fname)?$fname:'';?>" name="fname"/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="email" 
                                type="email" 
                                placeholder="name@example.com" 
                                data-sb-validations="required,email" 
                                value="<?php echo !empty($email)?$email:'';?>" name="email"/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" 
                                data-sb-feedback="email:email">Email is not valid.</div>
                            </div>


                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="phone"
                                type="number" 
                                placeholder="(123) 456-7890" 
                                data-sb-validations="required" 
                                value="<?php echo !empty($phone)?$phone:'';?>" name="phone"/>
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>



                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" 
                                id="message" type="text" 
                                placeholder="Enter your message here..." 
                                style="height: 10rem" 
                                data-sb-validations="required" 
                                value="<?php echo !empty($message)?$message:'';?>" name="message"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="message:required">A message is required.</div>
                            </div>


                            <div class="d-grid">
                                <button class="btn btn-success btn-xl" 
                                id="submitButton" 
                                type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>



                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>0915 763 6586</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/portfolio1.jpg" title="2019 Annual General Assembly">
                            <img class="img-fluid" src="userpage/portfolio1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Images</div>
                                <div class="project-name">Mga Miyembro ng Kooperatiba</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/portfolio2.jpg" title="2017 PMPC Member">
                            <img class="img-fluid" src="userpage/portfolio2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Images</div>
                                <div class="project-name">Mga Miyembro ng Kooperatiba</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/portfolio3.jpg" title="2018 PMPC Member">
                            <img class="img-fluid" src="userpage/portfolio3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Images</div>
                                <div class="project-name">Mga Miyembro ng Kooperatiba</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/staff.jpg" title="PMPC Staffs">
                            <img class="img-fluid" src="userpage/staff.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Image</div>
                                <div class="project-name">Mga Miyembro ng Kooperatiba</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/logo.jpg" title="PMPC logo">
                            <img class="img-fluid" src="userpage/logo.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Image</div>
                                <div class="project-name">Mga Miyembro ng kooperatiba.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="userpage/location.jpg" title="Location of the PMPC via google map">
                            <img class="img-fluid" src="userpage/location.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Location</div>
                                <div class="project-name">Lokasyon ng nasabing lugar.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader">
       </div>
      
        </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
      
        <!-- Core theme JS-->
        <script src="userpage/js/scripts.js"></script>
      
         
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}  </script>


    </body>
</html>
