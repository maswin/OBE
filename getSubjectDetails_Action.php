<?php
	if(isset($_POST["courseId"]) AND isset($_POST["courseName"]) AND isset($_POST["courseYear"]) ){
		include_once("connection.php");
		$qry = "INSERT INTO `feedback`.`subject_info` (`subject_id` ,`subject_code` ,`course_name` ,`course_year`)VALUES (NULL , '".$_POST["courseId"]."', '".$_POST["courseName"]."', '".$_POST["courseYear"]."')";
		echo $qry;
		mysqli_query($con,$qry);
		header('Location: getSubjectDetails.php?succ_msg=Subject Added Successfully');

	}else{
		header('Location: getSubjectDetails.php?err_msg=Enter All Details');
	}
?>
