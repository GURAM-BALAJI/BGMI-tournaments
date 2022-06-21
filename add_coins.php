<?php
include 'includes/session.php';
include 'req_start.php';
if($req_per==1){
if (isset($_POST['add'])) {
    $coin = $_POST['coin'];
    $type = $_POST['type'];
    $utr = $_POST['utr'];
    $users_id = $_SESSION['never_id'];
    $conn = $pdo->open();
    try {
        $present=0;
        $stmt = $conn->prepare("SELECT add_coins_id FROM add_coins WHERE add_coins_utr = '$utr'");
        $stmt->execute();
        foreach ($stmt as $row) 
        $present=$row['add_coins_id'];
        if($present==0){
        date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y h:i:s a');
        $date = date('Y-m-d');
        $stmt = $conn->prepare("INSERT INTO add_coins ( add_coins_user_id, add_coins_amount, add_coins_request_date, add_coins_type, add_coins_utr, add_coins_date) VALUES (:add_coins_user_id, :add_coins_amount, :add_coins_request_date, :add_coins_type, :add_coins_utr, :add_coins_date )");
        $stmt->execute(['add_coins_user_id' => $users_id, 'add_coins_amount' => $coin, 'add_coins_request_date' => $today, 'add_coins_type' => $type, 'add_coins_utr' => $utr, 'add_coins_date' => $date]);
        $_SESSION['success'] = 'Add coins request sent successfully';
        }else
        $_SESSION['error'] = 'UTR is already Entered.';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up Add coins form first';
}
}

header('location: add_coins_view.php');

