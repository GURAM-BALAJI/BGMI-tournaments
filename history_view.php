<!DOCTYPE html>
<?php include 'includes/session.php';
if (!isset($_SESSION['ese_never']))
    header('location: login.php'); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <title>Softy Pinko - Bootstrap 4.0 Theme</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo">
                              <?php 
                              echo "<b>NAME:</b> <b style='color:#ff006a;'>".$user['first_name'].'</b>';echo '<br>';
                              echo "<b>BALANCE:</b> <b style='color:rgb(153, 0, 255);'>".$user['user_amount'].'</b>';echo '<br>';
                            ?>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li><a href="add_coins_view.php" ><i class="fa fa-plus" aria-hidden="true"></i> Add Coins</a></li>
                            <li><a href="withdraw_coins_view.php"><i class="fa fa-minus" aria-hidden="true"></i> Withdraw Coins</a></li>
                            <li><a href="send_coins_view.php"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Coins</a></li>
                            <li><a href="history_view.php" class="active"><i class="fa fa-history" aria-hidden="true"></i> History</a></li>
                            <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
    <?php
        if (isset($_SESSION['error'])) {
            echo "
            <div class='alert alert-danger alert-dismissible' style='z-index:12;'>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "
            <div class='alert alert-success alert-dismissible' style='z-index:12;'>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
            unset($_SESSION['success']);
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        
                                <?php
                    if(isset($_GET['id'])){
                    if ($_GET['id']==2) {?>
                                <div class="modal-header">
                                <a href="history_view.php?id=2"><button  style="background-color:green;border-radius:20px;">TRANSACTION </button></a>
                                    <a href="history_view.php"><button  style="border-radius:20px;">PLAY</button></a>
                                    <a href="history_view.php?id=3"><button  style="border-radius:20px;">WITHDRAW </button></a>
                                </div>
                        <div class="features-small-item">
                    <?php    $id = $_SESSION['never_id'];
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM transaction WHERE transaction_user_id = $id ORDER BY transaction_id DESC LIMIT 10");
                        $stmt->execute();
                        foreach ($stmt as $row) { ?>
                            <?php if ($row['transaction_amount'] < 0)
                                $color = "red";
                            else
                                $color = "green"; ?>
                            <div style="padding: 5px; margin: 0;  background-color:<?php echo $color; ?>;  border-radius: 9px;">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="float:left;">
                                            <h3><?php echo $row['transaction_send_to']; ?></h3>
                                        </td>
                                        <td rowspan="2"> <?php echo $row['transaction_amount']; ?>&#9921;</td>
                                    <tr>
                                        <td style=""><?php echo date("d-M-Y h:i:s A", strtotime($row['transaction_date'])); ?></td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                    <?php }
                    }?>
 <?php
                   if ($_GET['id']==3) {
                    ?>
                    <div class="modal-header">
                    <a href="history_view.php?id=3"><button  style="background-color:green;border-radius:20px;">WITHDRAW </button></a>
                    <a href="history_view.php?id=2"><button  style="border-radius:20px;">TRANSACTION </button></a>
                        <a href="history_view.php"><button  style="border-radius:20px;">PLAY</button></a>
                    </div>
            <div class="features-small-item">
        <?php 
                        $id = $_SESSION['never_id'];
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM withdraw WHERE withdraw_user_id = $id ORDER BY withdraw_id DESC LIMIT 7");
                        $stmt->execute();
                        foreach ($stmt as $row) {
                            if ($row['withdrawn'] == 0)
                                $color = "orange";
                            elseif ($row['withdrawn'] == 1)
                                $color = "green";
                            else
                                $color = "red"; ?>
                            <div style="padding: 5px; margin: 0;  background-color:<?php echo $color; ?>; border-radius: 9px;">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="float:left;">
                                            <h3>Self</h3>
                                        </td>
                                        <td rowspan="2"> <?php echo $row['withdraw_amount']; ?>&#9921;</td>
                                    <tr>
                                        <td style=""><?php echo date("d-M-Y h:i:s A", strtotime($row['withdraw_request_date'])); ?></td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                    <?php }
                    }} ?>
    <?php if (!isset($_GET['id'])) {
    $id = $_SESSION['never_id']; ?>
     <div class="modal-header">
     <a href="history_view.php"><button  style="background-color:green;border-radius:20px;">PLAY</button></a>
                    <a href="history_view.php?id=3"><button  style="border-radius:20px;">WITHDRAW </button></a>
                    <a href="history_view.php?id=2"><button  style="border-radius:20px;">TRANSACTION </button></a>
                    </div>
            <div class="features-small-item">
    <!-- play list -->
                <div class="panel panel-default" style="overflow-x:auto;">
                            <div class="modal-body">
                                <table style="border-collapse: collapse;" border="1">
                                    <tr style="background-color:#919191; ">
                                        <th style="padding: 5px;">GAME</th>
                                        <th style="padding: 5px;">ENTRY COINS</th>
                                        <th style="padding: 5px;">PLAYERS ID</th>
                                        <th style="padding: 5px;">ROOM ID</th>
                                        <th style="padding: 5px;">PASSWORD</th>
                                        <th style="padding: 5px;">DATE & TIME</th>
                                    </tr>
                                    <?php
                                    $slno = 1;
                                    $stmt = $conn->prepare("SELECT player_ids,game_name,game_password,game_room_id,game_amount,player_joined_date_time FROM player left join game on game_id=player_game_id WHERE player_user_id = $id ORDER BY player_id DESC LIMIT 10");
                                    $stmt->execute();
                                    foreach ($stmt as $row) {
                                    ?>
                                        <tr style="color:black;">
                                            <td style=" padding: 5px;"><?php echo $row['game_name']; ?></td>
                                            <td style=" padding: 5px;"><?php echo $row['game_amount']; ?></td>
                                            <td style=" padding: 5px;"><?php echo $row['player_ids']; ?></td>
                                            <td style=" padding: 5px;"><?php echo $row['game_room_id']; ?></td>
                                            <td style=" padding: 5px;"><?php echo $row['game_password']; ?></td>
                                            <td style=" padding: 5px;"><?php echo $row['player_joined_date_time']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                </div>
    <?php } ?>

                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <p style="color:white;">Contact Admin @ <?php
                                        $conn = $pdo->open();
                                        $stmt = $conn->prepare("SELECT adminphone FROM message");
                                        $stmt->execute();
                                        foreach ($stmt as $row) 
                                            if (!empty($row['adminphone'])) 
                                            echo $row['adminphone'];?></p>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright"><a style="color:black;" href="terms_and_conditions.php">Terms And Conditions</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>


    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
<?php include 'req_end.php'; ?>

</html>