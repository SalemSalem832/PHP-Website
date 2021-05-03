<?php
//checks if any entries are empty and email is not already found in the database and inserts them into meetings table in the database and redirects to index
if(isset($_POST['submit'])){
include('backend/conn.php');
if (!empty($_POST["firstn"]) && !empty($_POST["lastn"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["organization"])){
  $firstn=$_POST['firstn'];
  $lastn=$_POST['lastn'];
  $email=$_POST['email'];
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
  $organization=$_POST['organization'];
  $email_error='';

  $email_repeat_check = mysqli_query($db,"SELECT * FROM users WHERE email = '$email';") ;
  if (mysqli_num_rows($email_repeat_check) > 0 ){
    $email_error = 'Email is already signed-up!';
  }
  else{
    $email_error = false;
  }
  if(!($email_error)){
  mysqli_query($db, "INSERT INTO users(first_name,last_name,email,password,org_name) VALUES('$firstn','$lastn','$email','$password','$organization')");
  header("Location: http://localhost/CW1/index.php");}}}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Sign-up Page</title>
    <link rel="stylesheet" href="assets/styles_login_signup.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="form">
      <h1>Sign-up</h1>
      <form id="form" class="signup" action="signup.php" method="post">
        <input id="first" type="text" name="firstn" value="" placeholder="First Name:">
        <input id="last" type="text" name="lastn" value="" placeholder="Last Name:">
        <input id="email" type="text" name="email" value="" placeholder="<?php if(isset($_POST['submit'])){if($email_error!=''){echo $email_error;}}else{echo'Email:';} ?>">
        <input id="password" type="password" name="password" value="" placeholder="Password:">
        <input id="password_retype" type="password" name="password_retype" value="" placeholder="Retype Password:">
        <input id="organization"type="text" name="organization" value="" placeholder="Organization Name:">
        <input type="submit" name="submit" value="Sign-up">
      </form>
      <script src="js/signup_validation.js" charset="utf-8"></script>
    </div>
  </body>
</html>
