<!--DETAILS OF THE EVENTS--->

<?php
include_once '../memberslist/notifdb.php';
?>
<?php
if(isset($_GET['id']))
{
    $main_id = $_GET['id'];
    $sql_update =mysqli_query($con, "SELECT * FROM notification WHERE id='$main_id'");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../adminpage/css/style.css">
    <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
	<title>USER | VIEW DETAILS</title>
    
</head>
<style>
        
        body{
    box-sizing: border-box;
    background-color: orange;
    float: center;
    font-family: "Poppins", Arial, sans-serif;
   }

   .all-columns {

  width: 50%;
  padding: 13px;
  min-height: 500px;
  border: 1px solid;
  text-align: center;
  background-color:white;
  position:absolute;
 
  margin-left:-100px;
  margin-right:auto;
}
.center {

  height:50%;
  padding: 10px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 8%;
  width: 40%;

}
.sectiontext {
  margin-top:-10px;
  font-size:18px;
}
h3{
    text-align:left;
   margin-top:25px;
    font-size:18px;
}
.e{
    margin-top:5px;
  font-size:20px;
}
.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
  .btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130; }
 
</style>
<body>
    
<div class="center">
<div class="all-columns">
<img src="../hj.png" width="150px" height="100px">
            
            

  <h2 class="sectiontext">Pakul Primary Multi-Purpose Cooperative<br> Pakul Jaen Nueva Ecija
</h2><br>
<h4 class="e"><b>READ MESSAGE</b>
</h4>
<?php

$sql_get = mysqli_query($con,"SELECT * FROM notification WHERE id=$main_id");
while($main_result = mysqli_fetch_assoc($sql_get)) :
?>



<br>
<h3><b>Name: </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $main_result ['name']; ?> </td>
<h3><b>Date: </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $main_result['cr_date']; ?></h3>
<h3><b>Message: </b><br><br> &nbsp; &nbsp; <?php echo $main_result ['message']; ?></h3>
<br><br><br><br>
<button onclick="history.back()" class="btn btn-danger float-end">Back</button>
<?php endwhile ?>
</div></div>
</div>
</div>

</html>