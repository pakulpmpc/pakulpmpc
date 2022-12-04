
<html>
	<head>
		<title>USER | PASSBOOK</title>
        <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
	</head>

    <style>
                body{
                    background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("../memberslist/img/bg.jpg");

        }
        .container{
            background-color:#D2D2D2;
        }
        .panel-heading{
            font-size:18px;
        }
    </style>
	<body>
    <br>

    <br>
    <br>
    <br>

		<div class="container">
            <br>
			<h3 align="center">Pakul Primary Multi Purpose Cooperative<br><b>Passbook</b></h3>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Members' Passbook</div>
				<div class="panel-body">
					<div class="table-responsive">
                    <div class="form-group">
    <div class="form-inline">
     <label for="search" class="font-weight-bold lead text-dark">Search&nbsp; </label>
     <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="Search Here">
    </div>
    <hr>
    <?php
    include 'database_connection.php';
    $stmt=$conn->prepare("SELECT * FROM passbook");
    $stmt->execute();
    $result=$stmt->get_result();
    ?>


   </div>
   <br />
   
						<table class="table table-bordered table-striped" id="members_data" >
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subscribed Capital</th>
                                    <th>Capital Build-up</th>
                                    <th>Savings Fund</th>
                                </tr>
                                </thead>
                            <tbody>
                                <?php 
                                while ($row=$result->fetch_assoc()) {
                               
                                ?>
                                <tr>
                                    <td><?=$row['id']; ?></td>
                                    <td><?=$row['Name']; ?></td>
                                    <td><?=$row['Subscribed_Capital']; ?></td>
                                    <td><?=$row['Capital_Build-up']; ?></td>
                                    <td><?=$row['Saving_Fund']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
            $(document).ready(function(){
                $("#search_text").keyup(function(){
                    var search = $(this).val();
                    $.ajax({
                        url:'passbookaction.php',
                        method:'post',
                        data:{query:search},
                        success:function(response){
                            $("#members_data").html(response);
                        }
                    });
                });
            });

        </script>
	</body>
</html>
