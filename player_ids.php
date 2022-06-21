<!DOCTYPE html>
<?php include 'includes/session.php';
if (!isset($_SESSION['ese_never']))
    header('location: login.php'); 
    if (!isset($_GET['gameid']))
    header('location: index.php');
    else
    $gameid=$_GET['gameid'];
    ?>
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
        display: block;
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
        background-color: grey;
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
<?php 
$gameid = $_GET['gameid'];
$user_id = $_SESSION['never_id'];
date_default_timezone_set('Asia/Kolkata');
$conn = $pdo->open();
try {
$stmt = $conn->prepare("SELECT * FROM game WHERE game_delete='0' AND game_completed='0' AND game_status='1' AND game_id='$gameid'");
$stmt->execute();
foreach ($stmt as $row){?>
    <div class="modal" >
       <a href="index.php"> <span class="close" title="Close Modal">×</span></a>
        <form class="modal-content" action="add_player.php" method="POST">
            <input type="hidden" name="gameid" value="<?php echo $gameid;?>">
            <div class="container">
                <h2><?php echo $row['game_name'];?></h2>
                <hr>
                <h4>
                    <b>Entry:</b> <?php echo $row['game_amount'];?>
                </h4>
                <h4>
                <b>Starts At:</b> <?php $dt = strtotime($row['game_date'] . $row['game_time']);
                echo date("d-m-Y h:i a", $dt);?>
                </h4>
                <h4>
                    <b><?php echo $row['game_win_amount'];?></b>
                </h4>
                <hr>
                <h4>
                    <b>PLAYER ID</b>
                </h4>
                <table>
                <?php 
                $num=$row['game_team_numbers'];
                for($i=1;$i<=$num;$i++){ 
                $id='id'.$i; echo "<tr><td>"; echo $i;echo "</td>";?>
                 <td><input type="text" name="<?php echo $id;?>" class="form-control" required></td><tr></tr>
                <?php }
                ?></table>
                <input type="hidden" name="idnum" value="<?php echo $num;?>">
                <p>Are you sure you want to Play?</p>
                <div class="clearfix">
                <a href="index.php">  <button type="button" class="nobtn">No</button></a>
                    <button type="submit" name="play" class="yesbtn">Yes</button>
                </div>
            </div>
        </form>
    </div>
<?php }
} catch (PDOException $e) {
    $_SESSION['error'] = $e->getMessage();
}
$pdo->close();
?>



    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>


    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
<?php include 'req_end.php'; ?>

</html>