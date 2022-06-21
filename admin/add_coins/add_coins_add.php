<?php
include '../includes/session.php';
include '../includes/req_start.php';
if($req_per==1){
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $by = $admin['admin_id'];
    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM add_coins WHERE add_coins_id=:id AND add_coins_task=1");
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Already Added.';
    } else {
        try {
            
            $stmt = $conn->prepare("UPDATE add_coins set add_coins_task='1' WHERE add_coins_id=:id");
			$stmt->execute(['id'=>$id]);

            $stmt = $conn->prepare("SELECT * FROM add_coins WHERE add_coins_id=:id");
            $stmt->execute(['id' => $id]);
            foreach ($stmt as $row) {
                $user_id = $row['add_coins_user_id'];
                $amount = $row['add_coins_amount'];
            }
            $stmt_user2 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id");
            $stmt_user2->execute(['user_id' => $user_id]);
            foreach ($stmt_user2 as $row1)
                $amount_total = $row1['user_amount'] + $amount;

            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount, updated_by_id=:by WHERE user_id=:id");
            $stmt->execute(['amount' => $amount_total, 'by' => $by, 'id' => $user_id]);

            date_default_timezone_set('Asia/Kolkata');
            $today = date('d-m-Y h:i:s a');
            $date = date('Y-m-d');
            $stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by, date_transaction, transaction_date, present_amount) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by, :date_transaction, :transaction_date, :present_amount)");
            $stmt->execute(['transaction_user_id' => $user_id, 'transaction_send_to' => 'DEPOSIT COINS', 'transaction_amount' => $amount, 'transaction_method' => 'ADD COINS', 'transaction_added_by' => $by, 'date_transaction' => $date, 'transaction_date' => $today, 'present_amount'=>$amount_total]);

            $_SESSION['success'] = 'Coins added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up coins form first';
}
}
header('location: add_coins.php');
