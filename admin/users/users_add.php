<?php
	include '../includes/session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
        $amount = $_POST['amount'];
        $by=$admin['admin_id'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE user_phone=:phone");
		$stmt->execute([ 'phone'=>$contact]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'phone number already taken.';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			if(!empty($filename)){
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $filename=date('Y-m-d').'_'.time().'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/'.$filename);	
			}
try{
	date_default_timezone_set('Asia/Kolkata');
			$today = date('d-m-Y h:i:s a');
			$date = date('Y-m-d');
$stmt = $conn->prepare("INSERT INTO users ( user_email, user_password, first_name, user_phone, user_photo, user_status, user_amount, user_added_date) VALUES ( :email, :password, :firstname, :contact, :photo, :status, :amount, :user_added_date)");
$stmt->execute([ 'email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'contact'=>$contact, 'photo'=>$filename, 'status'=>1, 'amount'=>$amount, 'user_added_date'=>$today ]);
   $stmt_user2 = $conn->prepare("SELECT user_id FROM users WHERE user_phone=:contact");
$stmt_user2->execute(['contact'=>$contact]);
    foreach($stmt_user2 as $row1){
        $user_id=$row1['user_id'];
    };
	if($amount!=0){
    $stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by, date_transaction, transaction_date, present_amount) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by, :date_transaction, :transaction_date, :present_amount)");
$stmt->execute(['transaction_user_id'=>$user_id, 'transaction_send_to'=>'LOGIN CREATED BY ADMIN', 'transaction_amount'=>$amount, 'transaction_method'=>'ADD COINS', 'transaction_added_by'=>$by, 'date_transaction' => $date, 'transaction_date' => $today, 'present_amount'=>$amount]);
	}
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}
}

	header('location: users.php');

?>