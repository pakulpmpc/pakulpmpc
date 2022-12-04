<?php

require 'notifdb.php';

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $date = date('y-m-d h:i:s');

    $sql_insert = mysqli_query($con, "INSERT INTO notification(name,message,cr_date) 
    VALUES('$name', '$msg', '$date')");

     if($sql_insert){
        echo"<script>alert('message sent successfully');</script>";
    }
    else{
        echo mysqli_error($con);
        exit;
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN | SEND MESSAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

   <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../userpage/user.css" rel="stylesheet" />
        <!-- font awesome-->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head></head>
    <style>
#center{
  position:absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  

}
body{

  box-sizing: border-box;

}
btn{

}
        </style>
  <body class="bg-primary">
  
  <div class="container" id="center">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <br>
            <br>
            <button onclick="history.back()">Back</button>
                 <form method="post" autocomplete="off">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Type Name Here">
          
        </div>
        <br>

                <div class="form-group">
                <label for="exampleFormControlTextArea">Send Announcement</label>
        <textarea class="form-control" name="msg" placeholder="Leave an announcement here" rows="5" style="height: 150px"></textarea>
      
        </div>
          
        &nbsp;&nbsp;&nbsp;<center><button type="submit" name="send" class="btn btn-success">Submit</button></div></center>
        </form>
</div>
        <div class="col-sm-4"></div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>