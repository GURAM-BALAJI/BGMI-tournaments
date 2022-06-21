<?php
include 'includes/session.php';
include 'req_start.php';
if($req_per==1){
if (isset($_POST['withdraw'])) {
    $withdraw_amount = $_POST['withdraw_amount'];
    $withdraw_phone = $_POST['withdraw_phone'];
    $withdraw_type = $_POST['withdraw_type'];
    $users_id = $_SESSION['never_id'];
    $conn = $pdo->open();
    try {
        date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y h:i:s a');
        $date = date('Y-m-d');
        $stmt_date = $conn->prepare("SELECT COUNT(withdraw_id) FROM withdraw WHERE withdraw_user_id=:id AND withdraw_date=:date");
        $stmt_date->execute(['id' => $users_id , 'date'=>$date]);
            $count=$stmt_date->fetchColumn();
            if($count<=1){
        $stmt_user = $conn->prepare("SELECT user_amount,user_id FROM users WHERE user_id=:id");
        $stmt_user->execute(['id' => $users_id]);
        foreach ($stmt_user as $row1) {
            $user_amount = $row1['user_amount'];
            if ($user_amount >= $withdraw_amount) {
                $stmt = $conn->prepare("INSERT INTO withdraw ( withdraw_user_id, withdraw_amount, withdraw_request_date, withdraw_phone, withdraw_type, withdraw_date ) VALUES (:withdraw_user_id, :withdraw_amount, :withdraw_request_date, :withdraw_phone, :withdraw_type, :withdraw_date)");
                $stmt->execute(['withdraw_user_id' => $users_id, 'withdraw_amount' => $withdraw_amount, 'withdraw_request_date' => $today, 'withdraw_phone' => $withdraw_phone, 'withdraw_type' => $withdraw_type, 'withdraw_date'=>$date]);
                $stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:id");
                $stmt->execute(['id' => $users_id]);
                $row = $stmt->fetch();
                $amount = $row['user_amount'];
                $amount = intval($amount) - intval($withdraw_amount);
                $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
                $stmt->execute(['amount' => $amount, 'id' => $users_id]);
                date_default_timezone_set('Asia/Kolkata');
                $today = date('d-m-Y h:i:s a');
                $date = date('Y-m-d');
                $stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by, date_transaction, transaction_date, present_amount) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by, :date_transaction, :transaction_date, :present_amount)");
                $stmt->execute(['transaction_user_id' => $users_id, 'transaction_send_to' => 'WITHDRAW', 'transaction_amount' => '-'.$withdraw_amount, 'transaction_method' => 'MINUS COINS', 'transaction_added_by' => $users_id, 'date_transaction' => $date, 'transaction_date' => $today, 'present_amount'=>$amount]);

                $_SESSION['success'] = 'Withdraw request sent successfully';
            } else {
                $_SESSION['error'] = 'You don`t have sufficient balance';
            }
        }
    
    }else{
        $_SESSION['error'] = 'You have already withdrawn 2 times.';   
    }
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up withdraw form first';
}
}

header('location: withdraw_coins_view.php');
