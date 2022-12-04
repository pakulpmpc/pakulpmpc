<?php
require 'database.php';

$id = 0;
if (!empty($_GET['id'])) {
$id = $_REQUEST['id'];
}

if ( !empty($_POST)) {
$id = $_POST['id'];

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM `queries` WHERE id=?";
$query = $pdo->prepare($sql);
$query->execute(array($id));
Database::disconnect();
header("Location: ../contacttable.php");

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Read</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
    	#lol
    	{
    		font-family: Fantasy;
    		font-size: 30px;
    	}
    	#y
    	{
    		background-color: darkred;
    	}
    </style>
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                	 <a href="../contacttable.php"><button class="btn btn--radius-2 ">Back to the table</button></a>
                    <h2 class="title">Deleting this Inqueries?</h2>
                </div>

                <div class="card-body">

                    <form method="POST" action="delete.php">
                        <div class="form-row">
                        	<input type="hidden" name="id" value="<?php echo $id;?>"/>
                            <div id="lol"><center>Are you sure do you want to delete this Inquries?</center></div>
                            
                        </div>
                       <div class="card-footer">
                   <button class="btn btn--radius-2 btn--blue-2" id="y" type="submit">Delete</button>

                </div>
                    </form>
                </div>
                

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->