<?php
	if(isset($_GET["co_count"]) AND isset($_GET["po_count"]) ){
		echo "<table class='table table-hover'>";
		
		for ($x=0; $x<=$_GET["co_count"]; $x++) {
  			echo "<tr>";
			if($x != 0 ){
				echo "<th>CO".$x."</th>";
			}else{
				echo "<th>----</th>";
			}
			for ($y=0; $y<$_GET["po_count"]; $y++) {
				if($x == 0){
					if($y == $_GET["po_count"]){
						echo "<th>CO Attainment</th>";
					}else{
						echo "<th>PO".$y."</th>";
					}
				}else{
					if($y == $_GET["po_count"]){
						echo "<td><input type='text' name='co_goal_value".$x."'></td>";
					}else{
					echo "<td><select name = 'copo_id".$x.$y."'><option value='0'>--</option><option value='1'>S</option><option value='2'>M</option><option value='3'>W</option></select></td>";
					}
				}
			}
			
			echo "</tr>";
		} 
		
		echo "</table>";
		echo '<button type="button" class="btn btn-success btn-primary" name="submit" >Submit</button>';
	}
?>
