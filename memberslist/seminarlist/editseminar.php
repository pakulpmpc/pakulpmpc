<?php
                            include 'updatesdb.php';
							if(count($_POST)>0){
								mysqli_query($con, "UPDATE seminar
								SET 
								tin='". $_POST['tin']. "',

								attended='". $_POST['attended']. "', 
								interview='". $_POST['interview']. "', 
								pay='". $_POST['pay']. "', 
								requirements='". $_POST['requirements']. "', 
								INCreq='". $_POST['INCreq']. "', 	
								howmuch='". $_POST['howmuch']. "',
								type='". $_POST['type']. "',
								status='" .$_POST['status'] ."',
								reasondisapproval='". $_POST['reasondisapproval']. "'

								WHERE id='" . $_GET['id']. "'");
								
									header("location:seminartable.php");
								
							}


							
                            $result = mysqli_query($con, "SELECT * FROM seminar WHERE id='" . $_GET['id']. "'");
 
                            $row = mysqli_fetch_array($result);

						
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
								<link rel="icon" type="image/x-icon" href="../../userpage/assets/pakul.jpg" />
								<title>ADMIN | EDIT SEMINAR</title>
							
									<!-- Icons font CSS-->
									<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
									<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
								</head>
							
							   
							
							<body><div class="container mt-5">
							
							  
							<h1></h1>
							<button onclick="history.back()">Back</button>

							<form method="POST"  enctype="multipart/form-data" autocomplete="off"> 
						
								<h2><b>Step 1: BIO DATA</b></h2>
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="tin">Tax Payer's Identification Number (TIN)</label>
								<input type="text" class="form-control" id="tin" name="tin" placeholder="<?php echo $row['tin']; ?>"  readonly="readonly"/>
								</div></div></div>
							
								
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="tin">Tax Payer's Identification Number (TIN)</label>
								<input type="text" class="form-control" id="tin" name="tin" placeholder="<?php echo $row['tin']; ?>"  readonly="readonly"/>
								</div></div></div>
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="firstname">Unang Pangalan</label>
								<input type="text" class="form-control" id="firstname" name="firstname" placeholder="<?php echo $row['firstname']; ?>" readonly="readonly"/>
								</div></div>
								<div class="col-auto">
								<div class="form-group">
								<label for="middlename">Gitnang Pangalan</label>
								<input type="text" class="form-control" id="middlename" name="middlename" placeholder="<?php echo $row['middlename']; ?>" readonly="readonly"/>
								</div></div>

								<div class="col-auto">
								<div class="form-group">
								<label for="lastname">Apelyido</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="<?php echo $row['lastname']; ?>" readonly="readonly"/>
								</div></div>
							
							</div>
							<div class="row mt-5">
							
								<div class="col-auto">
								<div class="form-group">
								<label for="edad">Edad</label>
								<input type="number" name="edad" class="form-control" id="edad" placeholder="<?php echo $row['edad']; ?>" readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="barangay">Barangay</label>
								<input type="text" class="form-control" id="barangay" name="barangay" placeholder="<?php echo $row['barangay']; ?>" readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="bayan">Bayan</label>
								<input type="text" name="bayan" class="form-control" id="bayan" placeholder="<?php echo $row['bayan']; ?>" readonly="readonly"/>
								</div></div></div>
							

					
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="date_join">Date Join</label>
								<input type="text" class="form-control" id="date_join" name="date_join"placeholder="<?php echo $row['date_join']; ?>"readonly="readonly"/>
								</div>
								</div>
							   
							
								

	
						<div class="col-auto">
							<div class="form-group">
							<label for="seminardate">Seminar Date</label>
							<input type="text" class="form-control" id="seminardate" name="seminardate"placeholder="<?php echo $row['seminardate']; ?>"readonly="readonly"/>
							 			  </div>	
										  </div>	
										  </div>	




										  <div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="attended">Did the applicant attended the seminar?</label>
								<select name="attended"	value="<?php echo $row['attended']; ?>" class="form-control"  required>
													    <option value="" disabled selected hidden>Pumili Dito...</option>

													<option value="Yes, Personally">Yes, Personally</option>
													<option value="Not attended">Not attended</option>
							</select></div>
								</div>
								<div class="col-auto">

								<div class="form-group">
								<label for="interview">Did the applicant undergo personal interview?</label>
								<select name="interview" value="<?php echo $row['interview']; ?>" class="form-control"  required>
													    <option value="" disabled selected hidden>Pumili Dito...</option>

													<option value="Yes, passed.">Yes, passed.</option>
													<option value="Not undergo">Not undergo</option>
							</select>							
							</div>
								</div>
								</div>
								
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="requirements">Did the applicant comply all the requirements needed?</label>
								<select name="requirements"	value="<?php echo $row['requirements']; ?>" class="form-control"  required>
													    <option value="" disabled selected hidden>Pumili Dito...</option>

													<option value="Yes, complete">Yes, complete</option>
													<option value="Yes, but incomplete">Yes, but incomplete</option>
													<option value="No, no requirements submitted">No, no requirements submitted</option>
							</select></div>
								</div>

								<div class="col-auto">
								<div class="form-group">
								<label for="INCreq">If incomplete, specify here</label>
								<select name="INCreq"	value="<?php echo $row['INCreq']; ?>" class="form-control">
													<option value="" disabled selected hidden>Pumili Dito...</option>
													<option value="Subject For Disapproval">Subject For Disapproval</option>
													<option value="Requirements already completed">Requirements already completed</option>
													<option value="2x2 picture">2x2 picture</option>
													<option value="Marriage Contact or CENOMAR">Marriage Contact or CENOMAR</option>
													<option value="Residence Certificate Number">Residence Certificate Number</option>
													<option value="Barangay Clearance">Barangay Clearance</option>
							</select></div>
								</div>
								</div>



								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pay">Did the applicant pay at the cashier?</label>
								<select name="pay"	value="<?php echo $row['pay']; ?>" class="form-control"  required>
													    <option value="" disabled selected hidden>Pumili Dito...</option>
														<option value="Subject For Disapproval">Subject For Disapproval</option>

													<option value="Yes, paid">Yes, paid</option>
													<option value="Yes, but partial">Yes, but partial</option>
													<option value="No, payment submitted">No, payment submitted</option>
							</select></div>
								</div>

								<div class="col-auto">
								<div class="form-group">
								<label for="howmuch">How much does the applicant pays?</label>
   								 <input type="number" name="howmuch" class="form-control" id="howmuch" placeholder="Specify here..." required>
								</div>
								</div>
								</div>

								<div class="row mt-5">	  					
							<div class="col-auto">
							<div class="form-group">
							<label for="type">Members' Type</label>
							<select name="type"	value="<?php echo $row['type']; ?>" class="form-control"  required>
													    <option value="" disabled selected hidden>Pumili Dito...</option>

											<option value="Subject For Disapproval">Subject For Disapproval</option>
													
													<option value="Provisionary">Provisionary</option>
													<option value="Regular">Regular</option>
							</select>
						</div>
						</div>

										  <div class="col-auto">
										  <div class="form-group">
							<label>Status</label>
								<select name="status"
								 class="form-control" 						
								 value="<?php echo $row['status']; ?>"
								 required>
													    
								 					<option value="" disabled selected hidden>Pumili Dito...</option>
													<option value="Approve">Approve</option>
													<option value="Subject For Disapproval">Subject For Disapproval</option>


							</select>
										  </div>	
										  </div>	
										  </div>	 
													
										  <div class="form-group">
								<label>If subject for disapproval, choose here</label>
									<select name="reasondisapproval" class="form-control" value="<?php echo $row['reasondisapproval']; ?>">
									<option value="Not Applicable">Not Applicable</option>
									<option value="Failure to attend the seminar and interview">Failure to attend the seminar and interview</option>
									<option value="Sending a proxy to attend the seminar">Sending a proxy to attend the seminar</option>
									<option value="The minimum amount in contribution fees doesnt reach">The minimum amount in contribution fees doesnt reach</option>



								</select>
										  </div>
										  <div class="form-btn" >
										  <button class="submit-btn mb-5" name="update" value="Update">UPDATE</button>
										  </div>
						</form>
