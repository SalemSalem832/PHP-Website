<?php
// php to send contact us information from form to php if it is validated
include('backend/conn.php');
if(isset($_POST['submit'])){
  if(!empty($_POST['firstn']) && !empty($_POST['lastn']) && !empty($_POST['email2']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    $firstn=$_POST['firstn'];
    $lastn=$_POST['lastn'];
    $email2=$_POST['email2'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    mysqli_query($db, "INSERT INTO contact(first_name,last_name,email,subject,message) VALUES('$firstn','$lastn','$email2','$subject','$message')");}}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Contact Us</title>
    <link rel="stylesheet" href="assets/styles_contact.css">
    <link rel="stylesheet" href="assets/nav.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/background4.css">
    <link rel="stylesheet" href="assets/styles_login_bar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('templates/login_bar.php'); ?>
    <?php include('templates/nav.php'); ?>
    <div class="main">
      <div class="contactinfo">
        <h1>Let's make your organization secure!</h1>
        <span>Contact us for more info</span> <br>
        <span>Adress: Löberöd 85, Åsarp, Sweden</span> <br>
        <span>Phone: 0515-2558841</span> <br>
        <span>Email: info@tes.com</span> <br>
      </div>
      <div class="contact">
        <form id="contacts" class="contact" action="contact_us.php" method="post">
          <div class="names">
          <input id="first" type="text" name="firstn" value="" placeholder="First name">
          <input id="last" type="text" name="lastn" value="" placeholder="Last name">
          </div>
          <div class="info">
          <input id="email" type="text" name="email2" value="" placeholder="Email">
          <input id="subject" type="text" name="subject" value="" placeholder="Subject">
          </div>
          <input id="message" type="text" name="message" value="" placeholder="Leave us a message">
          <input type="submit" name="submit" value="Submit">
        </form>
      </div>
    </div>
    <script src="js/contactus_validationtrial.js" charset="utf-8"></script>
    <?php $source=$_SERVER['REQUEST_URI'] ?>
    <?php include('templates/footer.php') ?>
  </body>
</html>
