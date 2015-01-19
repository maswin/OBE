<html>
<head>
<title>Report</title>
		<?php include_once("header.php"); ?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
</head>
	<body>
	<div>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">

			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?> >> <?php echo "<a href='viewSubjects.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>".$_GET['sub_name']."</a>" ?> >> <?php echo "<a href='report.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>Report</a>"?>
			</b>
        </span>
		<span class="pull-right">
			
		</span>
          <span class="clearfix"></span></div>
	<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Report</b>
		  </span>
		  
		<span class="clearfix"></span>
		</div>
        

      <div class="panel-body">
	

                <center>

                    
                    <table id="PO_report" class="table table-bordered">
                       <tr>
	<th>PO</th>
		<th> Percentage attainment</th>
		</tr>
		</thead>
		<tr align="center">
		<td>PO1</td>
		<td>19.22</td>
		</tr>
		<tr align="center">
		<td>PO2</td>
		<td>24.33</td>
		</tr>
		<tr align="center">
		<td>PO3</td>
		<td>NA</td>
		</tr>
		<tr align="center">
		<td>PO4</td>
		<td>30</td>
		</tr>
	</body>
                    </div>



                </center>

            </div>
        </div>
    </body>
</html>

