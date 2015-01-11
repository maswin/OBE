<!--
	Author : Aswin
	Email : maswin.cool@gmail.com
	Note : 
-->
<html ng-app="">
	<head>
		<title>View Programs</title>
		<?php include_once("header.php"); ?>
	<head>
	<body ng-controller="programController">
		<div>
		<div class="container" >
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> 				
			
			</b>
        </span>
		<span class="pull-right">
		
		
			<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="addProgram('new')">
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
				<input type = "text" name="program" value="" placeholder="Program ID" class="form-control" ng-model="pID">
			</div>
			<div class="col-lg-6">
				<input type = "text" name="program" value="" placeholder="Program" class="form-control" ng-model="pName">
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success" aria-label="Left Align" ng-disabled="error || incomplete" ng-click="saveNewProgram()">Add</button>
			</div>
		</div>
		<br><br>
		</span>
		<span ng-hide="edit"></span>
		<div class="panel panel-default">
		
		<div class="panel-body">
			<div class="dropdown">
		  <div class="form-group">
		  <div class="row">
		  <div class="col-lg-2">
		  <label for="sel1">&nbsp;&nbsp;Select Year:</label>
		  </div>
		  <div class="col-lg-2">
		  <select class="form-control" id="sel1">
			<option>2014</option>
			<option>2013</option>
			<option>2012</option>
			<option>2011</option>
		  </select>
		  </div>
		 </div>
		</div>
		</div>
		</div>
		</div>
		
	
		
        <table id="user-listing" class="table table-hover">
	<tr>
		<th>Program ID</th>
		<th>Program</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
          <tr ng-repeat="prog in Programs">
		 
			<td class="col-md-1" ng-hide="prog.dEdit">
				  <a href="viewCourses.php?prog_name={{ prog.pID }}&dept_name=<?php echo $_GET["dept_name"];?>">{{ prog.pID }}</a>
			</td>
			<td class="col-md-5" ng-hide="prog.dEdit">
			  <a href="viewCourses.php?prog_name={{ prog.pID }}&dept_name=<?php echo $_GET["dept_name"];?>">{{ prog.pName }}</a>
			</td>
			<td class="col-md-1" ng-hide="prog.dEdit">
			<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="editProgram(prog)" >
				<span class="glyphicon glyphicon-pencil aria-hidden="true"></span>
			</button>
			</td>
			
			<td class="col-md-1" ng-show="prog.dEdit">
				 <input type = "text" name="pID"  class="form-control" ng-model="prog.pID">
			</td>
			<td class="col-md-5" ng-show="prog.dEdit">
				<input type = "text" name="pName"  class="form-control" ng-model="prog.pName">
			</td>
			<td class="col-md-1" ng-show="prog.dEdit">
				<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="saveProgram(prog)" ng-disabled="incompleteE">
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
