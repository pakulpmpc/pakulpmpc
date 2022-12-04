<?php

//fetch.php

include('database_connection.php');

$column = array("id", "pangalan", "edad", "barangay", "bayan","type", "date_join", "status");

$query = "SELECT * FROM register ";

if(isset($_POST["search"]["value"]))
{
	$query .= '
	WHERE pangalan LIKE "%'.$_POST["search"]["value"].'%" 
	OR id LIKE "%'.$_POST["search"]["value"].'%" OR type LIKE "%'.$_POST["search"]["value"].'%" 
	';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['pangalan'];
	$sub_array[] = $row['edad'];
	$sub_array[] = $row['barangay'];
	$sub_array[] = $row['bayan'];
    $sub_array[] = $row['type'];
	$sub_array[] = $row['date_join'];
    $sub_array[] = $row['status'];
	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM register";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	'draw'		=>	intval($_POST['draw']),
	'recordsTotal'	=>	count_all_data($connect),
	'recordsFiltered'	=>	$number_filter_row,
	'data'		=>	$data
);

echo json_encode($output);

?>
