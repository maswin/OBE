<html>
	<head>
		<title>Add Subject</title>
		<?php include_once("header.php"); ?>
	<head>
	<body>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <b>Enter Subject Details</b>
        </span>

        <span class="clearfix"></span>
      </div>

      <div class="panel-body">
	<form method="POST" class="form-horizontal" role="form" action="getSubjectDetails_Action.php">
        <table id="user-listing" class="table table-hover" >
          <tr>
            <td class="col-md-2">
              Subject Code
            </td>
            <td class="col-md-2">
              <input type = "text" name="courseId" value="" placeholder="ID">
            </td>
          </tr>
	
	<tr>
            <td class="col-md-2">
              Course Name
            </td>
            <td class="col-md-2">
              <input type = "text" name="courseName" value="" placeholder="Course Name">
            </td>
          </tr><tr>
            <td class="col-md-2">
              Course Year
            </td>
            <td class="col-md-2">
              <input type = "text" name="courseYear" value="" placeholder="Course Year">
            </td>
          </tr>
	
	<tr>
            <td class="col-md-2" colspan="2">
              <button type="submit" class="btn btn-default btn-primary"
                        name="submit">Add Subject</button>
            </td>
            
          </tr>
        </table>
	</form>
	<?php if(isset($_GET["err_msg"])){ ?>
          <div class="row">
            <div class="alert alert-danger text-center">
              <?php echo $_GET["err_msg"]; ?>
            </div>
            <br/>
          </div>
        <?php } ?>
	<?php if(isset($_GET["succ_msg"])){ ?>
          <div class="row">
            <div class="alert alert-success text-center">
              <?php echo $_GET["succ_msg"]; ?>
            </div>
            <br/>
          </div>
        <?php } ?>
      </div>
    </div>
	</div>
	</body>
</html>
