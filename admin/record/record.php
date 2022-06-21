<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['record_view']) { ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include '../includes/navbar.php'; ?>
      <?php include '../includes/menubar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Record
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Record</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php
          if (isset($_SESSION['error'])) {
            echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
            unset($_SESSION['error']);
          }
          if (isset($_SESSION['success'])) {
            echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
            unset($_SESSION['success']);
          }
          ?>
          <div class="panel panel-default" style="overflow-x:auto;">

            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <form class="form-group-lg" action="record_view.php" method="post">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">User Name:</label>
                        <div class="col-sm-8">
                          <select name="user_id" class="form-control">
                          <option value="">SELECT USER NAME</option>
                          <?php 
                           $stmt = $conn->prepare("SELECT * FROM users");
                           $stmt->execute();
                           foreach($stmt as $row){
                           echo "<option value='".$row['user_id']."'>".$row['first_name']."  (".$row['user_id'].")</option>";
                          }
                          ?>
                          </select>
                        </div>
                      </div>              
                      <div class="form-group">
                        <label class="col-sm-4 control-label">TYPE:</label>
                        <div class="col-sm-8">
                          <select name="TYPE_ACTION" class="form-control" >
                          <option value="">SELECT PLAY/TRANSACTION LIST</option>
                          <option value="0">PLAY LIST</option>
                          <option value="1">TRANSACTION LIST</option>
                      
                          </select>
                        </div>
                      </div>     
                      <div class="col-sm-8">
                        <input type="submit" class="form-control-static" name="submit" id="submit" value=" Submit ">
                      </div>
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

      </div>

    </div>
    <?php include '../includes/scripts.php'; ?>
    <!-- ./wrapper -->
  </body>
<?php } ?>

</html>