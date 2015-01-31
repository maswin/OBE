<html>
	<head>
	
		<!-- Author : Aswin email : maswin.cool@gmail.com -->
		
		<!-- Nav Bar - Bootstrap requires this jquery.js - Never ever miss this. Note : place it before bootstrap.js (Else will cause hell lot of problems :p ) -->
		<script src="jQuery_plugin/jquery-ui-1.10.4.custom/js/jquery-1.10.2.js"></script>
		 
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"> -->

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- <script src="bootstrap/js/bootstrap.js"></script>	-->
		
		<!-- Angular JS -->
		<script src="angularJS/angular.min.js"></script>
		
		<!-- My JS Scripts -->
		<script src="js/angularJSScripts.js"></script>
	
		
	<head>
	<body>
		<div metal:fill-slot="content">

    <div class="container">
      <div id="page-header" class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle"
                  data-toggle="collapse" data-target="#header-nav-collapse-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"
             tal:attributes="#">Outcome Based Education</a>
        </div>

        <div class="navbar-collapse collapse" id="header-nav-collapse-menu">
          <ul class="navbar-nav nav navbar-right">
            <li><a href="viewDepartments.php">View Departments</a></li>
          </ul>
        </div>
      </div>
    </div>
	</body>
</html>	

