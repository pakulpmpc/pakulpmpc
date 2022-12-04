<?php
include 'database_connection.php';
$output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM members WHERE pangalan LIKE CONCAT('%',?,'%') OR barangay LIKE CONCAT('%',?,'%')");
    $stmt->bind_param("ss",$search,$search);
}
else{
    $stmt=$conn->prepare("SELECT * FROM members");
}

$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0) {
    $output="<thead>
            <tr>
                <th>ID</th>
                <th>Pangalan</th>
                <th>Edad</th>
                <th>Barangay</th>
                <th>Bayan</th>
                <th>Members' Type</th>
                <th>Date Join</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>";
            while ($row=$result->fetch_assoc()){
                $output .="<tr>                                   
                                     <td>".$row['id']."</td>
                                    <td>".$row['pangalan']."</td>
                                    <td>".$row['edad']."</td>
                                    <td>".$row['barangay']."</td>
                                    <td>".$row['bayan']."</td>
                                    <td>".$row['type']."</td>
                                    <td>".$row['date_join']."</td>
                                    <td>".$row['status']."</td>
                                </tr>";
            }
            $output .="</tbody>";
            echo $output;
} else {
   echo"<h3>NO RECORDS FOUND</h3>";
}

?>