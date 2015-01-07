<html>
	<head>
		<title>Framework</title>
		<?php include_once("header.php"); ?>
	<head>
	<body>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <b>Title</b>
        </span>

        <span class="clearfix"></span>
      </div>

      <div class="panel-body">
	<form method="POST" class="form-horizontal" role="form" action="#">
        <table id="user-listing" class="table table-hover">
          <tr>
            <td class="col-md-2">
              Name
            </td>
            <td class="col-md-2">
              <input type = "text" id="courseId" value="" placeholder="Input">
            </td>
          </tr>
		
	<tr>
            <td class="col-md-2" colspan="2">
              <button type="submit" class="btn btn-default btn-primary"
                        name="submit">Submit</button>
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
