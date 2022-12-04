							<?php
                            include 'updatesdb.php';
							if(count($_POST)>0){
								mysqli_query($con, "UPDATE register
								SET type='". $_POST['type']. "', 
								seminardate='". $_POST['seminardate']. "', 
								status='" .$_POST['status'] ."',
								reasondisapproval='". $_POST['reasondisapproval']. "'
								 WHERE id='" . $_GET['id']. "'");
								
									header("location:registertable.php");
								
							}


							
                            $result = mysqli_query($con, "SELECT * FROM register WHERE id='" . $_GET['id']. "'");
 
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
								<title>ADMIN | EDIT REGISTER</title>
							
									<!-- Icons font CSS-->
									<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
									<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
								</head>
							
							   <style>
								.update{
									background-color: #4CAF50; /* Green */
									border: none;
									color: white;
									
									padding: 15px 30px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									font-size: 16px;
								}
							   </style>
							
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
								<label for="contact">Email Address&nbsp;&nbsp;&nbsp;</label>
								<input type="text" name="contact" class="form-control" id="contact" placeholder="<?php echo $row['contact']; ?>" readonly="readonly"/>
								</div></div></div>
								<div class="row mt-5">
							
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
							
							   <h3><b>Bio-Data na tulad ng sumusunod:</b></h3>
							   <div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="taon">Ilang taon kana sa kasalukuyang tirahan:</label>
								<input type="number" class="form-control" id="taon" name="taon"placeholder="<?php echo $row['taon']; ?>" readonly="readonly"/>
								</div></div>
								
								<div class="col-auto">
								<div class="form-group">
								<label for="sarili">Sariling tahanan mo ba ito?</label>
								<input  id="pc" 
                                class="form-control" 
                                name="sarili" 
                                placeholder="<?php echo $row['sarili']; ?>" 
                                value="<?php echo !empty($sarili)?$sarili:'';?>" 
                                readonly="readonly"/>
									</div>	
									</div>	        </div>	
							
									<div class="row mt-5">
									<div class="col-auto">
								<div class="form-group">
								<label for="umuupa"><b>Para sa mga sumagot ng hindi:</b> Ikaw ba ay umuupa? o nakikitira?</label>
								<input  id="pc" 
                                class="form-control" 
                                name="umuupa" 
                                placeholder="<?php echo $row['umuupa']; ?>" 
                                value="<?php echo !empty($umuupa)?$umuupa:'';?>" 
                                readonly="readonly"/>
												</div>	
									</div>	
							
									<div class="col-auto">
								<div class="form-group">
								<label for="lupa"><b>Para sa mga sumagot ng oo:</b> Sarili mo ba ag lupang tinatayuan?</label>
								<input  id="pc" 
                                class="form-control" 
                                name="lupa" 
                                placeholder="<?php echo $row['lupa']; ?>" 
                                value="<?php echo !empty($lupa)?$lupa :'';?>" 
                                readonly="readonly"/>
									</div>	
									</div>	
								  </div>
							
							
								<div class="row mt-5">
								<div class="col-auto">
								<div class="form-group">
								<label for="hanapbuhay">Ano ang iyong hanapbuhay?</label>
								<input type="text" class="form-control" id="hanapbuhay" name="hanapbuhay" placeholder="<?php echo $row['hanapbuhay']; ?>" readonly="readonly"/> 								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="kita">Magkano ang regular na kita mo sa isang taon? Pesos.</label>
								<input type="number" name="kita" class="form-control" id="kita" placeholder="<?php echo $row['kita']; ?>" readonly="readonly"/>
								</div></div></div>
							
								<div class="row mt-5">
								<div class="col-auto">
								<div class="form-group">
								<label for="ektarya">Kung ikaw ay nagsasaka, ilang ektarya ang saka mo?</label>
								<input type="text" class="form-control" id="ektarya" name="ektarya" placeholder="<?php echo $row['ektarya']; ?>"  readonly="readonly"/>
								</div></div>
							
							   
								
								<div class="col-auto">
								<div class="form-group">
								<label for="hayop">May alaga kabang hayop?</label>
								<input  id="pc" 
                                class="form-control" 
                                name="hayop" 
                                placeholder="<?php echo $row['hayop']; ?>" 
                                value="<?php echo !empty($hayop)?$hayop:'';?>" 
                                readonly="readonly"/>
							  </div></div>
							
							  <div class="col-auto">
								<div class="form-group">
								<label for="ilan">Ilan ang alaga mong hayop?</label>
								<input type="number" name="ilan" class="form-control" id="ilan"placeholder="<?php echo $row['ilan']; ?>"  readonly="readonly"/>
								</div></div>    </div>
							
								<h2> <b> Step 2: Mga maaaring makapagpakilala sayo </b></h2>
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pmpc1">Pangalan ng kasapi sa Pakul PMPC</label>
								<input type="text" class="form-control" id="pmpc1" name="pmpc1" placeholder="<?php echo $row['pmpc1']; ?>"  readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="tirahan1">Tirahan</label>
								<input type="text" name="tirahan1" class="form-control" id="tirahan1" placeholder="<?php echo $row['tirahan1']; ?>"  readonly="readonly"/>
								</div></div></div>
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pangalan2">Pangalan ng hindi kasapi</label>
								<input type="text" class="form-control" id="pangalan2" name="pangalan2" placeholder="<?php echo $row['pangalan2']; ?>"  readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="tirahan2">Tirahan</label>
								<input type="text" name="tirahan2" class="form-control" id="tirahan2" placeholder="<?php echo $row['tirahan2']; ?>"  readonly="readonly"/>
								</div></div></div>
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="pangalan3">Pangalan ng hindi kasapi</label>
								<input type="text" class="form-control" id="pangalan3" name="pangalan3" placeholder="<?php echo $row['pangalan3']; ?>"  readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="tirahan3">Tirahan</label>
								<input type="text" name="tirahan3" class="form-control" id="tirahan3" placeholder="<?php echo $row['tirahan3']; ?>"  readonly="readonly"/>
								</div></div></div>
							
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="samahan1">Samahan na ikaw ay kasapi</label>
								<input type="text" class="form-control" id="samahan1" name="samahan1" placeholder="<?php echo $row['samahan1']; ?>"  readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="address1">Address</label>
								<input type="text" name="address1" class="form-control" id="address1" placeholder="<?php echo $row['address1']; ?>"  readonly="readonly"/>
								</div></div>
							  
							  
								<div class="col-auto">
								<div class="form-group">
								<label for="taon2">Ilang taon</label>
								<input type="number" class="form-control" id="taon2" name=taon2 placeholder="<?php echo $row['taon2']; ?>"  readonly="readonly"/>
								</div></div></div>
							
							
								<div class="row mt-5">
								 <div class="col-auto">
								<div class="form-group">
								<label for="samahan2">Samahan na ikaw ay kasapi</label>
								<input type="text" class="form-control" id="samahan2" name=samahan2 placeholder="<?php echo $row['samahan2']; ?>"  readonly="readonly"/>
								</div></div>
							
								<div class="col-auto">
								<div class="form-group">
								<label for="address2">Address</label>
								<input type="text" name="address2" class="form-control" id="address2" placeholder="<?php echo $row['address2']; ?>"  readonly="readonly"/>
								</div></div>
							  
							  
								<div class="col-auto">
								<div class="form-group">
								<label for="taon3">Ilang taon</label>
								<input type="number" class="form-control" id="taon3" name=taon3 placeholder="<?php echo $row['taon3']; ?>"  readonly="readonly"/>
								</div></div></div>
							
							
							
								<h2> <b> Step 3: Isumite ang mga kinakailangang dokumento at larawan sa pag aapply </b></h2>
							   
							<br><br><br>
								<div class="form-group">
								<label for="picture"style="font-size:28px;">2x2 colored ID photo(recent shot)</label>
																				
								<?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).'"alt="Photo" style="width: 200px; height:200px;">'; ?>      

																	</div>
													
								
	
							
								<div class="form-group">
								<label for="clearance" style="font-size:28px;">Barangay Clearance</label>
								<?php echo '<img src="data:image;base64,'.base64_encode($row['clearance']).'"alt="Photo" style="width:900px; height:1000px;">'; ?>      
								</div>
							
								<div class="form-group">
								<label for="residence" style="font-size:28px;">Residence Certificate Number</label>
								<?php echo '<img src="data:image;base64,'.base64_encode($row['residence']).'"alt="Photo" style="width:900px; height:1000px;">'; ?>   
								</div>
								<div class="form-group">
								<label for="marriage"style="font-size:28px;">Marriage Contract or CENOMAR</label>
								<?php echo '<img src="data:image;base64,'.base64_encode($row['marriage']).'"alt="Photo" style="width:900px; height:1000px;">'; ?>   
								</div>
								
								<br><br><br>
								<div class="form-group">
								<label for="date_join">Date Join</label>
								<input type="text" class="form-control" id="date_join" name="date_join"placeholder="<?php echo $row['date_join']; ?>">
								</div>
							   
							
								
								<h2> <b> PAGBIBIGAY NG SCHEDULE SA SEMINAR</b></h2>

						
		
							<div class="form-group">
							<label for="type">Members' Type</label>
							<select name="type"	value="<?php echo $row['type']; ?>" class="form-control"  required>
													<option value="Applicant">Applicant</option>
							</select>
						</div>
							<div class="form-group">
							<label for="seminardate">Seminar Date</label>
							<input type="datetime-local" class="form-control" value="<?php echo $row['seminardate']; ?>" id="seminardate" name="seminardate">

										  </div>

										  <div class="form-group">
									<label>Status</label>
										<select name="status" class="form-control" value="<?php echo $row['status']; ?>" required>
											<option value="" disabled selected hidden>Pumili Dito...</option>
											<option value="Waiting for Approval">Waiting for Approval</option>
											<option value="Subject For Disapproval">Subject For Disapproval</option>

									</select>
										  </div>	

										 
										  <div class="form-group">
								<label>If subject for disapproval, choose here</label>
									<select name="reasondisapproval" class="form-control" value="<?php echo $row['reasondisapproval']; ?>">
									<option value="Not Applicable">Not Applicable</option>
									<option value="Lack of personal information in the required field">Lack of personal information in the required field</option>
									<option value="Lack of Requirements Submitted">Lack of Requirements Submitted</option>
									<option value="Documents Passed isnt Readable">Documents Passed isnt Readable</option>
									<option value="Minimum Age Doesn't Reach">Minimum Age Doesn't Reach</option>


								</select>
										  </div>
													
								
										  <div class="form-btn" >
										  <button class="update" name="update" value="Update">UPDATE</button>
										  </div>
						</form>
