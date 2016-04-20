<!DOCTYPE html>
<html>
<head>
  <title>Real Estate Oppotunity - Contact Us</title>
  <?php include_once("../includes/head.php") ?>
</head>
<body>
  <div id="wrapper">
    <?php include_once("../includes/header.php") ?>
    <div id="content" class="clear">
      <h2>Contact Us</h2>
      <form id="contact_form" action="./thankyou.php" method="post">
        <p>
          <label form="name">Name</label><br>
          <input type="text" name="name" size="45" placeholder="Name">
        </p>
        <p>
          <label form="email">Email</label><br>
          <input type="text" name="email" size="45" placeholder="Email">
        </p>
        <p>
          <label form="phone">Phone</label></br>
          <input type="text" name="phone" size="45" placeholder="Phone">
        </p>
        <p>
          <label form="msg">Message</label><br>
          <textarea rows="10" cols="43" name="msg" placeholder="Message"></textarea>
        </p>
        <p>
          <input type="submit" value="Send">
          <input type="button" value="Cancel">
      </form>
    </div>
    <?php include_once("../includes/footer.php") ?>
  </div>
  <?php include_once("includes/javascripts.php") ?>
</body>
<?php include_once("../analyticstracking.php") ?>
</html>
