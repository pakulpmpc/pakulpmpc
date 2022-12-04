                            
                            <?php
                            include 'database.php';
							if(count($_POST)>0){
								mysqli_query($conn, "UPDATE members
								SET 
								tin='". $_POST['tin']. "', 
								howmuch='". $_POST['howmuch']. "', 
								INCreq='". $_POST['INCreq']. "', 
								pay='". $_POST['pay']. "', 
								type='". $_POST['type']. "'

								WHERE id='" . $_GET['id']. "'");
								
									header("location:member.php");
								
							}


							
                            $result = mysqli_query($conn, "SELECT * FROM members WHERE id='" . $_GET['id']. "'");
 
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
								<title>ADMIN | MEMBERS</title>
							
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

								<input type="number" name="tin" class="form-control" id="tin" placeholder="Specify here..." />

							
							</div></div></div>
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pangalan">Buong Pangalan</label>
								<input type="text" class="form-control" id="pangalan" name="pangalan" placeholder="<?php echo $row['pangalan']; ?>" readonly="readonly"/>
								</div></div>
							
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
							   
							
								

	
					




										  <div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="attended">Did the applicant attended the seminar?</label>
								<input type="text" class="form-control" id="attended" name="attended"placeholder="<?php echo $row['attended']; ?>"readonly="readonly"/>
							 			  </div>	
										  </div>	
										 

								<div class="col-auto">
								<div class="form-group">
								<label for="interview">Did the applicant undergo personal interview?</label>
								<input type="text" class="form-control" id="interview" name="interview"placeholder="<?php echo $row['interview']; ?>"readonly="readonly"/>
							 			  </div>	
										  </div>	
										 
								</div>
								
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="requirements">Did the applicant comply all the requirements needed?</label>
								<input type="text" class="form-control" id="requirements" name="requirements"placeholder="<?php echo $row['requirements']; ?>"readonly="readonly"/>

                                <select name="requirements"
								 class="form-control" 						
								 value="<?php echo $row['requirements']; ?>"
								 >                                               
													 <option value="" disabled selected hidden>Pumili Dito...</option>
													<option value="Yes, complete">Yes, complete</option>
													<option value="Yes, but incomplete">Yes, but incomplete</option>
													<option value="No, no requirements submitted">No, no requirements submitted</option>

							</select>
						</div>
						</div>

								<div class="col-auto">
								<div class="form-group">
								<label for="INCreq">If incomplete, specify here</label>
								<input type="text" class="form-control" id="INCreq" name="INCreq"placeholder="<?php echo $row['INCreq']; ?>"readonly="readonly"/>

								<select name="INCreq" value="<?php echo $row['INCreq']; ?>" class="form-control">
													<option value="" disabled selected hidden>Pumili Dito...</option>
													<option value="Requirements already completed">Requirements already completed</option>
													<option value="2x2 picture">2x2 picture</option>
													<option value="Marriage Contact or CENOMAR">Marriage Contact or CENOMAR</option>
													<option value="Residence Certificate Number">Residence Certificate Number</option>
													<option value="Barangay Clearance">Barangay Clearance</option>
							</select></div></div></div>



								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pay">Did the applicant pay at the cashier?</label>
								<input type="text" class="form-control" id="pay" name="pay"placeholder="<?php echo $row['pay']; ?>"readonly="readonly"/>

								<select name="pay"
								 class="form-control" 						
								 value="<?php echo $row['pay']; ?>"
								 >
                                 
													 <option value="" disabled selected hidden>Pumili Dito...</option>

													<option value="Yes, paid">Yes, paid</option>
													<option value="Yes, but partial">Yes, but partial</option>
													<option value="No, payment submitted">No, payment submitted</option>
							</select></div>
								</div>

								<div class="col-auto">
								<div class="form-group">
								<label for="howmuch">How much does the applicant pays?</label>
								<input type="text" class="form-control" id="howmuch" name="howmuch"placeholder="<?php echo $row['howmuch']; ?>"readonly="readonly"/>

   								 <input type="number" name="howmuch" class="form-control" id="howmuch" placeholder="Please type or re-enter the amount here." >
								</div>
								</div>
								<div class="col-auto">
								<div class="form-group">
								<label for="howmuch2">Second Payment</label>
								<input type="text" class="form-control" id="howmuch2" name="howmuch2"placeholder="<?php echo $row['howmuch2']; ?>"readonly="readonly"/>

   								 <input type="number" name="howmuch2" class="form-control" id="howmuch2" placeholder="Please type or re-enter the amount here." >
								</div>
								</div>
								<div class="col-auto">
								<div class="form-group">
								<label for="howmuch3">Third Payment</label>
								<input type="text" class="form-control" id="howmuch3" name="howmuch3"placeholder="<?php echo $row['howmuch3']; ?>"readonly="readonly"/>

   								 <input type="number" name="howmuch3" class="form-control" id="howmuch3" placeholder="Please type or re-enter the amount here." >
								</div>
								</div>
								</div>

								<div class="row mt-5">	  					
							<div class="col-auto">
							<div class="form-group">
							<label for="type">Members' Type</label>
							<input type="text" class="form-control" id="type" name="type"placeholder="<?php echo $row['type']; ?>"readonly="readonly"/>

							<select name="type"	value="<?php echo $row['type']; ?>" class="form-control"  >

													 <option value="" disabled selected hidden>Pumili Dito...</option>

													<option value="Provisionary">Provisionary</option>
													<option value="Regular">Regular</option>
							</select>
						</div>
						</div>
										  <div class="col-auto">

										  <div class="form-group">

							<label>Status</label>
							<input type="text" class="form-control" id="status" name="status"placeholder="<?php echo $row['status']; ?>"readonly="readonly"/>

								
										  </div>	
										  </div>	
										  </div>	 
													
								
										  <div class="form-btn" >
										  <button class="submit-btn mb-5" name="update" value="Update">UPDATE</button>
										  </div>
						</form>
