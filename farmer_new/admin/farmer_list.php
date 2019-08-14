<!DOCTYPE html>
<html>
<?php session_start()?>
<!-- Mirrored from medialoot.com/preview/lumino/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 12:27:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Widgets</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php
        require('data_connection.php');
            $smt = $conn->prepare('SELECT * FROM `db_user_registration` WHERE   ur_grpid=2 and ur_tag=1');
            $smt->execute();
            $data = $smt->fetchAll()
        ?>
	<?php
include('includes/sidebar.php');
	?>
	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Widgets</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<!-- <div class="col-lg-12">
				<h1 class="page-header">BUYER LIST</h1>
			</div> -->
		</div><!--/.row-->
		<div class="container-fluid">
  <h2>BUYER LIST</h2>
  
<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Contact no</th>
        <th>Chilly Grade</th>
        <th>Quntity</th>
        <th>Price</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($data as $row): ?>
      <tr>
       <td><?php echo $row['ur_name']; ?></td>
        <td><?php echo $row['ur_contact']; ?></td>
        <td><?php echo $row['type_of_chilly']; ?></td>
        <td><?php echo $row['quntity']; ?></td>
        <td><?php echo $row['price']; ?></td>
        
        <td><?php 
              echo "<a href='farmer_add_list.php?eid=".$row['ur_id']."&edit=edit' rel='tooltip'onClick='(".$row['ur_id'].")'><input type='button' value='Edit Info' ckass='btn btn-primary'></button></a>"
            ?>&nbsp&nbsp&nbsp&nbsp&nbsp<?php 
              echo "<a href='farmer_edit_list.php?eid=".$row['ur_id']."&edit=edit' rel='tooltip'onClick='(".$row['ur_id'].")'><i class='fa fa-edit'></i></a>"
            ?>&nbsp&nbsp&nbsp&nbsp&nbsp<?php 
              echo "<a href='php_action_operation/delete_list.php?add=".$row['ur_id']."&edit=edit' rel='tooltip'onClick='(".$row['ur_id'].")'><i class='fa fa-close'></a>"
            ?></td>
      </tr>
    </tbody>
    <?php endforeach ?>
  </table>
</div>

</div>


		<!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>

<!-- Mirrored from medialoot.com/preview/lumino/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 12:27:42 GMT -->
</html>
