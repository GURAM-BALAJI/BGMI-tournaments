<?php
include '../includes/session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['add'])) {
		$gamename = $_POST['gamename'];
		$entry_fee = $_POST['entry_fee'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$team_numbers = $_POST['team_numbers'];
		$win_amount = $_POST['win_amount'];
		$team_limit = $_POST['team_limit'];
		$conn = $pdo->open();
			try {
				$stmt = $conn->prepare("INSERT INTO game (game_name, game_amount, game_date, game_time, game_team_numbers, game_win_amount, game_team_limit, game_status) VALUES (:game_name, :game_amount, :game_date, :game_time, :game_team_numbers, :game_win_amount, :game_team_limit, :game_status)");
				$stmt->execute(['game_name' => $gamename, 'game_amount' => $entry_fee, 'game_date' =>$date, 'game_time' => $time, 'game_team_numbers' => $team_numbers, 'game_win_amount' => $win_amount, 'game_team_limit' => $team_limit, 'game_status'=>1]);
				$_SESSION['success'] = 'Game added successfully';
			} catch (PDOException $e) {
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up Game form first';
	}
}
header('location: game.php');
