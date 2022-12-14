
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />

    <title>ADMIN |  MEMBERS' PASSBOOK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../adminpage/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <style>
     body {
        color: #546480;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
        overflow-x: hidden;
        height: 100%;
        width: 100%;

    }
    .table-responsive {
        margin: 20px 0;
        margin-left: -1%;
    }
    .table-wrapper {
        min-width: 860px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 2px 2px rgba(0,0,0,.10);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
  
    table.table tr th, table.table tr td {
        border-color: grey;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background:  #ffbf80;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: black;
        display: inline-block;
        margin: 0 5px;
    }  
 
    #hj
    {
        background-color:  #fff2e6;

    } 
    #qw
    {
        background-color: #ffc266;
    }

    </style>
  </head>

  <body>

    <div id="hj">
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="order-last" class="img" style="background-image: url(img/bg.jpg);">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div>
  <div class="">
          <h1><a href="../adminpage/admin.php" class="logo">ADMIN <span>Welcome Admin</span></a></h1>
          <ul class="list-unstyled components mb-5">
          <li class="active">
              <a href="../adminpage/admin.php"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
          
            <li class="active">
              <a href="registrationtable/registertable.php"><span class="fas fa-user-plus mr-3"></span> Registration table</a>
            </li>
          
            <li class="active">
              <a href="seminarlist/seminartable.php"><span class="fas fa-user-edit mr-3"></span> Seminar Table</a>
            </li>

            <li class="active">
              <a href="memberstable/member.php"><span class="fas fa-user-check mr-3"></span> Official Member Table</a>
            </li>
          
            <li class="active">
              <a href="passbook.php"><span class="fas fa-id-card mr-3"></span> Passbook Table</a>
            </li>

            <li>
              <a href="../logout.php"><span class="fa fa-sign-out mr-3"></span> Log-out</a>
            </li>
          </ul>

          

        </div>

      </nav>

       
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Pakul Multi-Purpose Coorperative</h2>
        <h3 class="mb-4">Membership Management System</h3>
        <p><span class="fa fa-info-circle mr-3"></span> Multi-Purpose Cooperative</p>
        <p><span class="fa fa-envelope mr-3"></span> pakul.pmpc@gmail.com</p>
        <p><span class="fa fa-clock-o mr-3"></span> 8:00 AM - 5:00 PM</p>
         <p><span class="fa fa-folder mr-3"></span><a href="https://www.facebook.com/search/?bqf=str%2FAgricultural%2BCooperative%2Fkeywords_pages&ref=page_about_category&f=AbpxaZHLVQP7A2U26Xyn06xVdSEfTnubwgpamUn1y6reaGmDWiqLfxPIwzSDtkHwnmUQr7puNFr9sNHi2sShzHmh1I9nOgazkvnO3lEmpE0deP4sYtKGoNJR8DFLYN92VLxXBYpGCozvpSh7AxkPnkpZ"> Agricultural Cooperative </a>??<a href="https://www.facebook.com/search/?bqf=str%2FFarm%2Fkeywords_pages&ref=page_about_category&f=AbqZBcvgt5_Uz3sG7B1blgqtKq3FkuQiizoGWOXBx9QrFQRFSqchj8LsSTzFFmzjF0tevn97kaDROm5R-z5Vf1F5S4h50e-Xs4FdE7enBDSwBqRrIyKGdF6RyW9pv4kRU_g">Farm</a></p>
         <p><span class="fa fa-facebook-square mr-3"></span> Pakul Primary Multi-Purpose Cooperative</p>
         <p><span class="fa fa-map-marker mr-3"></span> Pakul, Jaen, Nueva Ecija</p>
         
<br><br><br><br>
<div class="container">
            <br>       
             <button onclick="history.back()" class="btn btn-danger float-end">Back</button>

			<h3 align="center">Pakul Primary Multi Purpose Cooperative<br><b>Passbook</b></h3>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Passbook Data</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="members_data" class="table table-bordered table-striped">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subscribed Capital</th>
                                    <th>Capital Build-up</th>
                                    <th>Savings Fund</th>
                                </tr>
                                </thead>
                            <tbody>
                             
                                <tr>
                                    <td><?=$row['id']; ?></td>
                                    <td><?=$row['Name']; ?></td>
                                    <td><?=$row['Subscribed_Capital']; ?></td>
                                    <td><?=$row['Capital_Build-up']; ?></td>
                                    <td><?=$row['Saving_Fund']; ?></td>
                                </tr>
                                </tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
		
<script type="text/javascript" language="javascript">

$(document).ready(function(){
	var dataTable = $('#members_data').DataTable({
		"processing": true,
		"serverSide": true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST",
		},
		createdRow:function(row, data, rowIndex)
		{
			$.each($('td', row), function(colIndex){
				if(colIndex == 1)
				{
					$(this).attr('data-name', 'Name');
					$(this).attr('class', 'Name');
					$(this).attr('data-type', 'text');
					$(this).attr('data-pk', data[0]);
				}
				if(colIndex == 2)
				{
					$(this).attr('data-name', 'Subscribed_Capital');
					$(this).attr('class', 'Subscribed_Capital');
					$(this).attr('data-type', 'number');
					$(this).attr('data-pk', data[0]);
				}
				if(colIndex == 3)
				{
					$(this).attr('data-name', 'Capital_build-up');
					$(this).attr('class', 'Capital_build-up');
					$(this).attr('data-type', 'number');
					$(this).attr('data-pk', data[0]);
				}
        if(colIndex == 4)
				{
					$(this).attr('data-name', 'Saving_Fund');
					$(this).attr('class', 'Saving_Fund');
					$(this).attr('data-type', 'number');
					$(this).attr('data-pk', data[0]);
				}
			});
		}
	});

	$('#members_data').editable({
		container:'body',
		selector:'td.Name',
		url:'update.php',
		title:'Name',
		type:'POST',
		validate:function(value){
			if($.trim(value) == '')
			{
				return 'This field is required';
			}
		}
	});

	$('#members_data').editable({
		container:'body',
		selector:'td.Subscribed_Capital',
		url:'update.php',
		title:'Subscribed Capital',
		type:'POST',
		validate:function(value){
			if($.trim(value) == '')
			{
				return 'This field is required';
			}
		}
	});
  $('#members_data').editable({
		container:'body',
		selector:'td.Capital_Build-up',
		url:'update.php',
		title:'Capital Build-up',
		type:'POST',
		validate:function(value){
			if($.trim(value) == '')
			{
				return 'This field is required';
			}
		}
	});

	$('#members_data').editable({
		container:'body',
		selector:'td.Saving_Fund',
		url:'update.php',
		title:'Savings Fund',
		type:'POST',
		validate:function(value){
			if($.trim(value) == '')
			{
				return 'This field is required';
			}
		}
	});
});	
</script>

	</body>
</html>

