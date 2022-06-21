<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		try{
			$stmt = $conn->prepare("UPDATE users SET  user_email=:email, user_password=:password, first_name=:firstname,  user_phone=:contact WHERE user_id=:id");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname,  'contact'=>$contact,  'id'=>$id]);
			$_SESSION['success'] = 'User updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}
}

	header('location: users.php');

?>