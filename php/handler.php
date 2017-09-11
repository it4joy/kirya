<?php

$to = "rubxoz@cbx.ru";
$title;

$headers  = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";

$success_page = "http://xn--90amdhskf9a2c6b.xn--p1ai/success.php";
$error_page = "http://xn--90amdhskf9a2c6b.xn--p1ai/failure.php";

$user = "Посетитель сайта";

// order-form;

if( $_POST['type'] == 'order-form' ) {
	if( !empty($_POST) ) {
		$title = "Сообщение с сайта - заявка";
		$headers .= "From: \"".$_POST['name']."\r\n";
		$msg = "
			<html><body>
				<h3>Получено сообщение с сайта - заявка на продукцию или услугу</h3>
				<p><b>Категория услуг:</b> ".$_POST['service-category']."</p>
				<p><b>Имя:</b> ".$_POST['name']."</p>
				<p><b>Номер телефона:</b> ".$_POST['phone']."</p>
				<p><b>Посетитель интересуется:</b> ".$_POST['product']."</p>
				<p><b>Комментарий:</b> ".$_POST['comment']."</p>
			</body></html>";

		if(mail($to, $title, $msg, $headers)) {
			header("Location: $success_page");
		} else {
			header("Location: $error_page");
		}
	}
}


// callback-form;

if( $_POST['type'] == 'callback-form' ) {
	if( !empty($_POST) ) {
		$title = "Сообщение с сайта - заявка на обратный звонок";
		$headers .= "From: \"".$_POST['phone']."\r\n";
		$msg = "
			<html><body>
				<h3>Получено сообщение с сайта - заявка на обратный звонок</h3>
				<p><b>Имя:</b> ".$_POST['name']."</p>
				<p><b>Номер телефона:</b> ".$_POST['phone']."</p>
			</body></html>";

		if(mail($to, $title, $msg, $headers)) {
			header("Location: $success_page");
		} else {
			header("Location: $error_page");
		}
	}
}


// feedback-form;

if( $_POST['type'] == 'feedback-form' ) {
	if( !empty($_POST) ) {
		$title = "Сообщение с сайта - из формы обратной связи";
		$headers .= "From: \"".$_POST['name']."\r\n";
		$msg = "
			<html><body>
				<h3>Получено сообщение с сайта - из формы обратной связи</h3>
				<p><b>Имя:</b> ".$_POST['name']."</p>
				<p><b>Номер телефона:</b> ".$_POST['phone']."</p>
				<p><b>E-mail:</b> ".$_POST['email']."</p>
				<p><b>Комментарий:</b> ".$_POST['comment']."</p>
			</body></html>";

		if(mail($to, $title, $msg, $headers)) {
			header("Location: $success_page");
		} else {
			header("Location: $error_page");
		}
	}
}

?>