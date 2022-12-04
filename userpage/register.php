

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
    <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
    <title>REGISTER | MEMBERSHIP</title>

        <!-- Icons font CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

   
    <style type="text/css">
  #registration_form fieldset:not(:first-of-type) {
    display: none;
  }
  .box{
width:100%;
height: 100%;
border: 3px solid black;
margin-top: 5px;
margin-left: 5px;
padding: 0;
}
 body{
  background: #ecf0f3;
 }
  </style>
<body><div class="container mt-5">

  
<h1></h1>
<center><h1><b>REGISTRATION</b></h1></center>
<br>
<div class="progress">
  
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="registration_form" novalidate action="registeraction.php"  method="post"  enctype="multipart/form-data" autocomplete="off"> 
  <fieldset>

    <h2><b>Step 1: BIO DATA</b></h2>

  <h8>------- Upang panatiliin ang maayos na proseso, mangyaring sagutin lamang ang lahat ng mga sumusunod -------</h8>

    <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group required">
    <label for="tin">Tax Payer's Identification Number (TIN) <label style="color:red;"> *</label></label>
   <br> <text style="color:red;"> <i> -----  Itype ang 0 kung wala pang ID   -----</i> </text>

    <input type="number" class="form-control" id="tin" name="data[tin]" placeholder="Ilagay dito"required>

    </div></div></div>

    <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group">
    <label for="firstname">Unang Pangalan <label style="color:red;"> *</label></label>
    <input type="text" class="form-control" id="firstname" name="data[firstname]" placeholder="Ilagay dito" required>
    
    </div></div>
    <div class="col-auto">
    <div class="form-group">
    <label for="middlename">Gitnang Pangalan <label style="color:red;"> *</label></label>
    <input type="text" class="form-control" id="middlename" name="data[middlename]" placeholder="Ilagay dito" required>
    
    </div></div> 
    <div class="col-auto">
    <div class="form-group">
    <label for="lastname">Apelyido <label style="color:red;"> *</label></label>
    <input type="text" class="form-control" id="lastname" name="data[lastname]" placeholder="Ilagay dito" required>
    
    </div></div>
    </div>
    <div class="row mt-5">

    <div class="col-auto">
    <div class="form-group">
    <label for="edad">Edad <label style="color:red;"> *</label></label>
    <input type="number" name="data[edad]" class="form-control" id="edad" placeholder="Ilagay dito" required>
    </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="contact">Email Address<label style="color:red;"> * </label></label>
    <input type="text" name="data[contact]" class="form-control" id="contact" placeholder="Ilagay dito" required>
    </div></div></div>
    
    <div class="row mt-5">
    <div class="col-auto">
    <div class="form-group">
    <label for="barangay">Barangay <label style="color:red;"> *</label></label>
    <select name="data[barangay]"id="barangay" class="form-control" required>
       <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
              <option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select>   
   </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="bayan">Bayan <label style="color:red;"> *</label></label>
    <select name="data[bayan]" class="form-control" required>
             <option value="Jaen">Jaen</option>
    </select>
    </div></div></div>

   <h3><b>Bio-Data na tulad ng sumusunod:</b></h3>
   <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group">
    <label for="taon">Ilang taon ka na sa kasalukuyang tirahan: <label style="color:red;"> *</label></label>
    <input type="number" class="form-control" id="taon" name="data[taon]" placeholder="Ilagay dito." required>
    </div></div>
    
    <div class="col-auto">
    <div class="form-group">
    <label for="sarili">Sariling tahanan mo ba ito? <label style="color:red;"> *</label></label>
		<select name="data[sarili]" id="sarili"class="form-control" required>
    <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Oo">Oo</option>
							<option value="Hindi">Hindi</option>
    </select>
					</div>	
        </div>	        </div>	

        <div class="row mt-5">
        <div class="col-auto">
    <div class="form-group">
    <label for="umuupa">Ikaw ba ay umuupa? o nakikitira? <label style="color:red;"> *</label></label>
		<select name="data[umuupa]" class="form-control">
    <option value="" disabled selected hidden>Pumili Dito...</option>
    <option value="Pag-aari ko ang bahay na ito">Pag-aari ko ang bahay na ito</option>

							<option value="Umuupa">Umuupa</option>
							<option value="Nakikitira">Nakikitira</option>
    </select>
					</div>	
        </div>	

        <div class="col-auto">
    <div class="form-group">
    <label for="lupa">Sarili mo ba ang lupang tinatayuan? <label style="color:red;"> *</label></label>
		<select name="data[lupa]"id="lupa" class="form-control">
    <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Sariling Lupa">Oo</option>
							<option value="Hindi akin">Hindi</option>
    </select>
					</div>	
        </div>	
      </div>


    <div class="row mt-5">
    <div class="col-auto">
    <div class="form-group">
    <label for="hanapbuhay">Ano ang iyong hanapbuhay? <label style="color:red;"> *</label></label>
    <input type="text" class="form-control" id="hanapbuhay" name="data[hanapbuhay]" placeholder="Ilagay dito"  required>
    </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="kita">Magkano ang regular na kita mo sa isang taon? Pesos. <label style="color:red;"> *</label></label>
    <input type="number" name="data[kita]"  min = "0" max="300000" step="1000" value="1000" class="form-control">
    </div></div></div>

    <div class="row mt-5">
    <div class="col-auto">
    <div class="form-group">
    <label for="ektarya">Kung ikaw ay nagsasaka, ilang ektarya ang saka mo? <label style="color:red;"> *</label></label>
    <select name="data[ektarya]" class="form-control" required>
    <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="1 ektarya">1 ektarya</option>
							<option value="2 ektarya">2 ektarya</option>
              <option value="3 ektarya">3 ektarya</option>
							<option value="4 ektarya">4 ektarya</option>
              <option value="5 ektarya">5 ektarya</option>
							<option value="6 ektarya">6 ektarya</option>
              <option value="7 ektarya">7 ektarya</option>
							<option value="8 ektarya">8 ektarya</option>
              <option value="9 ektarya">9 ektarya</option>
							<option value="1 ektarya0">10 ektarya</option>
              <option value="1 ektarya1">11 ektarya</option>
							<option value="1 ektarya2">12 ektarya</option>
          
           
    </select>   </div></div>
    
    <div class="col-auto">
    <div class="form-group">
    <label for="tanim">Ano ang iyong mga tanim? <label style="color:red;"> *</label></label>
   	<select name="data[tanim]"  class="form-control" required>
                 <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Palay">Palay</option>
							<option value="Gulay">Gulay</option>
              <option value="Prutas">Prutas</option>
        </select>
  </div></div></div>

   
   
     <div class="row mt-5">

    <div class="col-auto">
    <div class="form-group">
    <label for="hayop">Ikaw ba ay may alagang hayop? <label style="color:red;"> *</label></label>

          <input type="text" name="data[hayop]" list="data['hayop']" class="form-control" placeholder="Pumili o Itype Dito">
          <datalist id="data['hayop']">
          <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Kalabaw">Kalabaw</option>
							<option value="Baka">Baka</option>
							<option value="Manok">Manok</option>
							<option value="Baboy">Baboy</option>
          </datalist>
   



      
     

  </div></div>

  <div class="col-auto">
  <div class="col-auto">
    <div class="form-group">
    <label for="ilan">Ilan ang alaga mong hayop? <label style="color:red;"> *</label></label>
    <input type="number" name="data[ilan]" class="form-control" id="ilan" placeholder="Ilagay dito" required>  
  </div></div>    </div>  </div>
      

    <input type="button" name="password" class="next btn btn-info mt-5 mb-5" value="Next" />
    
  </fieldset>


