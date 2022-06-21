<?php
include '../includes/session.php';
include '../includes/req_start.php';
if($req_per==1){
$conn = $pdo->open();
if (isset($_POST['Pay'])) {
	$by = $admin['admin_id'];
	$id = $_POST['withdraw_id'];
	$withdraw_amount = $_POST['withdraw_amount'];
	$user_id = $_POST['user_id'];
	try {
		$stmt = $conn->prepare("SELECT withdraw_id,withdraw_amount FROM withdraw WHERE withdraw_id=:id AND withdrawn=0 LIMIT 1");
		$stmt->execute(['id' => $id]);
		foreach ($stmt as $row) {
			$amount=$row['withdraw_amount'];
			$stmt = $conn->prepare("UPDATE withdraw SET withdrawn=:cview, withdrawn_by=:by WHERE withdraw_id=:id");
			$stmt->execute(['cview' => 1, 'by' => $by, 'id' => $id]);
	
			$_SESSION['success'] = $withdraw_amount . ' Rs Withdrawn successfully';
		}
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
}else if($_POST['delete']){
	$id = $_POST['withdraw_id'];
	$stmt = $conn->prepare("DELETE from withdraw WHERE withdraw_id=:id");
	$stmt->execute(['id' => $id]);
	$_SESSION['success'] = 'Deleted Withdraw Request Successfully';
}
}

header('location: ../withdraw/withdraw.php');
