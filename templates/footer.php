<?php
//checks if email is empty or is already in the system if not it adds it to newsletter table
if(!empty($_POST['news_email'])){
$email2=$_POST['news_email'];
$refferer=$_POST['source'];
$user_check = mysqli_query(mysqli_connect("localhost", "salem", "123", "cw1"),"SELECT * FROM users WHERE email = '$email2';") ;
if (mysqli_num_rows($user_check) > 0 ){
  echo "email already exists!";
}else{
mysqli_query(mysqli_connect("localhost", "salem", "123", "cw1"),"INSERT INTO newsletter(email) VALUES ('$email2')");}}
?>

<footer>
  <div class="copyright">
    <ul>Legal Information:
      <li><a href="#">Legal Documentation</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms and Conditions</a></li>
      <li>Copyright © 2021 Torsti and Edvin Security, Inc. All rights reserved.</li>
    </ul>
  </div>
  <div class="nav">
    <ul>Navigation:
      <li><a href="index.php">Home</a></li>
      <li><a href="cybsec.php">Cybersecurity Solutions</a></li>
      <li><a href="org.php">Organizational Security Solutions</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
  </div>
  <div class="newsletter">
    <div class="socials">
      <ul>Socials:
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Linkedin</a></li>
        <li><a href="#">Youtube</a></li>
      </ul>
    </div>
    <form id="newsletter" class="" action="<?php echo $source ?>" method="post">
      <div class="info">
        Subscribe to our newsletter to get the latest on our security products!
      </div>
      <div class="input">
        <input id="news_email" type="email" name="news_email" placeholder="Enter your email to subscribe...">
        <input type="submit" value="Subscribe">
        <input type="hidden" name="source" value="<?php echo $source ?>">
      </div>
      <script src="js/footer_validation.js" charset="utf-8"></script>
    </form>
  </div>
</footer>
