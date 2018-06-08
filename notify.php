<?php


$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];



$body = "
			NAME : [$name]
			PHONE : [$phone]
			EMAIL : [$email]
			MESSAGE : [$message]
	";


mail ('utkarsh_garg@live.com', "$name contacted you Utkarsh.", "Please find the entry below : \n\n$body \n\n", null, "-f contact@utk1801.com");






?>

