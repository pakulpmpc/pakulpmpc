<?php
include 'database_connection.php';
$output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM passbook WHERE name LIKE CONCAT('%',?,'%') OR id LIKE CONCAT('%',?,'%')");
    $stmt->bind_param("ss",$search,$search);
}
else{
    $stmt=$conn->prepare("SELECT * FROM passbook");
}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0) {
    $output="<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Subscribed Capital</th>
                <th>Capital Build-up</th>
                <th>Savings Fund</th>
            </tr>
            </thead>
            <tbody>";
            while ($row=$result->fetch_assoc()){
                $output .="<tr>                                   
                                     <td>".$row['id']."</td>
                                    <td>".$row['Name']."</td>
                                    <td>".$row['Subscribed_Capital']."</td>
                                    <td>".$row['Capital_Build-up']."</td>
                                    <td>".$row['Saving_Fund']."</td>
                                </tr>";
            }
            $output .="</tbody>";
            echo $output;
} else {
   echo"<h3>NO RECORDS FOUND</h3>";
}

?>`