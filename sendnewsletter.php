<?php

if ( isset( $_POST['email'] ) ) {
	
	// Read the form values
	$success     = false;
	$senderEmail = isset( $_POST['email'] ) ? preg_replace( '/[^\.\-\_\@a-zA-Z0-9]/', '', $_POST['email'] ) : '';

	//Headers
	$to       = 'asifsaheer7034@gamil.com'; // Your Email address goes here.
	$subject  = 'Newslatters';
	$headers  = 'From: Website Contact Form' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	//body message
	$message = 'Email: ' . $senderEmail . '';

	//Email Send Function
	$send_email = mail( $to, $subject, $message, $headers );

    echo ($send_email) ? '<div class="success alert alert-success">Email has been sent successfully.</div>' : '<div class="failed alert alert-danger">Error: Email not Sent.</div>';
} else {
	echo '<div class="failed alert alert-danger">Failed sending your email.</div>';
}

?>