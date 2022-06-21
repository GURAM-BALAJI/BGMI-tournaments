<?php

//use PHPMailer\PHPMailer\PHPMailer;

include 'includes/session.php';

if (isset($_POST['contact'])) {
	$_SESSION['name'] = $name = $_POST['name'];
	$_SESSION['contact'] = $contact = $_POST['contact'];
	$_SESSION['password'] = $password = $_POST['password'];
	$_SESSION['email'] = $email = $_POST['email'];
	$cpassword = $_POST['cpassword'];
	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT new_login FROM message");
	$stmt->execute();
	foreach ($stmt as $row)
		$min = $row['new_login'];
	$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE user_phone=:phone");
	$stmt->execute(['phone' => $contact]);
	$row = $stmt->fetch();

	if ($row['numrows'] > 0) {
		$_SESSION['error'] = 'phone number already taken.';
	} else {
		if ($password == $cpassword) {
			$password = password_hash($password, PASSWORD_DEFAULT);
			try {
				date_default_timezone_set('Asia/Kolkata');
				$today = date('d-m-Y h:i:s a');
				$date = date('Y-m-d');
				//$code = rand(999999, 111111);
				$stmt = $conn->prepare("INSERT INTO users (user_email, user_password, first_name, user_phone,  user_status, user_amount, user_added_date) VALUES (:user_email, :password, :firstname, :contact, :status, :user_amount, :user_added_date)");
				$stmt->execute(['user_email'=>$email, 'password' => $password, 'firstname' => $name, 'contact' => $contact, 'status' => 1, 'user_amount' => $min, 'user_added_date'=>$today]);

				$stmt = $conn->prepare("SELECT user_id FROM users WHERE user_phone=:phone");
				$stmt->execute(['phone' => $contact]);
				foreach ($stmt as $row)
					$user_id = $row['user_id'];
				if ($min != 0) {
					$stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, date_transaction, transaction_date, present_amount) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :date_transaction, :transaction_date, :present_amount)");
					$stmt->execute(['transaction_user_id' => $user_id, 'transaction_send_to' => 'LOING BY SELF', 'transaction_amount' => $min, 'transaction_method' => 'ADD COINS', 'date_transaction' => $date, 'transaction_date'=>$today, 'present_amount'=>$min]);
				}
				//$message = "<center><h1>Your verification code is</h1><h2>$code</h2><br><br><br><hr>If you has not sent please ignore this mail.<h2>ludo.in</h2></center>";
				//require_once "PHPMailer/PHPMailer.php";
				//require_once "PHPMailer/SMTP.php";
				//require_once "PHPMailer/Exception.php";
				//$mail = new PHPMailer();			  
				//Server settings
				//$mail->isSMTP();
				//$mail->Host = "smtp.hostinger.com";
				//$mail->SMTPAuth = true;
				//$mail->Username = "@gmail.com"; //enter you email address
				//$mail->Password = '@'; //enter you email password
				//$mail->Port = 587;           
				//$mail->SMTPOptions = array(
				//'ssl' => array(
				//'verify_peer' => false,
				//'verify_peer_name' => false,
				//'allow_self_signed' => true
				//)
				//);                                                       

				// $mail->setFrom('@gmail.com','Ludo');

				//Recipients
				//$mail->addAddress($email);              

				//Content
				// $mail->isHTML(true);                                  
				// $mail->Subject = 'Verification Code:';
				//  $mail->Body = $message;

				//if($mail->send())
				//$_SESSION['success']="We've sent a verification code to your email - $email";
				//else
				//$_SESSION['error']="Mail can`t be sent please cheak your mail.";
				//$_SESSION['user-otp'] = $email;
				//$_SESSION['email']=$email;
				//header('location: user-otp.php');
			} catch (PDOException $e) {
				$_SESSION['error'] = $e->getMessage();
				header('location: login.php');
			}
		} else {
			$_SESSION['error'] = "Confirm password not matched!";
		}
	}
	$pdo->close();
} else {
	$_SESSION['error'] = 'Fill up user form first';
}

header('location: login.php');
