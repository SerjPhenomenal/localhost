<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "checkbox";
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn)
	die("Connection failed: ");
