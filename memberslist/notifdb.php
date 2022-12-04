<?php
$con = mysqli_connect('localhost', 'root', '', 'pakul');

if($con){
    echo"  ";

}
else{
    echo mysqli_error($con);
}
?>