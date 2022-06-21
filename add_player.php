<?php
include 'includes/session.php';
include 'req_start.php';
if($req_per==1){
if (isset($_POST['play'])) {
	$gameid = $_POST['gameid'];
	$user_id = $_SESSION['never_id'];
    $idnum=$_POST['idnum'];
    for($i=1;$i<=$idnum;$i++){
        $id='id'.$i;
        if($i==1)
            $ids=$_POST[$id];
        else
            $ids.=','.$_POST[$id];
    }
	$conn = $pdo->open();
	try {
		$permission = 1;
		$stmt17 = $conn->prepare("SELECT * FROM player WHERE player_user_id = '$user_id' AND player_deleted='0' AND player_completed='0' AND player_game_id='$gameid'");
		$stmt17->execute();
		foreach ($stmt17 as $row17) {
				$permission = 0;
                $_SESSION['error'] = 'Your in game.';
		}
		$stmt17 = $conn->prepare("SELECT * FROM game WHERE game_id='$gameid'");
		$stmt17->execute();
		foreach ($stmt17 as $row17) {
		$amount = $row17['game_amount'];
		if($row17['game_delete']==1){
			$permission = 0;
			$_SESSION['error'] = 'Game has deleted.';
		}
		if($row17['game_status']==0){
			$permission = 0;
			$_SESSION['error'] = 'Game Deactivated.';
		}
        if($row17['game_completed']==1){
			$permission = 0;
			$_SESSION['error'] = 'Game Completed.';
		}
		$total_players=$row17['game_team_numbers']*$row17['game_player_added'];
		if($row17['game_team_limit']<=$total_players){
			$permission = 0;
			$_SESSION['error'] = 'Lobby Is Full.';
		}
		}
		if ($permission == 1) {
			$stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
			$stmt_user->execute(['id' => $user_id]);
			foreach ($stmt_user as $row1) {
				$user_amount = $row1['user_amount'];
				if ($user_amount >= $amount) {
					$user_amount = $user_amount - $amount;
                    date_default_timezone_set('Asia/Kolkata');
                    $today = date('d-m-Y h:i:s a');
                    $date = date('Y-m-d');
                    $stmt17 = $conn->prepare("SELECT * FROM game WHERE game_id='$gameid'");
                    $stmt17->execute();
                    foreach ($stmt17 as $row1)
                        $num_player=$row1['game_player_added']+1;
                    $stmt = $conn->prepare("UPDATE game SET game_player_added=:game_player_added WHERE game_id=:id");
                    $stmt->execute(['game_player_added' => $num_player, 'id' => $gameid]);                    
					$stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
					$stmt->execute(['amount' => $user_amount, 'id' => $user_id]);
					$stmt = $conn->prepare("INSERT INTO player ( player_game_id, player_user_id, player_ids, player_joined_date_time) VALUES (:player_game_id, :player_user_id, :player_ids, :player_joined_date_time)");
					$stmt->execute(['player_game_id' => $gameid, 'player_user_id' => $user_id, 'player_ids' => $ids, 'player_joined_date_time' => $today]);
					$stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by, date_transaction, transaction_date, present_amount) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by, :date_transaction, :transaction_date, :present_amount)");
					$stmt->execute(['transaction_user_id' => $user_id, 'transaction_send_to' => 'JOINED GAME', 'transaction_amount' => '-'.$amount, 'transaction_method' => 'MINUS COINS', 'transaction_added_by' => $user_id, 'date_transaction' => $date, 'transaction_date' => $today, 'present_amount'=>$user_amount]);
		
					$_SESSION['success'] = 'You have joined game.';
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
