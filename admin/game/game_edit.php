<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$gamename = $_POST['gamename'];
		$entry_fee = $_POST['entry_fee'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$team_numbers = $_POST['team_numbers'];
		$win_amount = $_POST['win_amount'];
		$team_limit = $_POST['team_limit'];
		$room_code = $_POST['room_code'];
		$password = $_POST['password'];
		$conn = $pdo->open();
	
		try{
			$stmt = $conn->prepare("UPDATE game SET  game_name=:game_name, game_amount=:game_amount,  game_date=:game_date, game_time=:game_time, game_team_numbers=:game_team_numbers, game_win_amount=:game_win_amount, game_team_limit=:game_team_limit, game_room_id=:game_room_id, game_password=:game_password WHERE game_id=:id");
			$stmt->execute(['game_name'=>$gamename, 'game_amount'=>$entry_fee,  'game_date'=>$date, 'game_time'=>$time,'game_team_numbers'=>$team_numbers,  'game_win_amount'=>$win_amount, 'game_team_limit'=>$team_limit, 'game_room_id'=>$room_code, 'game_password'=>$password, 'id'=>$id]);
			$_SESSION['success'] = 'Game updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit game form first';
	}
}

	header('location: game.php');

?>