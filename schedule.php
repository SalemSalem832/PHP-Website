<?php
include('backend/conn.php');
//checks if any entries are empty and if not inserts them into meetings table in the database and redirects to index
if(isset($_POST['submit'])){
  if(!empty($_POST['firstn']) && !empty($_POST['lastn']) && !empty($_POST['email2']) && !empty($_POST['organization']) && !empty($_POST['choice']) && !empty($_POST['choice2']) && !empty($_POST['date'])){
    if(!empty($_POST['time']) && !empty($_POST['comments'])){
      $firstn=$_POST['firstn'];
      $lastn=$_POST['lastn'];
      $email2=$_POST['email2'];
      $orgn=$_POST['organization'];
      $solution=$_POST['choice'];
      $service=$_POST['choice2'];
      $date=$_POST['date'];
      $time=$_POST['time'];
      $comments=$_POST['comments'];
      mysqli_query($db, "INSERT INTO meetings(first_name,last_name,email,org_name,solution,service,meeting_date,meeting_time,comments) VALUES('$firstn','$lastn','$email2','$orgn','$solution','$service','$date','$time','$comments')");
      header("Location: http://localhost/CW1/index.php");
}}}
   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Schedule A Meeting</title>
    <link rel="stylesheet" href="assets/styles_schedule.css">
    <link rel="stylesheet" href="assets/nav.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    <form id="schedule" class="schedule" action="schedule.php" method="post">
      <h1>Schedule A Meeting</h1>
      <div class="names">
      <input id="first" type="text" name="firstn" value="" placeholder="First Name">
      <input id="last" type="text" name="lastn" value="<?php if(isset($_POST['submit'])){ echo $_POST['lastn'];}?>" placeholder="Last Name">
      </div>
      <div class="info">
      <input id="email" type="text" name="email2" value="<?php if(isset($_POST['submit'])){ echo $_POST['email2'];}?>" placeholder="Email">
      <input id="organization" type="text" name="organization" value="<?php if(isset($_POST['submit'])){ echo $_POST['organization'];}?>" placeholder="Organization Name">
      </div>
      <div class="solutions">
      Organizational Solutions:
      <input type="radio" name="choice" value="org" >
      Cybersecurity Solutions:
      <input type="radio" name="choice" value="cyb">
      </div>
      <div class="services">
        <label for="choice2">Choose your desired service:</label>
        <select id="choice2" name="choice2">
          <option value="Security Policy">Security Policy</option>
          <option value="Organizational Management">Organizational Management</option>
          <option value="Data Policy">Data Policy</option>
          <option value="Website Security">Website Security</option>
          <option value="Automated Security">Automated Security</option>
          <option value="Network Security">Network Security</option>
        </select>
        </div>
        <div class="datetime">
          Choose the meeting's time and date: <br>
          <input id="date" type="date" name="date" value="">
          <input id="time" type="time" name="time" value="">
        </div>
        <div class="comments">
          Comments:<br>
          <textarea id="comments" name="comments" rows="5" cols="100" placeholder="Type in your comments..."></textarea>
        </div>
        <input type="submit" name="submit" value="Submit">
        <script src="js/schedule_validation.js" charset="utf-8"></script>
        </form>
      </body>
    </html>
