<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>

<?php if ($admin['message_view']) { ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include '../includes/navbar.php'; ?>
      <?php include '../includes/menubar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Message
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Message</li>
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
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body">
                    <form action="message_edit.php" method="post">
                      <?php
                      try {
                        $stmt = $conn->prepare("SELECT * FROM message");
                        $stmt->execute();
                        foreach ($stmt as $row) { ?>
                          <h2>MAIN MESSAGE</h2>
                          <textarea class="form-control"  name="main" rols="1000" cols="90"><?php echo $row['main']; ?></textarea>
                          <h2>RECHARGE MESSAGE</h2>
                          <textarea class="form-control"  name="recharge" rols="1000" cols="90"><?php echo $row['recharge']; ?></textarea>
                          <h2>WITHDRAW MESSAGE</h2>
                          <textarea class="form-control"  name="withdraw" rols="1000" cols="90"><?php echo $row['withdraw']; ?></textarea>
                          <h2>Minimum Withdraw</h2>
                          <input class="form-control"  type="number" name="minimum_withdraw" value="<?php echo $row['minimum_withdraw']; ?>" >
                         <h2>Coins To New users</h2>
                          <input class="form-control"  type="number" name="new_login" value="<?php echo $row['new_login']; ?>" >
                          <h2>Admin Phone Number</h2>
                          <input class="form-control"  type="number" name="adminphone" value="<?php echo $row['adminphone']; ?>" >
                     <?php
                        }
                      } catch (PDOException $e) {
                        echo $e->getMessage();
                      }

                      $pdo->close(); ?>
                      <br> <br>
                      <input class="form-control"  style="background-color:greenyellow" type="submit" name="save" value="Save" class='btn btn-success btn-sm edit btn-flat'>
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
<?php include '../includes/req_end.php'; ?>
</html>