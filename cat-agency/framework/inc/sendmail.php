<?php
add_action( 'wp_ajax_deco_send_mail', 'deco_sendmail' );
add_action( 'wp_ajax_nopriv_deco_send_mail', 'deco_sendmail' );

function deco_sendmail() {
	$name         = $_POST['name'];
	$email_client = $_POST['email'];
	$site         = $_POST['site'];
	$text         = $_POST['message'];

	$res['result'] = 'error';

	$subject = "=?utf-8?B?" . base64_encode( "bigcatcode.agency - обратная связь" ) . "?=";
	$message = "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Обратная связь с сайта bigcatcode.agency</title>
</head>
<body>
<p><strong>Здравствуйте, Андрей!</strong></p>
<p>Пользователь отправил Вам сообщение с сайта bigcatcode.com.
<p><strong>Данные пользователя и текст письма:</strong></p>
<p>Имя: " . $name . "</p>
<p>Email: " . $email_client . "</p>
<p>Site: " . $site . "</p>
<p>Сообщение: " . $text . "</p>
<br>
<p>С уважением,<br>
Ваш <a href='https://bigcatcode.com'>bigcatcode.agency</a></p>
</body>
</html>";
	$headers = "Content-type: text/html, charset=utf8 \r\n";
	$headers .= "From: " . str_replace( 'http://', '', get_bloginfo( 'url' ) ) . " <noreply@" . str_replace( 'http://', '', get_bloginfo( 'url' ) ) . ">\r\n";

	add_filter( 'wp_mail_content_type', create_function( '', 'return "text/html";' ) );


	$email = 'dgamoni@gmail.com';


	if ( wp_mail( $email, $subject, $message, $headers ) ) {
		$res['result'] = 'success';
	}

	echo json_encode( $res );
	die();
}