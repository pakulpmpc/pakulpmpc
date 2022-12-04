<?php
include_once '../memberslist/notifdb.php';

if(isset($_GET['id']))
{
    $delete_id = $_GET['id'];
    $sql_delete =mysqli_query($con, "DELETE FROM events WHERE id='$delete_id'");
    if($sql_delete){
        header('location: read_events.php');
    }
    else{
        echo mysqli_error($con);
    }

}
?>
