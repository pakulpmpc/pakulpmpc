<?php
include_once('conn.php');
?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />

  	<title>ADMIN | ADMIN PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../adminpage/css/style.css">
		<style type="text/css">
			#loc
			{
				width: 100%;
				height: 50%;
			}
		</style>
			<style>
     body {
        color: #546480;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
        overflow-x: hidden;
        height: 100%;
        width: 100%;

    }
    .table-responsive {
        margin: 20px 0;
        margin-left: -1%;
    }
    .table-wrapper {
        min-width: 860px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 2px 2px rgba(0,0,0,.10);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
  
    table.table tr th, table.table tr td {
        border-color: grey;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background:  #ffbf80;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: black;
        display: inline-block;
        margin: 0 5px;
    }  
 
    #hj
    {
        background-color:  #fff2e6;

    } 
    #qw
    {
        background-color: #ffc266;
    }

    </style>
  </head>

  <body>
 
		<div id="hj">
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" >
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="admin.php" class="logo">ADMIN <span>Welcome    
           </span></a></h1>

          
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="admin.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
           
	          <li>
	              <a href="../userpage/register.php"><span class="fa fa-user-plus mr-3"></span>Add Members</a>
	          </li>
	          <li>
              <a href="../memberslist/registrationtable/registertable.php"><span class="fa fa-table mr-3"></span>Members List</a>
	          </li>
	        
            <li>
              <a href="../memberslist/notification.php"><span class="fa fa-bullhorn mr-3"></span>Make an Announcement</a>
	          </li>

            <li>
              <a href="../memberslist/sendevents.php"><span class="fa fa-calendar mr-3"></span>Post Events</a>
	          </li>

            <li>
              <a href="../memberslist/user/usertable.php"><span class="fa fa-user mr-3"></span>User Management</a>
	          </li>
            <li class="active">
              <a href="../memberslist/charts/registercharts.php"><span class="fa fa-bar-chart mr-3"></span> View Reports Here</a>
            </li>
	          <li>
              <a href="../memberslist/contacttable.php"><span class="fa fa-question-circle mr-3"></span>Manage Queries</a>
	          </li>
            <li>
              <a href="../logout-admin.php"><span class="fa fa-sign-out mr-3"></span>Log-out</a>
	          </li>
	        </ul>

	        

	      </div>

    	</nav>

       
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Pakul Multi-Purpose Cooperative</h2>
        <h3 class="mb-4">Management System</h3>
        <p><span class="fa fa-info-circle mr-3"></span> Multi-Purpose Cooperative</p>
        <p><span class="fa fa-envelope mr-3"></span><a href = "mailto: abc@example.com"> pakul.pmpc@gmail.com</a></p>
        <p><span class="fa fa-clock-o mr-3"></span> 8:00 AM - 5:00 PM</p>
         <p><span class="fa fa-folder mr-3"></span><a href="https://www.facebook.com/search/?bqf=str%2FAgricultural%2BCooperative%2Fkeywords_pages&ref=page_about_category&f=AbqF55_V_4eJWV-0_wByWmC2VTi06Q30Q7yrld4XpDYC8NIloCJa7wmkMY3qRcKYEt9sMDQrA_GhijM88Nh5FQyJFOXH96nopnpLUkMN5_hFEJW7PIh1eqCQ_4Z8J2pdmN5XWgN9w9i-KRBjUDt-ngb_"> Agricultural Cooperative </a>·<a href="https://www.facebook.com/search/?bqf=str%2FFarm%2Fkeywords_pages&ref=page_about_category&f=AbrOiugSBwGoRA7rSg3nKh-jtQogtK6P1wvhrYP2hldCbAdfErba-eDxFQTcISejh10M-zDxdNT5CLpvjxd7jGHrvU3VXFwdgY_58YhieZbqii6tWeVxqt1nvZHlN0KB52U">Farm</a></p>
         <p><span class="fa fa-facebook-square mr-3"></span><a href="https://www.facebook.com/profile.php?id=100017566899744"> Pakul Primary Multi-Purpose Cooperative</a></p>
         <p><span class="fa fa-map-marker mr-3"></span> Pakul, Jaen, Nueva Ecija</p>
<br><br><br><br>
         <h4 class="mb-4">GOOGLE MAP: LOCATION "Pakul, Jaen, Nueva Ecija"</h4>
        <p ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.9102201992487!2d120.8636212141614!3d15.381347861591035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396df34eaaaaaab%3A0x62da3a90ad98a815!2sPakul%20Primary%20Multipurpose%20Cooperative!5e0!3m2!1sen!2sph!4v1652598969939!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

        <br><br><br><br>
         <h4 class="mb-4">LOGO of Pakul Primary Multi-Purpose	Cooperative"</h4>
        <p ><img id="loc"src="../homeimages/logo.jpg"></p>
      </div>
		</div>
		</div>

    <script src="../adminpage/js/jquery.min.js"></script>
    <script src="../adminpage/js/popper.js"></script>
    <script src="../adminpage/adminpage/js/bootstrap.min.js"></script>
    <script src="../adminpage/js/main.js"></script>
  </body>
</html>