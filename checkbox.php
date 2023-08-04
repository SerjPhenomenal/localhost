<?php require_once 'connection.php';
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['Name'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM `Users_info` WHERE `id` LIKE " . $id;
$infos = mysqli_query($conn, $sql);
$infos = mysqli_fetch_assoc($infos);
$_SESSION['first'] = $infos['first'];
$_SESSION['second'] = $infos['second'];
$_SESSION['third'] = $infos['third'];
$_SESSION['fourth'] = $infos['fourth'];
//print_r(var_dump($_SESSION));
?>
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
			<form action="checkbox-handler.php" class="check-form" method="POST">
				<div class="item">
					<div class="checkbox-item">
						<input type="checkbox" class="checkbox" name="first" <?php if ($_SESSION['first'])
																					echo ("checked"); ?>>
						<label> First checkbox </label>
					</div>
					<div class="btn btn-discr" id="first"> + </div>
				</div>
				<label class="info option" id="first-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </label>
				<div class="item">
					<div class="checkbox-item">
						<input type="checkbox" class="checkbox" name="Second" <?php if ($_SESSION['second'])
																					echo ("checked"); ?>>
						<label> Second checkbox </label>
					</div>
					<div class="btn btn-discr" id="Second"> + </div>
				</div>
				<label class="info option" id="second-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </label>
				<div class="item">
					<div class="checkbox-item">
						<input type="checkbox" class="checkbox" name="Third" <?php if ($_SESSION['third'])
																					echo ("checked"); ?>>
						<label> Third checkbox </label>
					</div>
					<div class="btn btn-discr" id="Third"> + </div>
				</div>
				<label class="info option" id="third-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </label>
				<div class="item">
					<div class="checkbox-item">
						<input type="checkbox" class="checkbox" name="Fourth" <?php if ($_SESSION['fourth'])
																					echo ("checked"); ?>>
						<label> Fourth checkbox </label>
					</div>
					<div class="btn btn-discr" id="Fourth"> + </div>
				</div>
				<label class="info option" id="fourth-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </label>
				<input class="btn btn-primary buttons" type="submit" value="Сохранить">
				<a href="unset-session.php" class="btn btn-danger buttons"> Выйти </a>
			</form>

		</div>

	</div>
	<script>
		const first = document.getElementById('first')
		first.onclick = function() {
			first_label = document.getElementById('first-label')
			first_label.classList.toggle("option")
		}
		const second = document.getElementById('Second')
		second.onclick = function() {
			second_label = document.getElementById('second-label')
			second_label.classList.toggle("option")
		}
		const third = document.getElementById('Third')
		third.onclick = function() {
			third_label = document.getElementById('third-label')
			third_label.classList.toggle("option")
		}
		const fourth = document.getElementById('Fourth')
		fourth.onclick = function() {
			fourth_label = document.getElementById('fourth-label')
			fourth_label.classList.toggle("option")
		}
	</script>


</body>

</html>