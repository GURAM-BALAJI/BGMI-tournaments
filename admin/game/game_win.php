<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['game_view']){
    if(isset($_GET['id']))
    $gameid=$_GET['id'];
    else
    header('location: game.php');
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Winner
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Winner</li>
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
          <h1>
       NAME: <?php echo $_GET['name'];?>
      </h1>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                <th>#</th>
                  <th>USER ID</th>
                  <th>PLAYER IDS</th>
                  <th>Date & Time</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    $slno=1;
                    try{
                      $stmt = $conn->prepare("SELECT * FROM player WHERE player_game_id='$gameid' AND player_completed='2'");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['player_ss'])) ? '../../winner_screenshort/' . $row['player_ss'] : '../../winner_screenshort/no_image.png';
                       echo "
                          <tr>
                            <td>".$slno++."</td>
                            <td>
                            <a href='view_winner_ss.php?image=$image'>
                            ".$row['player_user_id']."
                            <img src='" . $image . "' height='40px' width='40px'>
                            </a></td>
                            <td>".$row['player_ids']."</td>
                            <td>".$row['player_joined_date_time'] ."</td>
                        </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
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
<?php include '../includes/req_end.php'; ?>
</html>