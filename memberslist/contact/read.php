<?php
require 'database.php';
$id = null;
if (!empty($_GET['id'])) 
{
    $id = $_REQUEST['id'];
}
if (null == $id) {
header("Location: ../adminpage/admin.php");
} 
else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `queries` where id = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Reading Inquries</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="fname" placeholder="<?php echo $data['fname']; ?>" readonly="readonly"/> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="<?php echo $data['email']; ?>" readonly="readonly"/>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                           <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="phone" placeholder="<?php echo $data['phone']; ?>" readonly="readonly"/>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="<?php echo $data['message']; ?>"readonly="readonly"/></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="../contacttable.php"><button class="btn btn--radius-2 btn--blue-2">Back to the table</button></a>
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