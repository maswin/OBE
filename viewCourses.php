<!--
	Author : Aswin
	Email : maswin.cool@gmail.com
	Note : 
-->
<html ng-app="">
	<head>
		<title>View Courses</title>
		<?php include_once("header.php"); ?>
	<head>
	<body ng-controller="CourseController">
		<div>
		<div class="container" >
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?>	
			</b>
        </span>
		
        <span class="clearfix"></span>
      </div>
	
      <div class="panel-body" >
	<form method="POST" class="form-horizontal" role="form" action="#">
		
				<div class="panel panel-default">
		
		<div class="panel-body">
		 Year Viewed : 2014
		</div>
		
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Program Outcome <span class="badge">{{ POInfo.length }}</span></b>
		  </span>
		  <span class="pull-right">
			<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="addPOInfo('new')">
				<span class="glyphicon glyphicon-plus aria-hidden="true" ></span>
				</button>
			<button type="button" class="btn btn-danger" aria-label="Left Align" ng-click="delPOInfo('new')">
				<span class="glyphicon glyphicon-minus aria-hidden="true" ></span>
				</button>
			</span>
		  <span class="clearfix"></span>
		  </div>
		  <div class="panel-body">
		  <table id="user-listing" class="table table-hover">
			<tr>
				<th>PO</th>
				<th>Description</th>
				<th>Edit</th>
			</tr>
			<tr ng-repeat="po in POInfo">
				<td class="col-md-1"> {{po.id}} </td>
				<td ng-hide="po.pEdit" class="col-md-5"> {{po.description}}</td>
				<td ng-hide="po.pEdit" class="col-md-1">  
					<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="editPOInfo(po)" >
						<span class="glyphicon glyphicon-pencil aria-hidden="true"></span>
					</button>	
				</td>
				<td class="col-md-5" ng-show="po.pEdit" class="col-md-5">
					<input type = "text" name="description"  class="form-control" ng-model="po.description">
				</td>
				<td ng-show="po.pEdit" class="col-md-1">  
					<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="savePOInfo(po)" >
						<span class="glyphicon glyphicon-ok aria-hidden="true"></span>
					</button>	
				</td>
			</tr>
		  </table>
		  </div>
		
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Course Details</b>
		  </span>
		  <span class="pull-right">
			<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="addCourse('new')">
				<span class="glyphicon glyphicon-plus aria-hidden="true" ></span>
				</button>
			</span>
		  <span class="clearfix"></span>
		  </div>
		  <div class="panel-body">
		  <span ng-show="edit">
		<div class="row">
			<div class="col-lg-3">
				<input type = "text" name="Course" value="" placeholder="Course ID" class="form-control" ng-model="cID">
			</div>
			<div class="col-lg-6">
				<input type = "text" name="Course" value="" placeholder="Course" class="form-control" ng-model="cName">
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success" aria-label="Left Align" ng-disabled="error || incomplete" ng-click="saveNewCourse()">Add</button>
			</div>
		</div>
		<br><br>
		</span>
		<span ng-hide="edit"></span>
		
			<table id="user-listing" class="table table-hover">
	<tr>
		<th>Course ID</th>
		<th>Course</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
          <tr ng-repeat="course in Courses">
		 
			<td class="col-md-1" ng-hide="course.dEdit">
				  <a href="viewSubjects.php?sub_name={{ course.cID }}&dept_name=<?php echo $_GET["dept_name"];?>&prog_name=<?php echo $_GET["prog_name"];?>">{{ course.cID }}</a>
			</td>
			<td class="col-md-5" ng-hide="course.dEdit">
			  <a href="viewSubjects.php?sub_name={{ course.cID }}&dept_name=<?php echo $_GET["dept_name"];?>&prog_name=<?php echo $_GET["prog_name"];?>">{{ course.cName }}</a>
			</td>
			<td class="col-md-1" ng-hide="course.dEdit">
			<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="editCourse(course)" >
				<span class="glyphicon glyphicon-pencil aria-hidden="true"></span>
			</button>
			</td>
			
			<td class="col-md-1" ng-show="course.dEdit">
				 <input type = "text" name="cID"  class="form-control" ng-model="course.cID">
			</td>
			<td class="col-md-5" ng-show="course.dEdit">
				<input type = "text" name="cName"  class="form-control" ng-model="course.cName">
			</td>
			<td class="col-md-1" ng-show="course.dEdit">
				<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="saveCourse(course)" ng-disabled="incompleteE">
				<span class="glyphicon glyphicon-ok aria-hidden="true"></span>
				</button>
			</td>
			
			<td class="col-md-1">
				<button type="button" class="btn btn-danger" aria-label="Left Align" >
				<span class="glyphicon glyphicon-trash aria-hidden="true"></span>
				</button>	
			</td>
		 
          </tr>
		
        </table>
		  </div>
		</div>
        
	</form>
	<?php include_once("footer.php"); ?>
      </div>
    </div>
	</div>
	</div>
	</body>
</html>
