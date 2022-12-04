`<?php 
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);
 
if(empty($id)){
    $sql = "INSERT INTO events ('events_what','events_who','events_when','events_when_end','events_where') VALUES ('$events_what','$events_who','$events_when','$events_when_end','$events_where')";
}else{
    $sql = "UPDATE events set 'events_what' = '{$events_what}', 'events_who' = '{$events_who}', 'events_when' = '{$events_when}', 'events_when_end' = '{$events_when_end}', 'events_where' = '{$events_where}' where 'id' = '{$id}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>
