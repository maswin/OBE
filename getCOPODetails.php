<html>
	<head>
		<title>CO - PO Details : <?php echo $_GET['sub_id']; ?></title>
		<?php include_once("header.php"); ?>
		<script>
		function loadCOPODoc()
		{
		var co_count = document.getElementById("CO").value;
		var po_count = document.getElementById("PO").value;
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
		    document.getElementById("contentFill").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","getCOPODetails_Ajax.php?co_count="+co_count+"&po_count="+po_count,true);
		xmlhttp.send();
		}
		</script>
	<head>
	<body>
		<div class="container">
		<div class="panel panel-default">
      <div class="panel-heading">
        <span class="pull-left">
          <b>CO PO Details : <?php echo $_GET['sub_id']; ?></b>
        </span>

        <span class="clearfix"></span>
      </div>

      <div class="panel-body">
	<form method="POST" class="form-horizontal" role="form" action="#">
        <table id="user-listing" class="table table-hover">
          <tr>
            <td class="col-md-2">
              CO Count
            </td>
            <td class="col-md-2">
              <input type = "text" id="CO" value="" placeholder="00">
            </td>
          </tr>
	<tr>
            <td class="col-md-2">
              PO Count
            </td>
            <td class="col-md-2">
              <input type = "text" id="PO" value="" placeholder="00">
            </td>
          </tr>	
	<tr>
            <td class="col-md-2" colspan="2">
              <button type="button" class="btn btn-default btn-primary"
                        name="submit" onclick="loadCOPODoc()">Submit</button>
            </td>
            
          </tr>
        </table>
	</form>
	<div id="contentFill"></div>
	<?php include_once ("footer.php"); ?>
      </div>
    </div>
	</div>
	</body>
</html>
