<?php
include 'includes/session.php';
include 'req_start.php';
if($req_per==1){
if (isset($_POST['play'])) {
	$gameid = $_POST['gameid'];
	$user_id = $_SESSION['never_id'];
	date_default_timezone_set('Asia/Kolkata');
	$today = date('d-m-Y h:i:s a');
	$date = date('Y-m-d');
	$conn = $pdo->open();
	try {
		$permission = 0;
		$stmt17 = $conn->prepare("SELECT * FROM player WHERE player_user_id = '$user_id' AND player_deleted='0' AND player_completed='0' AND player_game_id='$gameid'");
		$stmt17->execute();
		foreach ($stmt17 as $row17) {
				$permission = 1;
                $_SESSION['error'] = 'You Have Already Joined Game.';
		}
		$stmt17 = $conn->prepare("SELECT * FROM game WHERE game_id='$gameid'");
		$stmt17->execute();
		foreach ($stmt17 as $row17) {
		$amount = $row17['game_amount'];
		if($row17['game_delete']==1){
			$permission = 1;
			$_SESSION['error'] = 'Game has deleted.';
		}
		if($row17['game_status']==0){
			$permission = 1;
			$_SESSION['error'] = 'Game Deactivated.';
		}
        if($row17['game_completed']==1){
			$permission = 1;
			$_SESSION['error'] = 'Game Completed.';
		}
		$total_players=$row17['game_team_numbers']*$row17['game_player_added'];
		if($row17['game_team_limit']<=$total_players){
			$permission = 1;
			$_SESSION['error'] = 'Lobby Is Full.';
		}
		}
		if ($permission == 0) {
            $stmt_game = $conn->prepare("SELECT game_amount FROM game WHERE game_id=:id");
			$stmt_game->execute(['id' => $gameid]);
			foreach ($stmt_game as $row2)
            $amount = $row2['game_amount'];
			$stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
			$stmt_user->execute(['id' => $user_id]);
			foreach ($stmt_user as $row1) {
				$user_amount = $row1['user_amount'];
				if ($user_amount >= $amount) {
					header('location:player_ids.php?gameid='.$gameid);
                    exit();
				} else {
					$_SESSION['error'] = 'You don`t have sufficient balance.';
				}
			}
		}
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
	}
	$pdo->close();
} else {
	$_SESSION['error'] = 'Fill up required details first';
}
}

header('location:index.php');
