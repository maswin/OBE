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