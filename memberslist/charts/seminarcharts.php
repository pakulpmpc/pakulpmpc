<?php
include '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.0.2/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">

<link rel="stylesheet" href="charts.css">
<link rel="icon" type="image/x-icon" href="../../userpage/assets/pakul.jpg" />


    <title>Charts | Seminar </title>
</head>

<style>
    body{
        background:#f85a40;
    }
    table{
        background-color:white;
    }
</style>
<body>
<nav id="navbar" class="navbar">
        <ul>
                  
     
     
          <li class="dropdown"><a href="#"><span>List Of Members</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                 <li><a href="registercharts.php">Registration Chart</a></li>
                  <li><a href="membercharts.php">Approved Chart</a></li>
                  <li><a href="seminarcharts.php">Seminar Chart</a></li>
</ul>
              </li>
             
              <li><button onclick="history.back()">Go Back</button></li>


        </ul>
      </nav><!-- .navbar -->

</body>

<table id="example" class="display" style="width:100%">
<?php
                    include 'database.php';
                    $stmt=$conn->prepare("SELECT * FROM seminar");
                    $stmt->execute();
                    $result=$stmt->get_result();
                    ?>

        <thead>

            <tr>
                            <th>TIN ID</th>
                            <th>Pangalan</th>
                            <th>Edad</th>
                            <th>Barangay</th>
                            <th>Bayan</th>
                            <th>Members' Type</th>
                            <th>Date Join</th>
                            <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $pdo = Database::connect();
            $sql = 'SELECT * FROM `seminar` WHERE 1';
            foreach ($pdo->query($sql) as $row) {
              echo '<tr>';
              echo '<td>' . $row['tin'] . '</td>';  
              echo '<td>' . $row['pangalan'] . '</td>'; 
              echo '<td>' . $row['edad'] . '</td>';  
              echo '<td>' . $row['barangay'] . '</td>';
              echo '<td>' . $row['bayan'] . '</td>';        
              echo '<td>' . $row['type'] . '</td>';        
              echo '<td>' . $row['date_join'] . '</td>';    
              echo '<td>' . $row['status'] . '</td>';
              echo '</td>';
              echo '</tr>';
              echo '</td>';
              echo '</tr>'; 
            }
            Database::disconnect(); 
            ?>
        </tbody>
       
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.0.2/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <script src="//code.highcharts.com/highcharts.js"></script>
    <script>
        $(document).ready(function () {
    // Create DataTable
    var table = $('#example').DataTable({
        dom: 'Pfrtip',
    });
 
    // Create the chart with initial data
    var container = $('<div/>').insertBefore(table.table().container());
 
    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Seminar Attendee List Chart and Data',
        },
        series: [
            {
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(1, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
    </script>
</html>