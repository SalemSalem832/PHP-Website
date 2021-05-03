<?php
  //session variables are released then the session is destroyed and the user is redirected to index
  session_start();
  session_unset();
  session_destroy();
  header('Location:http://localhost/CW1/index.php');
?>
