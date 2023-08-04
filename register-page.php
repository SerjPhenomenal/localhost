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
			<form action="register.php" class="my-form" method="POST">
				<p>Введите Ваше имя</p>
				<input class="form-control" type="name" name="name">
				<p>Введите Ваш email</p>
				<input class="form-control" type="email" name="email">
				<p>Введите Ваш номер телефона</p>
				<input class="form-control" type="tel" name="phone" maxlength="11">
				<p>Введите пароль</p>
				<input class="form-control" type="password" name="password">
				<p>Подтвердите пароль</p>
				<input class="form-control" type="password" name="password-confirm">
				<br>
				<input class="btn btn-primary" type="submit" value="Зарегистрироваться">
			</form>
			<p>
				У вас уже есть аккаунт? - <a class="link-info" href="/login"> авторизируйтесь! </a>
			</p>
		</div>
		<?php
		print_r(var_dump($_SESSION));
		if (isset($_SESSION['message'])) {
			echo '<p> ' . $_SESSION['message'] . '</p>';
			unset($_SESSION['message']);
		}
		?>
	</div>
</body>

</html>