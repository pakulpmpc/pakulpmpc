<?php
include_once '../memberslist/notifdb.php';
?>
<?php
if(isset($_GET['id']))
{
    $main_id = $_GET['id'];
    $sql_update =mysqli_query($con, "UPDATE events SET status=1 WHERE id='$main_id'");
}
?>


<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USER | READ EVENTS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="user.css" rel="stylesheet" />
        <!-- font awesome-->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        </head>

        <style>
            #table1{
                margin-top: 5% !important;
            }
        </style>
        <body>
            
         <div class="container" id="table1" >
        <button onclick="history.back()">Back</button>
            <div class="row">
            <table class="table">
            <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Events Title</th>
            <th scope="col">Events When</th>
            <th scope="col">Events Where</th>
            <th scope="col">Events Who</th>
            <th scope="col">Events Photo</th>
            <th colspan="2">Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        $sql_get = mysqli_query($con,"SELECT * FROM events WHERE status=1");
        while($main_result = mysqli_fetch_assoc($sql_get)) :
        ?>
        
            <tr>
            <td><?php echo $main_result ['id']; ?> </td>
            <td><?php echo $main_result ['events_what']; ?> </td>
            <td><?php echo $main_result ['events_when']; ?> </td>      
            <td><?php echo $main_result ['events_where']; ?> </td>
            <td><?php echo $main_result ['events_who']; ?> </td>
            <td><?php echo '<img src="data:image;base64,'.base64_encode($main_result['photo']).'"alt="Photo" style="width:100px; height:100px;">'; ?> </td>           
            
            <td><a href="viewdetails.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fa fa-eye"></i></a> </td> 
            <td><a href="eventsdelete.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fa fa-trash"></i></a> </td> 


            </tr>

            <?php endwhile ?>
          
            </tbody>
            </table>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>