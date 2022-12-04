<?php
include 'database.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />

    <title>ADMIN | MANAGE QUERIES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../adminpage/css/style.css">
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
          <h1><a href="../adminpage/admin.php" class="logo">ADMIN <span>Welcome Admin</span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="../adminpage/admin.php"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
          

            <li>
              <a href="../logout.php"><span class="fa fa-sign-out mr-3"></span> Log-out</a>
            </li>
          </ul>

          

        </div>

      </nav>

       
        <!-- Page Content  -->
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
         

<div class="container">

      
             
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6"><h2>Manage <b>Inquries</b></h2></div>
                        
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>

<?php
$pdo = Database::connect();
$sql = 'SELECT * FROM `queries` WHERE 1';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['id'] . '</td>';  
echo '<td>' . $row['fname'] . '</td>'; 
echo '<td>' . $row['email'] . '</td>'; 
echo '<td>' . $row['phone'] . '</td>';   
echo '<td>'.'<a href="contact/read.php?id='.$row['id'].'"><span class="fa fa-eye mr-2"></span></a>'.'
<a href="contact/delete.php?id='.$row['id'].'"><span class="fa fa-trash mr-2"></span></a>'.'</td>';  
echo '</td>';
echo '</tr>'; 
}
Database::disconnect(); 
?>
</tbody>
</table>
</div>
</div>
</div>




    <script src="../adminpage/js/jquery.min.js"></script>
    <script src="../adminpage/js/popper.js"></script>
    <script src="../adminpage/adminpage/js/bootstrap.min.js"></script>
    <script src="../adminpage/js/main.js"></script>
  </body>
</html>