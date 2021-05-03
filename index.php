<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Torsti and Edvin Security</title>
    <link rel="stylesheet" href="assets/styles_index.css">
    <link rel="stylesheet" href="assets/nav.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/background.css">
    <link rel="stylesheet" href="assets/styles_login_bar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
      <?php include('templates/login_bar.php'); ?>
      <?php include('templates/nav.php'); ?>
      <div class="about">
        <article>
          <h1>About us</h1>
          <p>We are a company that prides itself on technological efficiency and innovation. We have a brilliant team of organizational and cybersecurity experts that can help you with any security task, no matter how difficult it is. We guarantee that our services are 100% accurate and sufficient to protect you and all your important assets. This guarantee is backed up by our multiple awards in security excellence.</p>
        </article>
        <div class="awards">
          <img id="award1" src="assets/award1.png" alt="award 1">
          <img id="award2" src="assets/award2.png" alt="award 2">
          <img id="award3" src="assets/award3.png" alt="award 3">
        </div>
      </div>
      <div class="testimonials">
            <h1>Testimonials from our customers:</h1>
            <div id="testimonial1">
              <div class="imageFrame">
                <img class="testimonialimg"src="assets/testimonial1.jpg" alt="Testimonial 1">
              </div>
              <blockquote>"Our company trust Edin and Torsti Security fully for all our security needs. They are simply perfect"<br>-Clyde Bronson, CISO EuroPetrol</blockquote>
            </div>
            <div id="testimonial2">
              <div class="imageFrame">
                <img class="testimonialimg"src="assets/testimonial2.jpg" alt="Testimonial 2">
              </div>
              <blockquote>"The services provided by Edvin and Torsit are tailored for our company's needs"<br>-Jane Garcia, Founder Garcia inc.</blockquote>
            </div>
            <div id="testimonial3">
              <div class="imageFrame">
                <img class="testimonialimg"src="assets/testimonial3.jpg" alt="Testimonial 3">
              </div>
              <blockquote>"We dont view their services as an extra cost, they are a huge profit"<br>-Mark Hamilton, CEO EverythingTech</blockquote>
            </div>
            <div class="indicator">
              <button type="button" id="ind1" class="ind" onclick="changeToOne()"></button>
              <button type="button" id="ind2" class="ind" onclick="changeToTwo()"></button>
              <button type="button" id="ind3" class="ind" onclick="changeToThree()"></button>
            </div>
            <script src="js/testimonials.js" charset="utf-8"></script>
      </div>
      <?php $source=$_SERVER['REQUEST_URI'] ?>
      <?php include('templates/footer.php') ?>
  </body>
</html>
