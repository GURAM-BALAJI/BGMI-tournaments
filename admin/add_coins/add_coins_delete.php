<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE add_coins set add_coins_delete='1', add_coins_task='1' WHERE add_coins_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Add coin deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Add coins to delete first';
	}
}

	header('location: add_coins.php');
	
?>