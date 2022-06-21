<?php
include 'includes/session.php';
include 'req_start.php';
if (isset($_POST['report'])) {
	if ($req_per == 1) {
		$gameid = $_POST['gameid'];
		$user_id = $_SESSION['never_id'];
		$photo = $_FILES['winner_file']['name'];
		$conn = $pdo->open();
		try {
			if (!empty($photo)) {
				$stmt_game = $conn->prepare("SELECT game_room_id FROM game WHERE game_id=:id");
				$stmt_game->execute(['id' => $gameid]);
				foreach ($stmt_game as $row2)
					$game_room_id = $row2['game_room_id'];
				if (!empty($game_room_id)) {
					$ext = pathinfo($photo, PATHINFO_EXTENSION);
					$new_filename = $user_id . '_' . time() . '.' . $ext;
					move_uploaded_file($_FILES['winner_file']['tmp_name'], 'winner_screenshort/' . $new_filename);
					$stmt = $conn->prepare("UPDATE player SET player_completed=:status, player_ss=:ss WHERE player_game_id=:id AND player_user_id=:user_id AND player_completed=:val");
					$stmt->execute(['status' => 2, 'ss' => $new_filename, 'val' => 0, 'id' => $gameid, 'user_id' => $user_id]);
					$_SESSION['success'] = 'Reported as you won.';
				} else
					$_SESSION['error'] = 'Match has not started.';
			} else {
				$_SESSION['error'] = 'Screen Short Required.';
			}
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}

	header('location:index.php');
} else {
	$_SESSION['error'] = 'Fill the details first.';
}

header('location:index.php');
