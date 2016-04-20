<!DOCTYPE html>
<html>
<head>
  <title>Real Estate Oppotunity - Contact Us</title>
  <?php include_once("../includes/head.php") ?>
  <script>
  	//Delayer Function to automatically send users to a new page after set time limit.
  	function delayer(){
  		window.location = "../index.php";
  	}
	</script>
</head>
<body onload="setTimeout('delayer()',3000);">
  <div id="wrapper">
    <?php include_once("../includes/header.php") ?>
    <div id="content" class="clear">
			<h2>Thanks, <?php echo $_REQUEST['name'] ?>, for Contacting Real Estate Opportunity.</h2>

      <p>We'll respond to you within 24-48 business hours. If this is a maintenance emergency, please use contact the 24-hour maintenance phone number to report any issues.</p>
			<?php
				function spamcheck($field)
				{
					//filter_var() sanitizes the e-mail
					//address using FILTER_SANITIZE_EMAIL
					$field=filter_var($field, FILTER_SANITIZE_EMAIL);

					//filter_var() validates the e-mail
					//address using FILTER_VALIDATE_EMAIL
					if(filter_var($field, FILTER_VALIDATE_EMAIL))
					{
						return TRUE;
					}
					else
					{
						return FALSE;
					}
			  }

			  if (isset($_REQUEST['email']))
			  {
					//if "email" is filled out, proceed
					//check if the email address is invalid
					$mailcheck = spamcheck($_REQUEST['email']);
					if ($mailcheck==FALSE)
					{
						echo "Invalid input";
					}
					else
					{
						//send email
						$name = $_REQUEST['name'];
						// $Lname = $_REQUEST['Lname'];
						// $FullName = $Fname . " " . $Lname;
						$phone = $_REQUEST['phone'] ;
						// $type = $_REQUEST['type'];
						$email = $_REQUEST['email'];
						$message = ($_REQUEST['msg'] . "\r\nThanks,\r\n" .  nl2br($name) . "\r\nEmail:" . nl2br($email) . "\r\nPhone:" . nl2br($phone));
            $to = "dev@reopohio.com";

						// switch($type) {
						// 	case "Information":
						// 		$to = "info@thetivanshow.com";
						// 		break;
						// 	case "Purchase Question":
						// 		$to = "shop@thetivanshow.com";
						// 		break;
						// 	case "Feedback / Comment":
						// 		$to = "info@thetivanshow.com";
						// 		break;
						// 	case "Tech":
						// 		$to = "sysAdmin@thetivanshow.com";
						// 		break;
						// 	default:
						// 		$to = "info@thetivanshow.com";
						// 		break;
						// }

						$headers = "From: $email"  . "\r\n" .
						    "Reply-To: $email"  . "\r\n" .
						    "X-Mailer: PHP/" . phpversion();
						//$headers = implode("\r\n", $headers);

						if(mail( $to, "Contact from REOPOhio.com",
						$message, $headers))
						{
							echo "<div id='message'><h3>Thank you,  $Fname.  Your feedback has been sent. You will be redirected to our homepage.</h3></div>";
						}

					}
				}
			?>

    </div>
    <?php include_once("../includes/footer.php") ?>
  </div>
  <?php include_once("includes/javascripts.php") ?>
</body>
<?php include_once("../analyticstracking.php") ?>
</html>
