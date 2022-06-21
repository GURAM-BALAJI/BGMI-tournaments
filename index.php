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
<style>
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;

    }

    button:hover {
        opacity: 1;
    }

    .yesbtn {
        float: right;
        width: 50%;
    }

    /* Float cancel and delete buttons and add an equal width */
    .nobtn {
        float: left;
        width: 50%;
    }

    /* Add a color to the cancel button */
    .nobtn {
        background-color: #ccc;
        color: black;
    }

    /* Add a color to the delete button */
    .yesbtn {
        background-color: green;
    }

    /* Add padding and center-align text to the container */
    .container {
        padding: 16px;
        text-align: center;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 150;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(153, 150, 150, 0.301);
        padding-top: 10%;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Modal Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: black;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and delete button on extra small screens */
    @media screen and (max-width: 300px) {

        .nobtn,
        .yesbtn {
            width: 100%;
        }
    }
</style>

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
                            echo "<b>NAME:</b> <b style='color:#ff006a;'>" . $user['first_name'] . '</b>';
                            echo '<br>';
                            echo "<b>BALANCE:</b> <b style='color:rgb(153, 0, 255);'>" . $user['user_amount'] . '</b>';
                            echo '<br>';
                            ?>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li><a href="add_coins_view.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Coins</a></li>
                            <li><a href="withdraw_coins_view.php"><i class="fa fa-minus" aria-hidden="true"></i> Withdraw Coins</a></li>
                            <li><a href="send_coins_view.php"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Coins</a></li>
                            <li><a href="history_view.php"><i class="fa fa-history" aria-hidden="true"></i> History</a></li>
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
    <center><b style="color: red;"><?php
                                        $conn = $pdo->open();
                                        $stmt = $conn->prepare("SELECT main FROM message");
                                        $stmt->execute();
                                        foreach ($stmt as $row) 
                                            if (!empty($row['main'])) 
                                            echo $row['main'];?></b></center>
        <?php
        if (isset($_SESSION['error'])) {
            echo "
            <div class='alert alert-danger alert-dismissible'>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "
            <div class='alert alert-success alert-dismissible'>
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
                        <?php
                        $player_game_id=array();
                        $user_id = $user['user_id'];
                        $stmt17 = $conn->prepare("SELECT player_game_id FROM player WHERE player_user_id = '$user_id' AND player_deleted='0' AND (player_completed='0' OR player_completed='2') ");
                        $stmt17->execute();
                        $i = 1;
                        foreach ($stmt17 as $row) {
                            if ($i == 1)
                                $player_game_id = array($row['player_game_id']);
                            else
                            array_push($player_game_id,$row['player_game_id']);
                            $i++;
                        }
                        ?>
                        <?php
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM game WHERE game_delete='0' AND game_status='1' AND game_completed='0'");
                        $stmt->execute();
                        $count = 0;
                        foreach ($stmt as $row) {
                            $count++;
                        ?>
                            <!-- ***** Features Small Item Start ***** -->
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="features-small-item">
                                    <table style="width: 100%; align-content: center;">
                                        <tr>
                                            <td colspan="2">
                                                <h5 class="features-title">
                                                    <b> <?php echo $row['game_name']; ?></b>
                                                </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Entry:<b> <?php echo $row['game_amount']; ?></b>
                                            </td>
                                            <td>
                                            <?php if(in_array($row['game_id'],$player_game_id)){?>
                                                <button style="padding: 4px 8px;width: 60%; height:100%;border-radius:20px;background-color:red;" onclick="document.getElementById('report').style.display='block';document.getElementById('report_id').value='<?php echo $row['game_id']; ?>'">REPORT</button>
                                                <?php }else{ ?>
                                                <button style="padding: 4px 8px;width: 60%; height:100%;border-radius:20px;" onclick="document.getElementById('id01').style.display='block';document.getElementById('game_id').value='<?php echo $row['game_id']; ?>'">PLAY</button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p>
                                                    <?php echo $row['game_win_amount']; ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <b> Players:</b> <?php echo $row['game_player_added'] * $row['game_team_numbers']; ?>/<?php echo $row['game_team_limit']; ?> (<?php echo $row['game_team_numbers']; ?>)
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <?php
                                                    $dt = strtotime($row['game_date'] . $row['game_time']);
                                                    echo date("d-m-Y h:i a", $dt);
                                                    ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <?php if(in_array($row['game_id'],$player_game_id)){
                                            echo "<tr>";
                                                if(empty($row['game_room_id'])){
                                                    echo "<td colspan='2' style='color:red;'><b>Waiting For Room Code.</b></td>";
                                                }else{
                                                    echo "
                                                    <td style='color:blue;'><b>Room:".$row['game_room_id']."</b></td>
                                                    <td style='color:blue;'><b>Pass:".$row['game_password']."</b></td>
                                                    ";
                                                }
                                            echo "</tr>";
                                        } ?>
                                    </table>
                                </div>
                            </div>
                            <!-- ***** Features Small Item End ***** -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer <?php if ($count > 2) echo "style='position:relative;'"; ?>>
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

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content" action="check.php" method="POST">
            <div class="container">
                <h3>Alert..</h3>
                <hr>
                <p>Are you sure you want to Play?</p>
                <input type="hidden" id="game_id" name="gameid">
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="nobtn">No</button>
                    <button type="submit" class="yesbtn" name="play">Yes</button>
                </div>
            </div>
        </form>
    </div>

    <div id="report" class="modal">
        <span onclick="document.getElementById('report').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content" action="report.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h3>Alert..</h3>
                <hr>
                <h4>You won the game?</h4>
                <div class="form-group">
                        <label for="delete_display_name" class="col-sm-3 control-label">Winner Screenshot :</label>
                        <div class="col-sm-9">
                            <input type="file" name="winner_file" id="winner_file" required>
                        </div>
                    </div>
                <p>If Won Click Yes.</p>
                <p>If Loss Click No.</p>
                <br>
                <p style="color:red;">*Penality if you report wrong.</p>
                <br>
                <input type="hidden" id="report_id" name="gameid">
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('report').style.display='none'" class="nobtn">No</button>
                    <button type="submit" class="yesbtn" name="report">Yes</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        var modal = document.getElementById('report');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>


    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
<?php include 'req_end.php'; ?>

</html>