<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php if($admin['withdraw_view']){?>
  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Withdrawn
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active"> Withdrawn View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
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
                 
                  <?php
                    $conn = $pdo->open();
$print=0;
                    try{
                      $stmt = $conn->prepare("SELECT * FROM withdraw left join users on user_id=withdraw_user_id left join admin on withdrawn_by=admin_id WHERE withdrawn=1 ORDER BY withdraw_id DESC");
                      $stmt->execute();
                      $slno=1;
                      foreach($stmt as $row){
                                if($print==0){
                              echo "<table id='example1' class='table table-bordered'>
                <thead>
                <th>#</th>
                  <th>Name</th>
                  <th>type</th>
                  <th>Phone</th>
                  <th>Withdrawn Amount</th>
                  <th>Withdrawn By</th>
                  <th>TIME</th>
                     
                </thead>
                ";
                              $print=1;
                          }
                        echo "
                          <tr>
                          <td>".$slno++."</td>
                            <td>".$row['first_name']."</td>
                            <td>" . $row['withdraw_type'] . "</td>
                              <td>".$row['withdraw_phone']."</td>
                                <td>".$row['withdraw_amount']."</td>
                                  <td>".$row['admin_name']."</td>
                                    <td>".$row['withdraw_request_date']."</td>
                            
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
echo "</tbody>
              </table>";
                    $pdo->close(); ?>
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
