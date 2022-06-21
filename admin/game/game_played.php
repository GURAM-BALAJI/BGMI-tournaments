<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['game_view']){
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
        Completed Game
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Completed game</li>
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
              <table id="example1" class="table table-bordered">
                <thead>
                <th>#</th>
                  <th>Name</th>
                  <th>Entry Fee</th>
                  <th>Date & Time</th>
                  <th>Team</th>
                  <th>Win</th>
                  <th>Player Limit</th>
                  <th>Status</th>
                  <?php if($admin['game_edit'] || $admin['game_del']){ ?>
                  <th>Tools</th>
                <?php } ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    $slno=1;
                    try{
                      $stmt = $conn->prepare("SELECT * FROM game WHERE game_delete='0' AND game_completed='1'");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $status = ($row['game_status']) ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Not Active</span>';
                        $active = (!$row['game_status']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['game_id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#not_activate" class="status" data-toggle="modal" data-id="'.$row['game_id'].'"><i class="fa fa-check-square-o"></i></a></span>';
                        echo "
                          <tr>
                          <td>".$slno++."</td>
                            <td>".$row['game_name']."</td>
                            <td>".$row['game_amount']."</td>
                            <td>".$row['game_date'] .' '. $row['game_time']."</td>
                            <td>".$row['game_team_numbers']."</td>
                            <td>".$row['game_win_amount']."</td>
                            <td>".$row['game_team_limit']."</td>";
                            echo "<td>
                            $status";
                        if($admin['game_edit'])
                            echo "$active";
                         echo "</td>";
                          if($admin['game_edit'] || $admin['game_del'])
                          echo "<td>";
                          if($admin['game_edit']){
                            echo "<a href='game_win.php?id=".$row['game_id']."&name=".$row['game_name']."'><button class='btn btn-success btn-sm btn-flat'> Win</button></a> ";
                            echo "<a href='game_player.php?id=".$row['game_id']."&name=".$row['game_name']."'><button class='btn btn-warning btn-sm btn-flat'> Players</button></a> ";
                            echo "<button class='btn btn-danger btn-sm complete btn-flat' data-id='".$row['game_id']."'> Completed</button> ";
                            echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['game_id']."'><i class='fa fa-edit'></i> Edit</button> ";
                          }if($admin['game_del'])
                              echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['game_id']."'><i class='fa fa-trash'></i> Delete</button>";
                          if($admin['game_edit'] || $admin['game_del'])
                              echo "</td>";
                          echo "</tr>
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
    <?php include 'game_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include '../includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.complete', function(e){
    e.preventDefault();
    $('#complete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'game_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.gameid').val(response.game_id);
      $('#edit_gamename').val(response.game_name);
      $('#edit_entry_fee').val(response.game_amount);
      $('#edit_date').val(response.game_date);
      $('#edit_time').val(response.game_time);
      $('#edit_team_numbers').val(response.game_team_numbers);
      $('#edit_win_amount').val(response.game_win_amount);
      $('#edit_team_limit').val(response.game_team_limit);
      $('#edit_room_id').val(response.game_room_id);
      $('#edit_password').val(response.game_password);
    }
  });
}
</script>
</body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>
</html>