<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['save'])){
		$main= $_POST['main'];
		$recharge = $_POST['recharge'];
		$withdraw= $_POST['withdraw'];
		$minimum_withdraw = $_POST['minimum_withdraw'];
		$new_login = $_POST['new_login'];
		$adminphone = $_POST['adminphone'];
		$conn = $pdo->open();
		try{
			$stmt = $conn->prepare("UPDATE message SET main=:main, recharge=:recharge, withdraw=:withdraw, minimum_withdraw=:minimum_withdraw, new_login=:new_login, adminphone=:adminphone WHERE message_id=:id");
			$stmt->execute([ 'main'=>$main, 'recharge'=>$recharge, 'withdraw'=>$withdraw, 'minimum_withdraw'=>$minimum_withdraw,  'new_login'=>$new_login,  'adminphone'=>$adminphone, 'id'=>1]);
			$_SESSION['success'] = 'Messages updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}
}

	header('location: message.php');

?>