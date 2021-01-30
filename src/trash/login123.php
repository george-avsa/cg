<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="stylesheet" href="style/authorization.css">
</head>
<body>
	<img src="images/CG_dark.svg" alt="" class="logo">
	<div class="login_block">
		<div class="space"></div>
		<form class="login" action="handlers/login.php" method="post">
			<div class="login_block_title">
				Авторизация
			</div>
			<div class="login_block_placeholder">
				<input type="text" class="login_placeholder" placeholder="Логин" name="input_id">
				<input type="text" class="login_placeholder" placeholder="Пароль" name="password">
			</div>
			<div class="login_block_button">
				<input type="submit" class="login_submit" value="Войти" name="enter_btn">
			</div>
		</form>
		<div class="space"></div>
	</div>
</body>
<script src="libs/jquery.js"></script>
</html>
