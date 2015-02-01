<html ng-app="">
	<head>
		<title>Assessment tool</title>
		<?php include_once("header.php"); ?>
	
	<script language="javascript">
	function addRow(tableID){
		var table=document.getElementById(tableID);
		var rowCount=table.rows.length;
		var row=table.insertRow(rowCount);
		var colCount=table.rows[0].cells.length;
		for(var i=0;i<colCount;i++){
			var newcell=row.insertCell(i);
			newcell.innerHTML=table.rows[1].cells[i].innerHTML;
			switch(newcell.childNodes[1].type){
				case"text":newcell.childNodes[1].value="";
				break;
				case"checkbox":newcell.childNodes[1].checked=false;
				break;
				case"select-one":newcell.childNodes[1].selectedIndex=0;
				break;
			}
		}
	}
	</script>
	</head>
	<body>
		<div>
		<div class="container" >
		<div class="panel panel-default">
     <div class="panel-heading">
        <span class="pull-left">
			<b>
				<a href="viewDepartments.php">Departments</a> >> <?php echo "<a href='viewPrograms.php?dept_name=".$_GET['dept_name']."'>".$_GET['dept_name']."</a>" ?> >> <?php echo "<a href='viewCourses.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."'>".$_GET['prog_name']."</a>" ?> >> <?php echo "<a href='viewSubjects.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>".$_GET['sub_name']."</a>" ?> >> <?php echo "<a href='COAssess.php?dept_name=".$_GET['dept_name']."&prog_name=".$_GET['prog_name']."&sub_name=".$_GET['sub_name']."'>Assessment</a>"?>
			</b>
        </span>
		<span class="pull-right">
			
		</span>
        <span class="clearfix"></span>
      </div>
	
		
       
      
	<form method="POST" class="form-horizontal" role="form" action="copercentage.php">
		
				
		
	
		<div class="panel panel-default">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Assessment Tools</b>
		  </span>
		  <span class="pull-right">
			<button type="button" class="btn btn-success" aria-label="Left Align" onclick="addRow('CO_list')">
				<span class="glyphicon glyphicon-plus aria-hidden="true" ></span>
			</button>
			<button type="button" class="btn btn-danger" aria-label="Left Align" onclick="">
				<span class="glyphicon glyphicon-minus aria-hidden="true" ></span>
			</button>
		  </span>
		  
		
		<span class="clearfix"></span>
		</div>
		
		<div class="panel-body">
	
	
	<table id="CO_list" class="table table-hover" style="text-align:center;content-align:centers">
	<tr>
	<th>Tool</th>
	<th>Q.No</th>
	<th>Sub Qn. </th>
	<th>Description</th>
        <th>Total Students</th>
        <th>Correct Responses</th>
        <th>Dependency</th>
        <tr>
		<td class="col-md-2">
		<select name="tool" class="form-control">
		<option value="assign">Assignment</option>
		<option value="int">CAT</option>
		<option value="project">Project</option>
		</select>
		</td>
		<td class="col-md-1">
		<select name="que" class="form-control">
		<option value="a1">A1</option>
		<option value="b1">B1</option>
		<option value="c1">C1</option>
		</select>	
		</td>
		<td class="col-md-1">
		<select name="subque" class="form-control">
		<option value="a11">1</option>
		<option value="b12">2</option>
		<option value="c13">3</option>
		</select>	
		</td>
		 <td class="col-md-3">
		<textarea rows="4" cols="25" name="descr" class="form-control">
		</textarea>
		</td>	
            <td class="col-md-1">
		<input type="text" name="tot" size="10" class="form-control"></input>
		</td>		
            <td class="col-md-1">
		<input type="text" name="cor" size="10" class="form-control"></input>
		</td>
            <td class="col-md-3">
                
                <input type="checkbox" name="co" value="co1" > CO1 
                <input type="checkbox" name="co" value="co2" > CO2
                <input type="checkbox" name="co" value="co3" > CO3
		
            </td>
                    
                    
		</tr>
		

            

            </table>
<br>
<center>

<input class="btn btn-primary" type="submit" value="update"></input>

<a class="btn btn-default" href="copercentage.php?dept_name=<?php echo $_GET["dept_name"];?>&prog_name=<?php echo $_GET["prog_name"];?>&sub_name=<?php echo $_GET["sub_name"];?>" role="button">Submit</a>

</center>
		</form>
