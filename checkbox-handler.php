<?php session_start();
require_once('connection.php');
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
print_r(var_dump($_POST));
$first = 0;
$second = 0;
$third = 0;
$fourth = 0;
$id = $_SESSION['id'];
if (isset($_POST['first']))
	$first = 1;
if (isset($_POST['Second']))
	$second = 1;
if (isset($_POST['Third']))
	$third = 1;
if (isset($_POST['Fourth']))
	$fourth = 1;
$_SESSION['first'] = $first;
$_SESSION['second'] = $second;
$_SESSION['third'] = $third;
$_SESSION['fourth'] = $fourth;
print_r(var_dump($third));
if (!(mysqli_query($conn, "UPDATE `Users_info` SET `first` = '$first', `second` = '$second', `third` = '$third', `fourth` = '$fourth' WHERE `id` = '$id'"))) {
	printf("Сообщение ошибки: %s\n", mysqli_error($conn));
	exit();
}
header("Location: /checkbox.php");
