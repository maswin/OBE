<html>
	<head>
		<title>CO PO Details : Select Subject</title>
		<?php include_once("header.php"); ?>
		<script>
		function getCourse()
		{
			var xmlhttp;
			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  			        xmlhttp=new XMLHttpRequest();
 			}
			else
  			{// code for IE6, IE5
 				 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
			xmlhttp.onreadystatechange=function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				{
    				var text=xmlhttp.responseText;
				var list=text.split(" "); var courseHtml;
				for(var i=0; i<list.length; i++)
				{
					courseHtml+=("<option value='"+list[i]+"'>"+list[i]+"</option>");
				}
				document.getElementById('course').innerHTML=courseHtml;
				}
  			}
			xmlhttp.open("GET","ajax_course.php",true);
			xmlhttp.send();
		}
		function getProgram()
		{
			var xmlhttp;
			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  			        xmlhttp=new XMLHttpRequest();
 			}
			else
  			{// code for IE6, IE5
 				 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
			xmlhttp.onreadystatechange=function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				{
    				var text=xmlhttp.responseText;
				var list=text.split(" "); var programHtml;
				for(var i=0; i<list.length; i++)
				{
					programHtml+=("<option value='"+list[i]+"'>"+list[i]+"</option>");
					

    				}
				document.getElementById('program').innerHTML=programHtml;
				}
  			}
			xmlhttp.open("GET","ajax_program.php",true);
			xmlhttp.send();
		}
  	</script>
	<head>
	<body>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <b>CO PO Details : Select Subject</b>
        </span>

        <span class="clearfix"></span>
      </div>

      <div class="panel-body">
	<form method="POST" class="form-horizontal" role="form" action="getCOPODetails.php?sub_id=1">
        <center>
                    <form method="post" action="poinput.php">
                        <center>
			<h3>SELECT DEPARTMENT</h3>
			    <select onchange="getCourse()" name="dept">
				<option selected disabled>Choose here</option>				
				<option value="CSE">CSE</option>
				<option value="ECE">ECE</option>
			    </select> </br><br/>
			<h3>SELECT COURSE</h3>
			    <select onchange="getProgram()" name="course" id="course">
			    <option selected disabled>Choose here</option>
			    </select></br><br/>
			<h3>SELECT PROGRAM</h3>
                            <select name="program" id="program">
				<option value=""></option>
				<option value=""></option>
			    </select>
                            </br>
                            </br>
                           
                       
            
              <button type="submit" class="btn btn-default btn-primary"
                        name="submit">Submit</button>
             </center>
	</form>
	<?php include_once("footer.php"); ?>
      </div>
    </div>
	</div>
	</body>
</html>
