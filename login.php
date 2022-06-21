<?php
include 'includes/session.php';
if (isset($_SESSION['ese_never']))
  header('location: index.php');
?>
<html>

<head>
  <meta name="viewport" content="wlogin_idth=device-wlogin_idth, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title> SABTIME | Login </title>
</head>
<body>
  <div class="login-wrap">
    <div class="login-html">
     <center> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <div class="sign-in-htm">
          <form action="verify.php" method="post">
            <div class="group">
              <label for="user" class="label">Phone</label>
              <input id="user" type="text" class="input" required name="contact" value="<?php if (isset($_SESSION['contact'])) echo $_SESSION['contact']; ?>">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" class="input" data-type="password" required name="password" value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
            </div>
            <div class="foot-lnk">
              <center> <?php
                        if (isset($_SESSION['error'])) {
                          echo "
          <div class='text-center' style='color:green;'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
                          unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                          echo "
          <div class='text-center' style='color:green;'>
            <p>" . $_SESSION['success'] . "</p> 
          </div>
        ";
                          unset($_SESSION['success']);
                        }
                        ?></center>
            </div>
            <div class="group">
              <input type="submit" class="button" value="LOG IN" name="login">
            </div>
       
          </form>
        </div>


        <div class="sign-up-htm">
          <form action="add_user.php" method="post" onsubmit="myclick();">

            <div class="foot-lnk">
              <center> <?php
                        if (isset($_SESSION['error'])) {
                          echo "
          <div class='text-center' style='color:green;'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
                          unset($_SESSION['error']);
                        }
                        ?></center>
            </div>
            <div class="group">
              <label for="user" class="label">UserName</label>
              <input id="user" type="text" name="name" class="input" required value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>">
            </div>
            <div class="group">
              <label for="user" class="label">Contact</label>
              <input id="user" type="tel" class="input" name="contact" required value="<?php if (isset($_SESSION['contact'])) echo $_SESSION['contact']; ?>">
            </div>
            <div class="group">
              <label for="user" class="label">Email</label>
              <input id="user" type="email" class="input" name="email" required value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" name="password" class="input" data-type="password" required value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
            </div>
            <div class="group">
              <label for="pass" class="label">Confirm Password</label>
              <input id="pass" type="password" class="input" data-type="password" name="cpassword" required>
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign Up" name="signup">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function myclick() {
      document.getElementById('signup').disabled = "true";
    }
  </script>
</body>

</html>