<?php
include '../database.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="../../userpage/assets/pakul.jpg" />

    <title>ADMIN | REGISTRATION TABLE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
  
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

   <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../../adminpage/css/style.css">
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
      <nav id="sidebar" class="order-last" class="img" style="background-image: url(images/bg_1.jpg);">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div>

        <div class="">
          <h1><a href="../adminpage/admin.php" class="logo">ADMIN <span>Welcome Admin</span></a></h1>
          <ul class="list-unstyled components mb-5">
          <li class="active">
              <a href="../../adminpage/admin.php"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
          
            <li class="active">
              <a href="../registrationtable/registertable.php"><span class="fas fa-user-plus mr-3"></span> Registration table</a>
            </li>
          
            <li class="active">
              <a href="../seminarlist/seminartable.php"><span class="fas fa-user-edit mr-3"></span> Seminar Table</a>
            </li>

            <li class="active">
              <a href="../memberstable/member.php"><span class="fas fa-user-check mr-3"></span> Official Member Table</a>
            </li>
          
            <li class="active">
              <a href="../charts/registercharts.php"><span class="fas fa-bar-chart mr-3"></span> View Reports Here</a>
            </li>

            <li class="active">
              <a href="../trash/trashtable.php"><span class="fas fa-trash mr-3"></span> Trash</a>
            </li>

            <li>
              <a href="../../logout-admin.php"><span class="fas fa-sign-out-alt mr-3"></span> Log-out</a>
            </li>
          </ul>

          

        </div>

      </nav>

      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Pakul Multi-Purpose Coorperative</h2>
        <h3 class="mb-4">Management System</h3>
        <p><span class="fa fa-info-circle mr-3"></span> Multi-Purpose Cooperative</p>
        <p><span class="fa fa-envelope mr-3"></span> pakul.pmpc@gmail.com</p>
        <p><span class="fa fa-clock-o mr-3"></span> 8:00 AM - 5:00 PM</p>
         <p><span class="fa fa-folder mr-3"></span><a href="https://www.facebook.com/search/?bqf=str%2FAgricultural%2BCooperative%2Fkeywords_pages&ref=page_about_category&f=AbpxaZHLVQP7A2U26Xyn06xVdSEfTnubwgpamUn1y6reaGmDWiqLfxPIwzSDtkHwnmUQr7puNFr9sNHi2sShzHmh1I9nOgazkvnO3lEmpE0deP4sYtKGoNJR8DFLYN92VLxXBYpGCozvpSh7AxkPnkpZ"> Agricultural Cooperative </a>·<a href="https://www.facebook.com/search/?bqf=str%2FFarm%2Fkeywords_pages&ref=page_about_category&f=AbqZBcvgt5_Uz3sG7B1blgqtKq3FkuQiizoGWOXBx9QrFQRFSqchj8LsSTzFFmzjF0tevn97kaDROm5R-z5Vf1F5S4h50e-Xs4FdE7enBDSwBqRrIyKGdF6RyW9pv4kRU_g">Farm</a></p>
         <p><span class="fa fa-facebook-square mr-3"></span> Pakul Primary Multi-Purpose Cooperative</p>
         <p><span class="fa fa-map-marker mr-3"></span> Pakul, Jaen, Nueva Ecija</p>
<br><br><br><br>


 <!--registration-->
   
<div class="container">

                        
                        <h3 align="center"><h2>Pending membership <b> application</b></h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><b>Pre-register Data</b></div>
				<div class="panel-body">
					<div class="table-responsive">
                    <div class="form-group">

                <table class="table table-striped table-hover table-bordered" id="example">
                    <thead>
                    <tr>
                            <th>TIN ID</th>
                            <th>Pangalan</th>
                            <th>Edad</th>
                            <th>Contact</th>
                            <th>Barangay</th>
                            <th>Members' Type</th>
                            <th>Date Join</th>
                            <th>Status</th>
                            <th>Seminar Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

<?php
$pdo = Database::connect();
$sql = 'SELECT * FROM `register` WHERE 1';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['tin'] . '</td>';  
echo '<td>' . $row['firstname']  ." ". $row['middlename']  ." ".  $row['lastname'] .'</td>'; 
echo '<td>' . $row['edad'] . '</td>'; 
echo '<td>' . $row['contact'] . '</td>';  
echo '<td>' . $row['barangay'] . '</td>';
echo '<td>' . $row['type'] . '</td>';        
echo '<td>' . $row['date_join'] . '</td>';    
echo '<td>' . $row['status'] . '</td>';
echo '<td>' . $row['seminardate'] . '</td>';
echo '<td>'.'
<a title="Edit" href="editregistration.php?id='.$row['id'].'">
<span class="fa fa-edit"></span></a>'.'
<a title="Approve" href="editapprove.php?id='.$row['id'].' ">
<span class="fa fa-thumbs-up"></span></a>'.'
           
            <a title="Disapprove" href="editdecline.php?id='.$row['id'].'">
<span class="fa fa-thumbs-down " aria-hidden="true"></span></a>'.'</td>';  
echo '</td>';
echo '</tr>'; 
}
Database::disconnect(); 
?>
</tbody>
</table>

<!--Seminar-->

         

</div>
</div>
</div>



<script src="../../adminpage/js/jquery.min.js"></script>
    <script src="../../adminpage/js/popper.js"></script>
    <script src="../../adminpage/adminpage/js/bootstrap.min.js"></script>
    <script src="../../adminpage/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
          <script src=" https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
          <script src=" https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
          <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
          <script src=" https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
          <script src=" https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="../js/tables.js"></script>
	
  </body>

</html>