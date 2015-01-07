<html>
	<head>
		<title>View Courses</title>
		<?php include_once("header.php"); ?>
	<head>
	<body>
		<div class="container" >
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <b><a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?> </b>
        </span>

        <span class="clearfix"></span>
      </div>
	
      <div class="panel-body" >
	<form method="POST" class="form-horizontal" role="form" action="#">
        <table id="user-listing" class="table table-hover">
	<tr>
		<th >Program</th>
		<th >Delete</th>
	</tr>

          <tr>
            <td class="col-md-2">
              <a href="viewSubjects.php?dept_name=<?php echo $_GET['dept_name']; ?>&prog_name=<?php echo $_GET['prog_name']; ?>&sub_name=Subject 1">Program 1</a>
            </td>
		<td class="col-md-3">
		<a href="#"><button type="button" class="btn btn-danger btn-primary" name="submit">Delete</button></a>
		</td>
          </tr>
		<tr>
		<td class="col-md-2"><input type = "text" name="program" value="" placeholder="Add new Program"></td> 
		<td class="col-md-3"><button type="button" class="btn btn-success btn-primary" name="submit">Add &nbsp;</button></td>
		</tr>
        </table>
	</form>
	<?php include_once("footer.php"); ?>
      </div>
    </div>
	</div>
	</body>
</html>
