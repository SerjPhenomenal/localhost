<?php
session_start();
require_once 'connection.php';
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
if (isset($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$pswdconfirm = $_POST['password-confirm'];
	$name = trim((string)$name);
	$email = trim((string)$email);
	$phone = trim((string)$phone);
	$password = (string)$password;
	$pswdconfirm = (string)$pswdconfirm;
	$error = null;
	if ($name == '')
		$error = 'Введите имя';
	else if ($password != $pswdconfirm)
		$error = 'Пароли не совпадают';
	else if ($phone == '')
		$error = 'Введите номер телефона';
	else if (phone_check($phone) == False)
		$error = 'Введите номер телефона';
	else if ($email == '')
		$error = 'Введите email';
	else if (email_check($email) == False)
		$error = 'Неверно введён email';
	else if (!(is_name($name)))
		$error = 'Неверно введено имя';
	if (isset($error)) {
		$_SESSION['message'] = $error;
		header('Location: ../register-page.php');
	} else {
		$phone = (int)$phone;
		$password = md5($password);
		if (mysqli_connect_errno()) {
			printf("Соединение не удалось: %s\n", mysqli_connect_error());
			exit();
		}
		if (!mysqli_query($conn, "INSERT INTO `Users_info`(`id`, `Name`, `email`, `phone`, `password`) VALUES (NULL,'$name','$email','$phone','$password')")) {
			printf("Сообщение ошибки: %s\n", mysqli_error($conn));
			exit();
		}
		//mysqli_query($conn, "INSERT INTO `Users_info`(`id`, `Name`, `email`, `phone`, `image`, `password`) VALUES (NULL,'$name','$email','$phone','$path','$password')");
		$_SESSION['message'] = 'Вы успешно зарегистрировались';
		header('Location: /checkbox.php');
	}
}
function email_check($arg)
{
	preg_match("/\w+@\w+\.\w+/", $arg, $matches);
	if ($matches)
		return True;
	else
		return False;
}
function phone_check($arg)
{
	if (($arg[0] == 8) and (strlen($arg) == 11))
		return True;
	else
		return False;
}
function is_name($arg_name)
{
	preg_match("/[0-9]/", $arg_name, $matches);
	if ($matches)
		return False;
	else {
		preg_match("/\w/", $arg_name, $match_name);
		if ($match_name)
			return True;
		else
			return False;
	}
}
