<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/pakul.jpg" />
    <title>USER | LIST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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
		<div class="container">
           
			<h3 align="center">PAKUL PRIMARY MULTI-PURPOSE COOPERATIVE<br><b>SEMINAR ATTENDEE LIST</b> </h3>
            <button onclick="history.back()">Back</button>
        <br>
			<div class="panel panel-default">
				<div class="panel-heading"><b>Members Data</b></div>
				<div class="panel-body">
					<div class="table-responsive">
                    <div class="form-group">
  
    <hr>
    <?php
    include 'database_connection.php';
    $stmt=$conn->prepare("SELECT * FROM seminar");
    $stmt->execute();
    $result=$stmt->get_result();
    ?>


   </div>
						<table class="table table-bordered table-striped" id="example" >
							<thead>
								<tr>
									<th>Tin ID</th>
									<th>Pangalan</th>
									<th>Edad</th>
									<th>Barangay</th>
                                    <th>Bayan</th>
									<th>Seminar Date</th>
									<th>Members' Type</th>
									<th>Date Join</th>
									<th>Status</th>
								</tr>
							
        </thead>
        <tbody>             <?php 
                                while ($row=$result->fetch_assoc()) {
                               
                                ?>
                                <tr>
                                    <td> <?=$row['tin']; ?></td>
                                    <td> <?=$row['pangalan']; ?></td>
                                    <td> <?=$row['edad']; ?></td>
                                    <td> <?=$row['barangay']; ?></td>
                                    <td> <?=$row['bayan']; ?></td>
                                    <td> <?=$row['seminardate']; ?></td>
                                    <td> <?=$row['type']; ?></td>
                                    <td> <?=$row['date_join']; ?></td>
                                    <td> <?=$row['status']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>

						</table>
					</div>
				</div>
			</div>
		</div>



  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>  

<script src="js/tables.js"></script>
</body>
</html>