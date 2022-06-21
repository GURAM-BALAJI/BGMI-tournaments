<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['complete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE game SET game_completed=:status WHERE game_id=:id");
			$stmt->execute(['status'=>1, 'id'=>$id]);
            $stmt = $conn->prepare("UPDATE player SET player_completed=:status WHERE player_game_id=:id AND player_completed=:val");
			$stmt->execute(['status'=>1, 'val'=>0, 'id'=>$id]);
			$_SESSION['success'] = 'game completed successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select game first';
	}
}

	header('location: game.php');
?>