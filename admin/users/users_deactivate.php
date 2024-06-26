<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['deactivate'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET user_status=:status WHERE user_id=:id");
			$stmt->execute(['status'=>0, 'id'=>$id]);
			$_SESSION['success'] = 'user deactivated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select user to deactivate first';
	}
}

	header('location: users.php');
?>