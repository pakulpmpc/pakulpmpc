<style>

.hi {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.hi {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  margin-top:35px;
}

.hi:hover {
  background-color: #4CAF50;
  color: white;
}
.box{
  margin-top:15%;
}
</style>

    <?php echo 
    include_once('regconnect.php');
   
    
    if(isset($_POST['submit'])){
        $tin =$_POST['data']['tin'];
        $firstname =$_POST['data']['firstname'];
        $middlename =$_POST['data']['middlename'];
        $lastname =$_POST['data']['lastname'];
        $edad = $_POST['data']['edad'];
        $contact = $_POST['data']['contact'];
        $barangay = $_POST['data']['barangay'];
        $bayan = $_POST['data']['bayan'];
        $taon = $_POST['data']['taon'];
        $sarili = $_POST['data']['sarili'];
        $umuupa = $_POST['data']['umuupa'];
        $hanapbuhay = $_POST['data']['hanapbuhay'];
        $kita = $_POST['data']['kita'];
        $ektarya = $_POST['data']['ektarya'];
        $hayop = $_POST['data']['hayop'];
        $tanim = $_POST['data']['tanim'];
        $ilan = $_POST['data']['ilan'];
        $pmpc1 = $_POST['data']['pmpc1'];
        $tirahan1 = $_POST['data']['tirahan1'];
        $pangalan2 = $_POST['data']['pangalan2'];
        $tirahan2 = $_POST['data']['tirahan2'];
        $pangalan3 = $_POST['data']['pangalan3'];
        $tirahan3 = $_POST['data']['tirahan3'];
        $samahan1 = $_POST['data']['samahan1'];
        $address1 = $_POST['data']['address1'];
        $taon2 = $_POST['data']['taon2'];
        $samahan2 = $_POST['data']['samahan2'];
        $address2 = $_POST['data']['address2'];
        $taon3 = $_POST['data']['taon3'];



        $files  = addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
        $files2 = addslashes(file_get_contents($_FILES["clearance"]["tmp_name"]));
        $files3 = addslashes(file_get_contents($_FILES["residence"]["tmp_name"]));
        $files4 = addslashes(file_get_contents($_FILES["marriage"]["tmp_name"]));
        $date_join = $_POST['data']['date_join'];


       $sql = "INSERT INTO register (tin, firstname,middlename,lastname, edad,contact, barangay, bayan, taon, sarili, umuupa, hanapbuhay, kita,tanim, ektarya, hayop, ilan, pmpc1, tirahan1, pangalan2, tirahan2, pangalan3, tirahan3, samahan1, address1, taon2, samahan2, address2, taon3, picture, clearance, residence, marriage,date_join)
       VALUES ('$tin','$firstname','$middlename','$lastname', '$edad','$contact', '$barangay', '$bayan', '$taon', '$sarili', '$umuupa', '$hanapbuhay', '$kita','$tanim', '$ektarya', '$hayop', '$ilan', '$pmpc1', '$tirahan1', '$pangalan2', '$tirahan2', '$pangalan3', '$tirahan3', '$samahan1', '$address1', '$taon2', '$samahan2', '$address2', '$taon3','$files','$files2','$files3','$files4', '$date_join')"; 
    
    if(mysqli_query($conn, $sql)){
       ?>
        <html>
            <div class="box">
          
        <center>
       <h2> <b>ANG IYONG APLIKASYON AY MATAGUMPAY NANG NAIPASA!</b> </h2>
     
  
    &nbsp;&nbsp; 
    </div>

   <center> <button class="hi"onclick="history.back()">Back</button></center>
      </center>
      <?php
    }
  }
    else{
        echo"ERROR: YOU CANT REGISTER AS OF NOW";
    }


    
    
  
    ?>
  
</div>
</div>