<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['add_coins_view']) { ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include '../includes/navbar.php'; ?>
            <?php include '../includes/menubar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Added Coins
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Added Coins</li>
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
                    <form method="get">
                <div class="form-group">
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="date" id="date" required>
                  </div>
                  <div class="col-sm-4">
                    <input type="submit" class="form-control-static" name="submit" id="submit" value=" Submit ">
                  </div>
                </div>
              </form>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered">
                                            <thead>
                                            <th>#</th>
                                                <th>USER ID</th>
                                                <th>TYPE</th>
                                                <th>UTR</th>
                                                <th>AMOUNT</th>
                                                <th>DATE</th>
                                
                                            </thead>
                                            <tbody>
                                                <?php
                                                 date_default_timezone_set('Asia/Kolkata');
                                                 if (isset($_GET['submit']))
                                                   $today = $_GET['date'];
                                                 else
                                                   $today = date("Y-m-d");
                                                $conn = $pdo->open();
                                                try {
                                                    $stmt = $conn->prepare("SELECT * FROM add_coins WHERE  add_coins_date='$today' AND add_coins_task='1'  ORDER BY add_coins.add_coins_id DESC ");
                                                    $stmt->execute();
                                                    $slno=0;
                                                    foreach ($stmt as $row) {
                                                        if($row['add_coins_delete']==1)
                                                        $color='red';
                                                        else
                                                        $color='green';
                                                        $slno++;
                                                        
                                                        echo "<tr style='background-color:$color;'>";
                                                        echo "<td>$slno</td>";
                                                        echo "<td>" . $row['add_coins_user_id'] . "</td>";
                                                        echo "<td>" . $row['add_coins_type'] . "</td>";
                                                        echo "<td>" . $row['add_coins_utr'] . "</td>";
                                                        echo "<td>" . $row['add_coins_amount'] . "</td>";
                                                        echo "<td>" . $row['add_coins_request_date'] . "</td>";
                                                       echo "</tr>";
                                                      
                                                    }
                                                } catch (PDOException $e) {
                                                    echo $e->getMessage();
                                                }

                                                $pdo->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
        <!-- ./wrapper -->

        <?php include '../includes/scripts.php'; ?>
       
    </body>
<?php } ?>

</html>