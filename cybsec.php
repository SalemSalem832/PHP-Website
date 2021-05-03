<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES Cybersecurity Solutions</title>
    <link rel="stylesheet" href="assets/styles_sec.css">
    <link rel="stylesheet" href="assets/nav.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/background2.css">
    <link rel="stylesheet" href="assets/products.css">
    <link rel="stylesheet" href="assets/styles_login_bar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('templates/login_bar.php'); ?>
    <?php include('templates/nav.php'); ?>
    <div class="products">
      <?php include('templates/products1.php') ?>
    </div>
    <?php $source=$_SERVER['REQUEST_URI'] ?>
    <?php include('templates/footer.php') ?>
  </body>
</html>
