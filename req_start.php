<?php
$conn = $pdo->open();
try {
    $user_id = $_SESSION['never_id'];
    $stmtreq = $conn->prepare("SELECT req FROM users WHERE user_id = $user_id");
    $stmtreq->execute();
    foreach ($stmtreq as $rowreq) {
        if ($rowreq['req'] == 0) {
            $stmt = $conn->prepare("UPDATE users SET req=:req WHERE user_id=:id");
            $stmt->execute(['req' => 1, 'id' => $user_id]);
            $req_per=1;
        }else{
            $req_per=0;
        }
    }
} catch (PDOException $e) {
    $_SESSION['error'] = $e->getMessage();
}

$pdo->close();
