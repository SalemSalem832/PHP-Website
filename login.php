<?php
//when submit is clicked if email and password arent empty, they are processed to see if the passwords match and if the email exists
if(isset($_POST['submit'])){
include('backend/conn.php');
if (!empty($_POST["email"]) && !empty($_POST["password"])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $email_error='';
  $pass_error='';

  $user_check = mysqli_query($db,"SELECT * FROM users WHERE email = '$email';") ;
  if (mysqli_num_rows($user_check) > 0 ){
    $data=mysqli_fetch_assoc($user_check);
    if (password_verify($password,$data['password'])) {
      session_start();
      $_SESSION['email'] = $data['email'] ;
      header('Location:http://localhost/CW1/index.php');
    }else{
    $pass_error = "Incorrect Password!";
  }}else{
    $email_error= "Email does not exist!";
    $pass_error= "Check Email!";
  }}
  //cookie is created to store username if the user clicked on remember me
  if(!empty($_POST["email"])){
    if(!empty($_POST["user_cookie"])){
        $email=$_POST['email'];
        setcookie("email", $email, time()+3600);
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Login Page</title>
    <link rel="stylesheet" href="assets/styles_login_signup.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="form">
      <h1>Log-in</h1>
      <form id="form" class="login" action="login.php" method="post">
        <input id="email" type="text" name="email" value="<?php echo $_COOKIE['email']?>" placeholder="Email:">
        <div class="remember">
          <label for="user_cookie">Remember Me:</label>
          <input type="checkbox" name="user_cookie" value="remem">
        </div>
        <input id="password" type="password" name="password" value="" placeholder="<?php if(isset($_POST['submit'])){if($pass_error!=''){echo $pass_error;}}else{echo'Password:';} ?>">
        <input type="submit" name="submit" value="Log-In">
      </form>
      <!-- JS validation is linked for front end validation-->
      <script src="js/login_validation.js" charset="utf-8"></script>
    </div>
  </body>
</html>
