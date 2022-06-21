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
                            <li><a href="add_coins_view.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Coins</a></li>
                            <li><a href="withdraw_coins_view.php" class="active"><i class="fa fa-minus" aria-hidden="true"></i> Withdraw Coins</a></li>
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
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="modal-header">
                                    <h4 style="color: purple;"><b>WITHDRAW COINS </b></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST" action="withdraw_request.php" autocomplete="off">
                                        <?php
                                        $conn = $pdo->open();
                                        $stmt = $conn->prepare("SELECT withdraw,minimum_withdraw FROM message");
                                        $stmt->execute();
                                        foreach ($stmt as $row) { ?>
                                            <?php if (!empty($row['minimum_withdraw'])) { ?>
                                                <div class="form-group">
                                                    <label for="withdraw_amount" class="col-sm-3 control-label">COINS: </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="number" name="withdraw_amount" required id="withdraw_amount" min="<?php echo $row['minimum_withdraw']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="withdraw_type" class="col-sm-3 control-label">TO: </label>
                                                    <div class="col-sm-12">
                                                        <select name="withdraw_type" class="form-control" required>
                                                            <option value="PHONE PAY">PHONE PAY</option>
                                                            <option value="GPAY">GPAY (GOOGLE PAY)</option>
                                                            <option value="PAYTM">PAYTM</option>
                                                            <option value="AMAZON PAY">AMAZON PAY</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="withdraw_phone" class="col-sm-3 control-label">PHONE: </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="number" name="withdraw_phone" id="withdraw_phone" required>
                                                    </div>
                                                </div>
                                            <?php }
                                            if (!empty($row['withdraw'])) { ?>
                                                <p style="color: red;">* <?php echo $row['withdraw']; ?></p>
                                        <?php }
                                        } ?>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary btn-flat" name="withdraw"><i class="fa fa-lightbulb-o"></i> Withdraw</button>
                                        </div>
                                    </form>
                                </div>
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