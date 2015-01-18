<!--
	Author : Aswin
	Email : maswin.cool@gmail.com
	Note : 
-->
<html ng-app="">
	<head>
		<title>View Course : <?php echo $_GET['subject_name'] ?> </title>
		<?php include_once("header.php"); ?>
	<head>
	<body ng-controller="SubjectController">
		<div>
		<div class="container" >
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?> >> <?php echo "<a href='viewSubjects.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>".$_GET['sub_name']."</a>" ?>
			</b>
        </span>
		<span class="pull-right">
			
		</span>
        <span class="clearfix"></span>
      </div>
		
      <div class="panel-body" >
		<div class="panel panel-default">
		
		<div class="panel-body">
		 Year Viewed : 2014
		</div>
		</div>
		
		<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>CO PO Mapping <span class="badge">{{ COPOInfo.length }}</span></b>
		  </span>
		  <span class="pull-right">
			<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="addCOPOInfo('new')">
				<span class="glyphicon glyphicon-plus aria-hidden="true" ></span>
				</button>
			<button type="button" class="btn btn-danger" aria-label="Left Align" ng-click="delCOPOInfo('new')">
				<span class="glyphicon glyphicon-minus aria-hidden="true" ></span>
				</button>
			</span>
		  <span class="clearfix"></span>
		  </div>
		  <div class="panel-body">
			<div ng-init="i=0"></div>
			<div ng-if="POCount == 0">
				<!-- If block -->
				Please Enter PO Details !!!
			</div>
			<div ng-if="POCount != 0">
				<!-- Else Block -->
				<table id="user-listing" class="table table-hover">
				<thead>				
					<tr >	
						<th class="col-md-1">---</th>
						<th class="col-md-2">CO Description</th>
						<th ng-repeat="i in range" class="col-md-1"> PO {{i}} </th>
						<th>Edit</th>
					</tr>
				</thead>
				<tr ng-repeat="copo in COPOInfo">
					<td class="col-md-1">{{copo.id}}</td>
					<td class="col-md-2" ng-hide="copo.cEdit">{{copo.description}}</td>
					<td ng-repeat="m in copo.map track by $index" class="col-md-1" ng-hide="copo.cEdit">
						<span ng-if="m == 'Z'">-</span>
						<span ng-if="m != 'Z'">{{m}}</span>
					</td>
					<td class="col-md-1" ng-hide="copo.cEdit">
						<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="editCOPOInfo(copo)" >
						<span class="glyphicon glyphicon-pencil aria-hidden="true"></span>
						</button>
					</td>
					<td class="col-md-2" ng-show="copo.cEdit">
						 <input type = "text" name="desc"  class="form-control" ng-model="copo.description">
					</td>
					<td ng-repeat="m in copo.map track by $index" class="col-md-1" ng-show="copo.cEdit">
						<select class="form-control" ng-model="m">
						<option value="Z">-</option>
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="W">W</option>
						</select>
					</td>
					<td class="col-md-1" ng-show="copo.cEdit">
						<button type="button" class="btn btn-default" aria-label="Left Align" ng-click="saveCOPOInfo(copo)" >
						<span class="glyphicon glyphicon-ok aria-hidden="true"></span>
						</button>
					</td>
				</tr>
				</table>
			</div>
			
		  </div>
<center>
<a class="btn btn-default" href="COAssess.php" role="button">Assessment</a>


<a class="btn btn-default" href="report.php" role="button">Report</a>

</center>
<br>
		</div>
	<?php include_once("footer.php"); ?>
      </div>
    </div>
	</div>
	</div>
	</body>
</html>
