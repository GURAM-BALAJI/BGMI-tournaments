<?php
include '../includes/session.php';
include '../includes/req_start.php';
if($req_per==1){
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    if (isset($_POST['users_view']))
        $users_view = 1;
    else
        $users_view = 0;
    if (isset($_POST['users_create']))
        $users_create = 1;
    else
        $users_create = 0;
    if (isset($_POST['users_edit']))
        $users_edit = 1;
    else
        $users_edit = 0;
    if (isset($_POST['users_del']))
        $users_del = 1;
    else
        $users_del = 0;
    if (isset($_POST['admin_view']))
        $admin_view = 1;
    else
        $admin_view = 0;
    if (isset($_POST['admin_create']))
        $admin_create = 1;
    else
        $admin_create = 0;
    if (isset($_POST['admin_edit']))
        $admin_edit = 1;
    else
        $admin_edit = 0;
    if (isset($_POST['admin_del']))
        $admin_del = 1;
    else
        $admin_del = 0;
    if (isset($_POST['withdraw_view']))
        $withdraw_view = 1;
    else
        $withdraw_view = 0;
    if (isset($_POST['withdraw_edit']))
        $withdraw_edit = 1;
    else
        $withdraw_edit = 0;
    if (isset($_POST['withdraw_del']))
        $withdraw_del = 1;
    else
        $withdraw_del = 0;
    if (isset($_POST['users_special']))
        $users_special = 1;
    else
        $users_special = 0;
    if (isset($_POST['admin_special']))
        $admin_special = 1;
    else
        $admin_special = 0;
    if (isset($_POST['record_view']))
        $record_view = 1;
    else
        $record_view = 0;
        if (isset($_POST['history_view']))
        $history_view = 1;
    else
        $history_view = 0;
        if (isset($_POST['played_view']))
        $played_view = 1;
    else
        $played_view = 0;
        if (isset($_POST['add_coins_view']))
        $add_coins_view = 1;
    else
        $add_coins_view = 0;
        if (isset($_POST['add_coins_special']))
        $add_coins_special = 1;
    else
        $add_coins_special = 0;
    
        if (isset($_POST['game_view']))
        $game_view = 1;
    else
        $game_view = 0;
    if (isset($_POST['game_create']))
        $game_create = 1;
    else
        $game_create = 0;
    if (isset($_POST['game_edit']))
        $game_edit = 1;
    else
        $game_edit = 0;
    if (isset($_POST['game_del']))
        $game_del = 1;
    else
        $game_del = 0;
        if (isset($_POST['message_view']))
        $message_view = 1;
    else
        $message_view = 0;
    $conn = $pdo->open();
    try {
        $stmt = $conn->prepare("UPDATE admin SET users_special=:users_special,admin_special=:admin_special,users_view=:users_view,users_create=:users_create,users_edit=:users_edit,users_del=:users_del,admin_view=:admin_view,admin_create=:admin_create,admin_edit=:admin_edit,admin_del=:admin_del,game_view=:game_view,game_create=:game_create,game_edit=:game_edit,game_del=:game_del,withdraw_view=:withdraw_view,withdraw_edit=:withdraw_edit,withdraw_del=:withdraw_del,record_view=:record_view,history_view=:history_view,played_view=:played_view,add_coins_view=:add_coins_view,add_coins_special=:add_coins_special,message_view=:message_view WHERE admin_id=:id");         
        $stmt->execute(['users_special' => $users_special, 'admin_special' => $admin_special, 'users_view' => $users_view, 'users_create' => $users_create, 'users_edit' => $users_edit, 'users_del' => $users_del,'game_view' => $game_view, 'game_create' => $game_create, 'game_edit' => $game_edit, 'game_del' => $game_del, 'admin_view' => $admin_view, 'admin_create' => $admin_create, 'admin_edit' => $admin_edit, 'admin_del' => $admin_del, 'withdraw_view' => $withdraw_view, 'withdraw_edit' => $withdraw_edit, 'withdraw_del' => $withdraw_del, 'record_view' => $record_view, 'history_view' => $history_view, 'id' => $id, 'played_view' => $played_view, 'add_coins_view' => $add_coins_view, 'add_coins_special' => $add_coins_special, 'message_view'=>$message_view]);
        $_SESSION['success'] = 'Admin Permission Updated Successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    $pdo->close();
}
}

header('location: admin.php');
