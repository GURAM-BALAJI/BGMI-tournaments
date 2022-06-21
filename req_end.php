<?php 
$conn = $pdo->open();
try {
    $user_id = $_SESSION['never_id'];
    $time=time()+60;
	date_default_timezone_set('Asia/Kolkata');
	$today = date('d/m/Y h:i:s a');
            $stmt = $conn->prepare("UPDATE users SET req=:req, last_login=:t, last_login_time=:today WHERE user_id=:id");
            $stmt->execute(['req' =>'0', 't'=>$time, 'today'=>$today, 'id' => $user_id]);
} catch (PDOException $e) {
    $_SESSION['error'] = $e->getMessage();
}
$pdo->close();