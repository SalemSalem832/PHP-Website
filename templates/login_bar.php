<!-- php is used to change between the pages shown when a user is logged in or not -->
<div class="loginbar">
  <?php session_start();if(!empty($_SESSION['email'])){?>
  <button type="button" name="button"> <a class="loginA" href="profile.php">Profile</a> </button>
  <button type="button" name="button"> <a class="loginA" href="logout.php">Log-out</a> </button>
  <?php }else{ ?>
  <button type="button" name="button"> <a class="loginA" href="login.php">Log-in</a> </button>
  <button type="button" name="button"> <a class="loginA" href="signup.php">Sign-up</a> </button>
  <?php } ?>
</div>
