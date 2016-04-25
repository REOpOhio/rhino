<!DOCTYPE html>
<html>
<head>
  <title>Real Estate Oppotunity - Residential</title>
  <?php include_once("../includes/head.php") ?>
</head>
<body class="singular page page-id-2 page-template-default paper-texture">
    <!-- Header and navigation -->
    <?php include_once("../includes/header.php") ?>

    <!-- Content Body -->
    <div class="super-container primary-font-color-alt">
    	<div class="container">
      	<div class="sixteen columns alpha">
      		<div id="primary">
      			<div id="content">
      				<div class="main">
      					<header class="entry-header">
      						<h1 class="entry-title">Contact Us</h1>
      					</header>
    						<div class="entry-content">
    							<p><b>Office Hours:</b> M-F 9AM to 4:30PM</p>
                  <p>
                    <b>Maintenance line:</b> (614) 501-4444<br />
                    <b>24-Hour Emergency Maintenance:</b> (614) 452-5289<br />
                    <em>Response turnaround time is 24 to 48 hours for non-emergency requests.</em>
                  </p>
                  <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Area -->
    <?php include_once("../includes/footer.php") ?>
  </div>
  <?php include_once("../includes/javascripts.php") ?>
</body>
<?php include_once("../analyticstracking.php") ?>
</html>