<!-- STEP 2-->


  <fieldset>

    <h2> <b> Step 2: Mga maaaring makapagpakilala sayo </b></h2>
    <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group">
    <label for="pmpc1">Pangalan ng kasapi sa Pakul PMPC <label style="color:red;"> *</label></label>
   <br>
    <input type="text" class="form-control" id="pmpc1" name="data[pmpc1]" placeholder="Ilagay dito" required>
    
    </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="tirahan1">Tirahan <label style="color:red;"> *</label></label>
    <select name="data[tirahan1]" class="form-control" required>
       <option value="" disabled selected hidden>Pumili Dito...</option>
       <option value="Walang kilalang kasapi">Walang kilalang kasapi</option>

							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
							<option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select> 
    </div></div></div>

    <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group">
    <label for="pangalan2">Pangalan ng hindi kasapi <label style="color:red;"> *</label></label>
    <input type="text" class="form-control" id="pangalan2" name="data[pangalan2]" placeholder="Ilagay dito" required>
    <br>
    <input type="text" class="form-control" id="pangalan3" name="data[pangalan3]" placeholder="Ilagay dito">
    </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="tirahan2">Tirahan <label style="color:red;"> *</label></label>
    <select name="data[tirahan2]" class="form-control" required>
       <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
							<option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select> 
    <br>

    <select name="data[tirahan3]" class="form-control">
       <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
							<option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select> 
    
  
    </div></div></div>


    <div class="row mt-5">
     <div class="col-auto">
    <div class="form-group">
    <label for="samahan1">Samahan na ikaw ay kasapi <label style="color:red;"> *</label></label>
    <br>
    <input type="text" class="form-control" id="samahan1" name="data[samahan1]" placeholder="Ilagay dito" required>
    <br>
    <input type="text" class="form-control" id="samahan2" name="data[samahan2]" placeholder="Ilagay dito">
    
    </div></div>

    <div class="col-auto">
    <div class="form-group">
    <label for="address1">Address <label style="color:red;"> *</label></label>
    <select name="data[address1]" class="form-control" required>
       <option value="" disabled selected hidden>Pumili Dito...</option>
       <option value="Hindi kabilang sa samahan">Hindi kabilang sa samahan</option>
							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
              <option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select>   
    <br>
    <select name="data[address2]" class="form-control">
       <option value="" disabled selected hidden>Pumili Dito...</option>
       <option value="Hindi kabilang sa samahan">Hindi kabilang sa samahan</option>
							<option value="Calabasa">Calabasa</option>
							<option value="Dampulan">Dampulan</option>
              <option value="Don Mariano Marcos">Don Mariano Marcos</option>
							<option value="Hilera">Hilera</option>
              <option value="Imbunia">Imbunia</option>
							<option value="Imelda Poblacio">Imelda Poblacio</option>
              <option value="Lambakin">Lambakin</option>
							<option value="Langla">Langla</option>
              <option value="Magsalisi">Magsalisi</option>
							<option value="Malabon-Kaingin">Malabon-Kaingin</option>
              <option value="Marawa">Marawa</option>
							<option value="Niyugan">Niyugan</option>
              <option value="Ocampo-Rivera District">Ocampo-Rivera District</option>
							<option value="Pakol">Pakol</option>
              <option value="Pamacpacan">Pamacpacan</option>
							<option value="Pinanggaan">Pinanggaan</option>
              <option value="Putlod">Putlod</option>
							<option value="San Jose">San Jose</option>
							<option value="San Josef">San Josef</option>
              <option value="San Pablo">San Pablo</option>
							<option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
							<option value="Santa Rita">Santa Rita</option>
              <option value="Santo Tomas North">Santo Tomas North</option>
              <option value="Santo Tomas South">Santo Tomas South</option>
              <option value="Sapang">Sapang</option>
              <option value="Ulanin Pitak">Ulanin Pitak</option>

    </select> 
    </div></div>
  
  
    <div class="col-auto">
    <div class="form-group">
    <label for="taon2">Ilang taon <label style="color:red;"> *</label></label>
    <input type="number" class="form-control" id="taon2" name="data[taon2]" placeholder="Ilagay dito"  required>
    <br>
    <input type="number" class="form-control" id="taon3" name="data[taon3]" placeholder="Ilagay dito" >

    </div></div></div>


    <input type="button" name="previous" class="previous btn btn-default mt-5 mb-5" value="Previous" />
    <input type="button" name="next" class="next btn btn-info mt-5 mb-5" value="Next" />
  </fieldset>




  <!--step4-->
  <fieldset>
    <h2> <b> Step 3: Ipasa ang mga kinakailangang dokumento at larawan sa pag aapply </b></h2>
    <div class="form-group">
   

    <label for="picture">2x2 colored ID photo(recent shot)</label>
                                <input class="form-control"  
                                type="file" 
                                accept="image/*" 
                                id="picture"
                                name="picture"
                                placeholder="Insert your picture here..." 
                                data-sb-validations="required"></input>
                                <div class="invalid-feedback" 
                                data-sb-feedback="photo:required">This field is required.</div>
                            </div>
 
                <center><label for="picture">Ipasa ang malinaw na kuha ng dokumento, gamitan ng app na pang scan bago ipasa.</label></center>  
  <div class="form-group">
    <label for="clearance">Barangay Clearance</label>
    <input class="form-control"  
                                type="file" 
                                accept="image/*" 
                                id="clearance"
                                name="clearance"
                                placeholder="Insert your clearance here..." 
                                data-sb-validations="required"></input>
                                <div class="invalid-feedback" 
                                data-sb-feedback="file:required">This field is required.</div>
                            </div>

  <div class="form-group">
    <label for="residence">Residence Certificate Number</label>
    <input class="form-control"  
                                type="file" 
                                accept="image/*" 
                                id="residence"
                                name="residence"
                                placeholder="Insert your Residence Certificate Number here..." 
                                data-sb-validations="required"></input>
                                <div class="invalid-feedback" 
                                data-sb-feedback="residence:required">This field is required.</div>
                            </div>
   
 
  <div class="form-group">
    <label for="marriage">Marriage Contract</label>
    <center><label for="marriage" style="color:red">Ipasa ang CENOMAR kung hindi pa kasal.</label></center>  
    <input class="form-control"  
                                type="file" 
                                accept="image/*" 
                                id="marriage"
                                name="marriage"
                                placeholder="Insert your picture here..." 
                                data-sb-validations="required"></input>
                                <div class="invalid-feedback" 
                                data-sb-feedback="marriage:required">This field is required.</div>
                            </div>

    
    <div class="form-group">
    <label for="date_join">Date Join: "Mangyaring mag-click sa pindutan ng kalendaryo at pindutin ang 'today'"</label>
    <input type="datetime-local" class="form-control" id="date_join" name="data[date_join]"required>
    </div>
   

    <div class="form-group">
    <label for="status">Status</label>
    <select name="data[address2]" class="form-control" required>
							<option value="Applicant">Applicant</option>
    </select> 
    </div>

    <input type="button" name="previous" class="previous btn btn-default mt-5 mb-5" value="Previous" />
    <input type="button" name="next" class="next btn btn-info mt-5 mb-5" value="Next" />
  </fieldset>

  <fieldset>

    <div class="box">
      <center>
     <h2> <b>MAHALAGANG PAALALA</b> </h2>
    <label class="mt-5 mb-5">&nbsp;&nbsp; 
Mangyaring regular na bisitahin ang "Seminar List Attendee" para sa mga update ng petsa ng naaprubahang aplikante<br>
      magdala ng halagang kinakailangan sa pagiging myembro ng kooperatiba. <br><br>TWO HUNDRED FIFTY PESOS (P 250.00) para sa membership fee at <br>FOUR THOUSAND PESOS (P 4,000.00) para sa Membership Contribution </label>

      <label> Dalhin ang mga ipinasang dokumento para sa mas masusing beripikasyon nito.</label>
      <label class="mt-5">Maghanda din para sa magaganap na interview pagkatapos ng itinalagang seminar sa mga naaprubahang aplikante ng kooperatiba</label>
<br>
  <div style="color:red;" class="mt-5">&nbsp;&nbsp;<b>ANUMANG KAKULANGAN SA MGA INPORMASYON AT DOKUMENTONG IPINASA AY MAAARING IKASANHI NG HINDI PAGPROSESO NG APLIKASYON SA PAGPAPAMIYEMBRO </b></div>
  </center>
  &nbsp;&nbsp; 
  </div>
  <input type="button" name="previous" class="previous btn btn-default mt-5 mb-5" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" />
   
   
</fieldset>
  </form>
  
  <script>
  $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});


</script>
