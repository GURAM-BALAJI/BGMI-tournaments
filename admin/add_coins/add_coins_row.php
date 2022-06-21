<?php 
	include '../includes/session.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM add_coins WHERE add_coins_id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		$pdo->close();
		echo json_encode($row);
	}
?>