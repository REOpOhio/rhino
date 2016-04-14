<!DOCTYPE html>
<html>
<?php include_once("../includes/head.php") ?>
<body>
  <div id="wrapper">
    <?php include_once("../includes/header.php") ?>
    <div id="content" class="clear">
      <h2>Contact Us</h2>
      <form id="contact_form" action="" method="post">
        <p>
          <label form="name">Name</label><br>
          <input type="text" name="name" placeholder="Name">
        </p>
        <p>
          <label form="email">Email</label><br>
          <input type="text" name="email" placeholder="email">
        </p>
        <p>
          <label form="phone">Phone</label></br>
          <input type="text" name="phone" placeholder="Phone">
        </p>
        <p>
          <label form="msg">Message</label><br>
          <textarea rows="7" cols="35" name="msg" placeholder="Message"></textarea>
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
