<?php

require 'notifdb.php';

if(isset($_POST['send']))
{
    $events_what = $_POST['events_what'];
    $events_when = $_POST['events_when'];
    $events_where = $_POST['events_where'];
    $events_who = $_POST['events_who'];
    $files = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

    $sql_insert = mysqli_query($con, "INSERT INTO events(events_what,events_when,events_where,events_who,photo) 
    VALUES('$events_what', '$events_when','$events_where','$events_who','$files')");
   
   if($sql_insert){
        echo"<script>alert('Event Sent Successfully');</script>";
    }
    else{
        echo mysqli_error($con);
        exit;
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN | Upload Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

   <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../userpage/user.css" rel="stylesheet" />
        <!-- font awesome-->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head></head>
    <style>
#center{
  position:absolute;
  top:50%;
  left:50%;
  
  transform: translate(-50%,-50%);
  width: 1000px;
  padding: 1px;
  border: 5px solid gray;
  margin: 0;
}

body {
 
}
        </style>
  <body>
      <!-- CONTACT-->
      <section class="page-section bg-primary" id="events">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2>POST EVENTS</h2>
                        <hr class="divider" />
                        <p class="text-white mb-5">Ibigay lamang ang mga impormasyong nasa ibaba upang matawagan namin kayo sa inyong mga gustong alamin sa aming kooperatiba.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
              
                    <button onclick="history.back()">Back</button>
                 <form action="" method="post" enctype="multipart/form-data"autocomplete="off">

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="events_what" 
                                name="events_what" 
                                type="text" 
                                placeholder="Enter your name..." 
                                data-sb-validations="required"
                                value="<?php echo !empty($events_what)?$events_what:'';?>" name="events_what"/>
                                <label for="events_what">Events' Title and Description</label>
                                <div class="invalid-feedback" data-sb-feedback="events_what:required">An event title is required.</div>
                            </div>

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="events_when" 
                                name="events_when"
                                type="datetime-local" 
                                placeholder="Enter the date of the event..."
                                data-sb-validations="required,events_when" 
                                value="<?php echo !empty($events_when)?$events_when:'';?>" name="events_when"/>
                                <label for="events_when">When(date/time)</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="events_when:required">A date is required is required.</div>
                                
                            </div>


                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                id="events_where"
                                type="text" 
                                placeholder="Enter the date of the event..."
                                data-sb-validations="required" 
                                value="<?php echo !empty($events_where)?$events_where:'';?>" name="events_where"/>
                                <label for="events_where">Location of the event</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="events_where:required">A location is required.</div>
                            </div>

                            <div class="form-floating mb-3">
                            <select name="events_who" id="events_who"class="form-control" required>
    <option value="" disabled selected hidden>Pumili Dito...</option>
							<option value="APPROVE APPLICANT">APPROVE APPLICANT</option>
                            <option value="PROVISIONARY MEMBERS">PROVISIONARY MEMBERS</option>
                            <option value="REGULAR MEMBERS">REGULAR MEMBERS</option>
                            <option value="STAFFS">STAFFS</option>

    </select>
                                <label for="events_who">Who will attend the event</label>
                                <div class="invalid-feedback" 
                                data-sb-feedback="events_who:required">An attendee is required.</div>
                            </div>


                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <input class="form-control"  
                                type="file" 
                                id="photo"
                                name="photo"
                                placeholder="Insert your photo here..." 
                                data-sb-validations="required"></input>
                                <div class="invalid-feedback" 
                                data-sb-feedback="photo:required">A photo is required.</div>
                            </div>


                            <div class="d-grid">
                                <button class="btn btn-success btn-xl" 
                                id="submitButton" 
                                type="submit" 
                                name="send">Submit</button></div>
                        </form>
                    </div>
                </div>



           
        </section>



            
              
          
        </form>
</div>
    
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>