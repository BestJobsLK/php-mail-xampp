<?php 
	$status = '';
	// checking if the form is submit
	if ( isset($_POST['submit']) ) {
		$fullname	= $_POST['fullname'];
		$email		= $_POST['email'];
		$subject	= $_POST['subject'];
		$message	= $_POST['message'];

		$to	 		  = 'intotechtv@gmail.com';
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<b>From:</b> {$fullname} <br>";
		$email_body   .= "<b>Subject:</b> {$subject} <br>";
		$email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			$status = '<p class="success">Message Sent Successfully.</p>';
		} else {
			$status = '<p class="error">Error: Message Was Not Sent.</p>';
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<h1>Contact Us</h1>
		<?php echo $status; ?>
		<form action="contact-us.php" method="post">
			<p>
				<label for="fullname">Full Name *:</label>
				<input type="text" name="fullname" id="fullname" required>
			</p>

			<p>
				<label for="email">Email *:</label>
				<input type="email" name="email" id="email" required>
			</p>

			<p>
				<label for="subject">Subject *:</label>
				<input type="text" name="subject" id="subject" required>
			</p>

			<p>
				<label for="message">Message *: </label>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</p>
			<p>
				<button type="submit" name="submit">Send Message</button>
			</p>


		</form>


	</div> <!-- .container -->
</body>
</html>