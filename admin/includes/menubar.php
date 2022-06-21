<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['admin_photo'])) ? '../../images/' . $admin['admin_photo'] : '../../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['admin_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="../home/home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <?php if ($admin['withdraw_view']) { ?>
        <li class="header">REQUESTS</li>
      <?php } ?>
      <?php if ($admin['withdraw_view']) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-refresh"></i>
            <span>Withdraw</span> <b style="color:RED;"> <?php
                                                          foreach ($conn->query('SELECT COUNT(*) FROM withdraw WHERE withdrawn=0') as $row) {
                                                            if ($row['COUNT(*)'] != 0)
                                                              echo $row['COUNT(*)'];
                                                          } ?></b>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../withdraw/withdraw.php"><i class="fa fa-eye-slash"></i> New Withdraw Requests</a></li>
            <li><a href="../withdraw/withdraw_view.php"><i class="fa fa-eye"></i> Withdrawn Payed List</a></li>
              </ul>
        </li> <?php } ?>

        <?php if ($admin['add_coins_view']) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-adjust"></i>
            <span>Coins</span> <b style="color:RED;"> <?php
                                                          foreach ($conn->query('SELECT COUNT(*) FROM add_coins WHERE add_coins_task=0') as $row) {
                                                            if ($row['COUNT(*)'] != 0)
                                                              echo $row['COUNT(*)'];
                                                          } ?></b>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../add_coins/add_coins.php"><i class="fa fa-eye-slash"></i> Add Coins</a></li>
            <li><a href="../add_coins/added_coins.php"><i class="fa fa-eye"></i> Added Coins</a></li>
          </ul>
        </li>
      <?php } ?>

      <li class="header">MANAGE</li>
      <?php if ($admin['users_view']) { ?>
        <li><a href="../users/users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <?php }
      if ($admin['admin_view']) { ?>
        <li><a href="../admin/admin.php"><i class="fa fa-grav"></i> <span>Admin</span></a></li>
      <?php } ?>
      <?php if ($admin['history_view'] ) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-history"></i>
            <span>HISTORY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../history/transaction.php"><i class="fa fa-exchange"></i> Transaction</a></li>
            <li><a href="../history/pay_to_friend.php"><i class="fa fa-handshake-o"></i> Pay To Friend</a></li>
          </ul>
        </li>
      <?php } ?>
      <?php if ($admin['game_view'] ) { ?>
        <li><a href="../game/game.php"><i class="fa fa-play"></i><span>Game</span></a></li>
      <?php } ?>
      <?php if ($admin['played_view'] ) { ?>
        <li><a href="../game/game_played.php"><i class="fa fa-th-list"></i><span>Completed</span></a></li>
      <?php } ?>
      <?php if ($admin['record_view'] ) { ?>
        <li><a href="../record/record.php"><i class="fa fa-list"></i><span> Record</span></a></li>
      <?php } ?>
      <?php if ($admin['message_view']) { ?>
        <li><a href="../message/message.php"><i class="fa fa-comment"></i> <span>Message</span></a></li>
      <?php } ?>   
    
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>