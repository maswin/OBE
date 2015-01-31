<!--
	Author : Aswin
	Email : maswin.cool@gmail.com
	Note : Never use {{}} Markers within ng-click attributes - burnt away all my time :p
-->
<html ng-app="">
	<head>
		<base href="http://localhost/obe/viewPrograms.php?dept_name=CSE" />
		<title>View Departments</title>
		<?php include_once("header.php"); ?>
	<head>
	<body ng-controller="departmentController">
		<div>
		<div class="container" >
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
			<b>
				<ol class="breadcrumb">
					<li>
						<a href="viewDepartments.php" class="active">Departments</a>
					</li>
				</ol>
				
			</b>
        </span>
		<span class="pull-right">
			<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="addDepartment('new')">
				<span class="glyphicon glyphicon-plus aria-hidden="true" ></span>
				</button>
		</span>
		
        <span class="clearfix"></span>
      </div>
	
      <div class="panel-body" >
	<form method="POST" class="form-horizontal" role="form" action="#">
		<span ng-show="edit">
		<div class="row">
			<div class="col-lg-3">
				<input type = "text" name="program" value="" placeholder="Department ID" class="form-control" ng-model="dID">
			</div>
			<div class="col-lg-6">
				<input type = "text" name="program" value="" placeholder="Department" class="form-control" ng-model="dName">
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success" aria-label="Left Align" ng-disabled="error || incomplete" ng-click="saveNewDepartment()">Add</button>
			</div>
		</div>
		<br><br>
		</span>
		<span ng-hide="edit"></span>
	
        <table id="user-listing" class="table table-hover">
	<tr>
		<th>Department ID</th>
		<th>Department</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
          <tr ng-repeat="dept in departments">
		 
			<td class="col-md-1" ng-hide="dept.dEdit">
				  <a href="viewPrograms.php?dept_name={{ dept.dID }}">{{ dept.dID }}</a>
			</td>
			<td class="col-md-5" ng-hide="dept.dEdit">
			  <a href="viewPrograms.php?dept_name={{ dept.dID }}">{{ dept.dName }}</a>
			</td>
			<td class="col-md-1" ng-hide="dept.dEdit">
			<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="editDepartment(dept)" >
				<span class="glyphicon glyphicon-pencil aria-hidden="true"></span>
			</button>
			</td>
			
			<td class="col-md-1" ng-show="dept.dEdit">
				 <input type = "text" name="dID"  class="form-control" ng-model="dept.dID">
			</td>
			<td class="col-md-5" ng-show="dept.dEdit">
				<input type = "text" name="dName"  class="form-control" ng-model="dept.dName">
			</td>
			<td class="col-md-1" ng-show="dept.dEdit">
				<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="saveDepartment(dept)" ng-disabled="incompleteE">
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
	</form>
	<?php include_once("footer.php"); ?>
      </div>
    </div>
	</div>
	</div>
	</body>
</html>
