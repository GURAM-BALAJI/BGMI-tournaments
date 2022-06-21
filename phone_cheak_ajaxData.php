<?php
//Include database configuration file
include 'includes/session.php';

if(isset($_POST["phone"]) && !empty($_POST["phone"]))
{
    $phone=$_POST["phone"];

$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM users WHERE user_phone=:phone AND user_delete='0'");
    $stmt->execute(['phone'=>$phone]);
 $data=$stmt->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
         echo "<center><div class='form-group'>";
         echo $row['first_name'];
         echo "<div class='col-sm-9'>";
        echo "<img style='width:100px;height:100px;' src='";
        echo (!empty($row['user_photo'])) ? 'images/'.$row['user_photo'] : 'images/profile.jpg';
        echo "' class='img-circle' alt='User Image'>";
        echo "</div></div></center>";
     }
 }else{
     echo "User Phone Number Not Found..!";
 }
  $pdo->close();
}
?>