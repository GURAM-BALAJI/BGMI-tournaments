<?php
include 'includes/session.php';
$conn = $pdo->open();

if (isset($_POST['login'])) {
	$_SESSION['contact'] = $contact = $_POST['contact'];
	$_SESSION['password'] = $password = $_POST['password'];

	try {

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE user_phone= :contact and user_delete=0");
		$stmt->execute(['contact' => $contact]);
		$row = $stmt->fetch();

		if ($row['numrows'] > 0) {

			if ($row['user_status']) {
				if (password_verify($password, $row['user_password'])) {
					$_SESSION['ese_never'] = 'True';
					$user_id = $_SESSION['never_id'] = $row['user_id'];
					$stmt = $conn->prepare("UPDATE users SET req=:req WHERE user_id=:id");
					$stmt->execute(['req' => '0', 'id' => $user_id]);
					unset($_SESSION['contact']);
					unset($_SESSION['password']);
				} else {
					$_SESSION['error'] = 'Incorrect Password';
				}
			} else {
				$_SESSION['error'] = 'Account not activated.';
			}
		} else {
			$_SESSION['error'] = 'Phone Number not found';
		}
	} catch (PDOException $e) {
		echo "There is some problem in connection: " . $e->getMessage();
	}
} else {
	$_SESSION['error'] = 'Input login credentails first';
}

$pdo->close();

header('location: login.php');
