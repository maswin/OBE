<html>
<head>
<title>Report</title>
		<?php include_once("header.php"); ?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
</head>
	<body>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <h3><b>Report</b></h3>
        </span>

        <span class="clearfix"></span>
      </div>

      <div class="panel-body">
	

                <center>

                    
                    <table id="CO_percentage" class="table table-bordered">
                        <?php
                        include 'mapping.php';

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "course";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM outcome";
                        $result = mysqli_query($conn, $sql);


                        for ($var = 1; $var <= 12; $var++) {
                            $attribute = "PO" . $var;

                            $numerator[$attribute] = 0.0;
                            $creditSum[$attribute] = 0;
                        }

                        while ($row = mysqli_fetch_assoc($result)) {

                            $numerator['PO1'] = $numerator['PO1'] + 1.0 * getValue($row["PO1"]) * $row["COAttainment"];
                            $creditSum['PO1'] = $creditSum['PO1'] + getValue($row["PO1"]);


                            for ($var = 1; $var <= 12; $var++) {
                                $attribute = "PO" . $var;
                                $numerator[$attribute] = $numerator[$attribute] + 1.0 * getValue($row[$attribute]) * $row["COAttainment"];
                                $creditSum[$attribute] = $creditSum[$attribute] + getValue($row[$attribute]);
                            }
                        }

                        
                        for ($var = 1; $var <= 12; $var++) {
                            $attribute = "PO" . $var;
                            echo "<tr><td>" . $attribute . "</td>";
                            if($creditSum[$attribute] == 0){
                                echo "<td>NA</td></tr>";
                            }else{
                                 $res = $numerator[$attribute] / (1.0 * $creditSum[$attribute]);
                            echo "<td>" . number_format($res, 2, '.', '') . "</td></tr>";
                            }
                           
                        }
                        echo "</table>";
                        mysqli_close($conn);
                        ?>
                    </div>



                </center>

            </div>
        </div>
    </body>
</html>

