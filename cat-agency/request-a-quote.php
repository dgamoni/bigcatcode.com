<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the form fields and remove whitespace.
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);
	$site = trim($_POST["site"]);

	// Check that data was sent to the mailer.
	if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// Set a 400 (bad request) response code and exit.
		echo "Oops! There was a problem with your submission. Please complete the form and try again.";
		exit;
	}

	// Set the recipient email address.
	// FIXME: Update this to your desired email address.

	$recipient = "dgamoni@gmail.com";

	// Set the email subject.
	$subject = "Quote request from $name";

	// Build the email content.
	$email_content = "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Message:\n$message\n";
	if ( $site ) {
		$email_content .= "Site:\n$site\n";
	}	

	// Build the email headers.
	$email_headers = "From: $name <$email>";

	// Send the email.
	if (mail($recipient, $subject, $email_content, $email_headers)) {
		// Set a 200 (okay) response code.
		echo "Thank You! Your message has been sent.";
	} else {
		// Set a 500 (internal server error) response code.
		echo "Oops! Something went wrong and we couldn't send your message.";
	}

} else {
	// Not a POST request, set a 403 (forbidden) response code.
	echo "There was a problem with your submission, please try again.";
}
