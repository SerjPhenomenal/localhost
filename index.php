<?php require_once 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="form-group div-form">
			<form action="check-login.php" class="my-form" method="POST">
				<p>Введите email</p>
				<input class="form-control" type="email" name="email">
				<p>Введите пароль</p>
				<input class="form-control" type="password" name="password">
				<br>
				<input class="btn btn-primary" type="submit" value="Войти">
				<a href="register-page.php" class="btn btn-primary"> Зарегистрироваться </a>
			</form>
			<?php
			if (isset($_SESSION['message'])) {
				echo '<p>' . $_SESSION['message'] . '</p>';
				unset($_SESSION['message']);
			}
			?>
		</div>
	</div>
</body>

</html>