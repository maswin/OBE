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
	<body ng-controller="AssessmentController">
		<div>
		<div class="container" >
		<div class="panel panel-default">
     
        <span class="clearfix"></span>
      </div>
	
		
       
      
	<form method="POST" class="form-horizontal" role="form" action="copercentage.php">
		
				
		
	
		<div class="panel panel-info">
		  <div class="panel-heading">
		  <span class="pull-left">
		  <b>Assessment Tools</b>
		  </span>
		  
		<span class="clearfix"></span>
		</div>
		
		 <div class="panel-body">
	
	
	<table id="CO_list" class="table table-hover">
	<tr>
	<th>Tool</th>
	<th>Q.No</th>
	<th>Sub Qn. </th>
	<th>Description</th>
        <th>Total Students</th>
        <th>Correct Responses</th>
        <th>Dependency</th>
        <tr>
		<td>
		<select name="tool">
		<option value="assign">Assignment</option>
		<option value="int">CAT</option>
		<option value="project">Project</option>
		</select>
		</td>
		<td>
		<select name="que">
		<option value="a1">A1</option>
		<option value="b1">B1</option>
		<option value="c1">C1</option>
		</select>	
		</td>
		<td>
		<select name="subque">
		<option value="a11">1</option>
		<option value="b12">2</option>
		<option value="c13">3</option>
		</select>	
		</td>
		 <td>
		<textarea rows="4" cols="25" name="descr">
		</textarea>
		</td>	
            <td>
		<input type="text" name="tot" size="10"></input>
		</td>		
            <td>
		<input type="text" name="cor" size="10"></input>
		</td>
            <td>
                
                <input type="checkbox"> CO1 
                <input type="checkbox" name="co" value="co2"> CO2
                <input type="checkbox" name="co" value="co13"> CO3
		
            </td>
                    
                    
		</tr>
		

            

            </table>
<br>
<center>
<input class="btn btn-default" type="button" value="Add Row" onclick="addRow('CO_list')">
<input class="btn btn-default" type="submit"></input>
</center>
		</form>
