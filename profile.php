<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Cybersecurity Solutions</title>
    <link rel="stylesheet" href="assets/nav.css">
    <link rel="stylesheet" href="assets/styles_schedule.css">
    <link rel="stylesheet" href="assets/styles_profile.css">
    <link rel="stylesheet" href="assets/styles_login_bar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
      include('templates/login_bar.php');
      include('templates/nav.php');
      include('backend/conn.php');
      //checks if session is online to make sure that an unlogged user cannot access an empty profile page\
      //also checks if user has a meeting if they are trying to access the profile page, if not they are told to book one
      if(!empty($_SESSION['email'])){
      $email=$_SESSION['email'];
      $user_data= mysqli_query($db,"SELECT * FROM meetings WHERE email = '$email';") ;
      if (mysqli_num_rows($user_data) == 0 ){
        echo "<h1>You do not have a meeting scheduled, please visit any of the solutions pages to schedule a meeting</h1>";
        return false;
      }
      //updates date and time if user whishes to do so
      $data=mysqli_fetch_assoc($user_data);
      if (isset($_POST['submit'])){
        if(!empty($_POST['date']) && !empty($_POST['time'])){
          $date=$_POST['date'];
          $time=$_POST['time'];
          $email=$_POST['email'];
          mysqli_query($db,"UPDATE meetings SET meeting_date='$date' WHERE email='$email'");
          mysqli_query($db,"UPDATE meetings SET meeting_time='$time' WHERE email='$email'");
        }
        header("Location: http://localhost/CW1/profile.php");
      }
      //deletes meeting if users wants to cancel the meeting
      if (isset($_POST['delete'])){
        mysqli_query($db,"DELETE FROM meetings WHERE email='$email'");
        header("Location: http://localhost/CW1/index.php");
      }
    ?>
    <form class="profile" action="profile.php" method="post">
      <h1>Meeting: </h1>
      <div class="names">
        <input type="text" name="firstn" value="<?php echo $data['first_name'];?>" readonly>
        <input type="text" name="lastn" value="<?php echo $data['last_name']; ?>" readonly>
      </div>
      <div class="info">
        <input type="text" name="email" value="<?php echo $data['email'];?>" readonly>
        <input type="text" name="organization" value="<?php echo $data['org_name'];?>" readonly>
      </div>
      <div class="solutions">
        <input type="text" name="solution" value="<?php if($data['solution']=='org'){echo "Organizational Solutions";}else{echo "Cybersecurity Solutions";}?>" readonly>
        <input type="text" name="service" value="<?php echo $data['service'];?>" readonly>
      </div>
      <div class="datetime">
        <input type="date" name="date" value="<?php echo date("Y-m-d",strtotime($data['meeting_date']));?>">
        <input type="time" name="time" value="<?php echo $data['meeting_time']; ?>">
      </div>
      <input type="submit" name="submit" value="Update">
      <input id="cancel" type="submit" name="delete" value="Cancel Meeting">
    </form>
  </body>

  <?php }if(empty($_SESSION['email'])){ echo '<h1>ACCESS DENIED: YOU MUST BE LOGGED IN TO VIEW THIS PAGE!</h1>';};?>

</html>
