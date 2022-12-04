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
        $sql = "SELECT * FROM members where id = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />

    <title>ADMIN | READ REGISTER</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css-read/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css-read/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

            <style>
            
                #booking {
                   font-family: 'Montserrat', sans-serif;
                   background-image: url('img/bg.jpg');
                   background-size: cover;
                   height: 150vh;
                   background-position: center;
                          }
            </style>

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>VIEWING INFORMATION</h1>
                        </div>
                            <a href="memberstable.php"><button>BACK</button></a>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Buong pangalan</span>
                                        <input id="pc" class="form-control" 
                                        type="text" 
                                        name="pangalan" 
                                        placeholder="<?php echo $data['pangalan']; ?>" 
                                        value="<?php echo !empty($pangalan)?$pangalan:'';?>" readonly="readonly"/>
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                         <span class="form-label">Edad</span>
                                        <input  id="pc"
                                         class="form-control" 
                                         type="text" 
                                         name="edad"
                                        placeholder="<?php echo $data['edad']; ?>" 
                                        value="<?php echo !empty($edad)?$edad:'';?>" 
                                        readonly="readonly"/>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Barangay na aking tinitirahan</span>
                                        <input  id="pc" 
                                        class="form-control" 
                                        type="text" 
                                        name="barangay" 
                                        placeholder="<?php echo $data['barangay']; ?>" 
                                        value="<?php echo !empty($barangay)?$barangay:'';?>" 
                                        readonly="readonly"/>
                                    </div>
                        </div>

                               <div class="col-sm-6">
                                    <div class="form-group">
                                         <span class="form-label">Bayan</span>
                                        <input  id="pc" 
                                        class="form-control" 
                                        type="text" 
                                        name="bayan" 
                                        placeholder="<?php echo $data['bayan']; ?>" 
                                        value="<?php echo !empty($bayan)?$bayan:'';?>" 
                                        readonly="readonly"/>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <div class="form-group">
                                <span class="form-label">Ilang taon ka na sa kasalukuyang tirahan?</span>
                                <input class="form-control" 
                                type="number" 
                                name="taon" 
                                placeholder="<?php echo $data['taon']; ?>" 
                                value="<?php echo !empty($taon)?$taon:'';?>" 
                                readonly="readonly"/>
                            </div>
                        </div>

                            <div class="form-group">
                           <div class="rs-select2 js-select-simple select--no-search">
                                <span class="form-label">Sariling tahanan mo ba ito?</span>
                                <input  id="pc" 
                                class="form-control" 
                                name="sarili" 
                                placeholder="<?php echo $data['sarili']; ?>" 
                                value="<?php echo !empty($sarili)?$sarili:'';?>" 
                                readonly="readonly"/>
                               
                                </div>
                                </div>
                            
                        

                            <div class="form-group">
                             <div class="rs-select2 js-select-simple select--no-search">
                                <span class="form-label">Kung hindi sayo ang tirahan: Ikaw ba ay Umuupa o Naninirahan?</span>
                                <input  id="pc" 
                                class="form-control" 
                                name="umuupa" 
                                placeholder="<?php echo $data['umuupa']; ?>" 
                                value="<?php echo !empty($umuupa)?$umuupa:'';?>" 
                                readonly="readonly"/>
                               
                            </div>

                            <div class="form-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <span class="form-label">Sarili mo ba ang lupang tinatayuan?</span>
                                <input  id="pc" 
                                class="form-control" 
                                name="sarili" 
                                placeholder="<?php echo $data['sarili']; ?>" 
                                value="<?php echo !empty($sarili)?$sarili:'';?>" 
                                readonly="readonly"/>
                               
                            </div>
                            <br>
                            <div class="row">
                             <div class="col-sm-6">
                            <div class="form-group">
                            <span class="form-label">Ano ang iyong hanapbuhay?</span>
                                        <input id="pc" 
                                       class ="form-control" 
                                        type="text" 
                                        name="hanapbuhay" 
                                        placeholder="<?php echo $data['hanapbuhay']; ?>" 
                                        value="<?php echo !empty($hanapbuhay)?$hanapbuhay:'';?>" readonly="readonly"/>
                                    </div>
                                    </div>

                                    <div class="col-sm-6">
                             <div class="form-group">
                                <span class="form-label">Magkano ang regular na kita mo sa isang taon?</span>
                                <input class="form-control" 
                                type="number" 
                                name="kita" 
                                placeholder="<?php echo $data['kita']; ?>" 
                                value="<?php echo !empty($kita)?$kita:'';?>" 
                                readonly="readonly"/>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                             <div class="col-sm-6">
                             <div class="form-group">
                                <span class="form-label">Kung ikaw ay magsasaka, ilang ektarya ang saka mo?</span>
                                <input class="form-control" 
                                type="text" 
                                name="ektarya" 
                                placeholder="<?php echo $data['ektarya']; ?>" 
                                value="<?php echo !empty($ektarya)?$ektarya:'';?>" 
                                readonly="readonly"/>
                            </div>
                        </div>
                            
                           
                             <div class="col-sm-6">
                             <div class="rs-select2 js-select-simple select--no-search">
                                <span class="form-label">Ano-ano ang iyong mga tanim?</span>
                                <input  id="pc" 
                                class="form-control" 
                                name="tanim" 
                                placeholder="<?php echo $data['tanim']; ?>" 
                                value="<?php echo !empty($tanim)?$tanim:'';?>" 
                                readonly="readonly"/>
                        </div>
                            </div>
                        </div>

                            <div class="rs-select2 js-select-simple select--no-search">
                                <span class="form-label">May alaga ka bang hayop?</span>
                                <input  id="pc" 
                                class="form-control" 
                                name="hayop" 
                                placeholder="<?php echo $data['hayop']; ?>" 
                                value="<?php echo !empty($hayop)?$hayop:'';?>" readonly="readonly"/>
                                </div>


                            <div class="form-group">
                                <span class="form-label">Ilan ang mga ito?</span>
                                <input class="form-control" 
                                type="number" 
                                name="ilan" 
                                placeholder="<?php echo $data['ilan']; ?>" 
                                value="<?php echo !empty($ilan)?$ilan:'';?>" 
                                readonly="readonly"/>
                            </div>

                            
                            <div class="row">
                             <div class="col-sm-6">
                            <div class="form-group">
                                <span class="form-label">Status</span>
                                <input class="form-control" 
                                type="number" 
                                name="status" 
                                placeholder="<?php echo $data['status']; ?>" 
                                value="<?php echo !empty($status)?$status:'';?>" 
                                readonly="readonly"/>
                            </div>   </div>

                           
                             <div class="col-sm-6">
                            <div class="form-group">
                                <span class="form-label">Members' type</span>
                                <input class="form-control" 
                                type="number" 
                                name="type" 
                                placeholder="<?php echo $data['type']; ?>" 
                                value="<?php echo !empty($type)?$type:'';?>" 
                                readonly="readonly"/>
                                </div>
                            </div>
                        </div>

						<div class="form-group">
                            <span class="form-label">Date Join</span>
                                    <input class="form-control" 
									type="text" 
									name="date_join" 
                                    placeholder="<?php echo $data['date_join']; ?>" 
									value="<?php echo !empty($date_join)?$date_join:'';?>">
						</div>

                                 
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>