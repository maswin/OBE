<html>
<head>
<title>COAttainment</title>	
<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
		<?php include_once("header.php"); ?>

</head>
	<body>
		<div>
		<div class="container" >
		<div class="panel panel-default">
     <div class="panel-heading">
        <span class="pull-left">
			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?> >> <?php echo "<a href='viewSubjects.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>".$_GET['sub_name']."</a>" ?> >> <?php echo "<a href='COAssess.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>Assessment</a>"?> >> <?php echo "<a href='copercentage.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>Attainment</a>"?> 
			</b>
        </span>
		<span class="pull-right">
			
		</span>
        <span class="clearfix"></span>
      </div>
	
		
       
      
	<form method="POST" class="form-horizontal" role="form" action="copercentage.php">
		
				
		
	
		<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Attainment</b>
		  </span>
		  
		<span class="clearfix"></span>
		</div>

      <div class="panel-body">
	<table id="CO_percentage" class="table table-bordered">
	<thead align="center">
	<tr>
	<th>CO</th>
		<th> Percentage attainment</th>
		</tr>
		</thead>
		<tr align="center">
		<td>CO1</td>
		<td>90</td>
		</tr>
		<tr align="center">
		<td>CO2</td>
		<td>70</td>
		</tr>
		<tr align="center">
		<td>CO3</td>
		<td>80</td>
		</tr>
	</body>
</html>