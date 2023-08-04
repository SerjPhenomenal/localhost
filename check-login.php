<?php
session_start();
require_once('connection.php');
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
if (isset($_POST)) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$email = '"'  . $email . '"';
}
$password = md5($password);
$password = '"'  . $password . '"';
if (check($email, $password, $conn))
	header('Location: ../checkbox.php');
else {
	$_SESSION['message'] = ('Неверно введён email или пароль');
	header("Location: index.php");
}
echo ("<br>");
print_r(var_dump(check($email, $password, $conn)));

function check($arg1, $arg2, $conn)
{
	$sql = "SELECT * FROM `Users_info` WHERE `email` LIKE " . $arg1;
	$infos = mysqli_query($conn, $sql);
	$infos = mysqli_fetch_row($infos);
	print_r(var_dump($infos));
	if ($infos) {
		$sql = "SELECT * FROM `Users_info` WHERE `password` LIKE " . $arg2;
		print_r($sql);
		$lastcheck = mysqli_query($conn, $sql);
		if ($lastcheck) {
			$sql = "SELECT * FROM `Users_info` WHERE `email` LIKE " . $arg1;
			$infos = mysqli_query($conn, $sql);
			$infos = mysqli_fetch_row($infos);
			$_SESSION['id'] = $infos[0];
			$_SESSION['Name'] = $infos[1];
			$_SESSION['email'] = $infos[2];
			$_SESSION['first'] = $infos[3];
			$_SESSION['second'] = $infos[4];
			$_SESSION['third'] = $infos[5];
			$_SESSION['fourth'] = $infos[6];
			return True;
		} else
			return False;
	}
}
