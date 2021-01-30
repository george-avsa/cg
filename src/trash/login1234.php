<?php 
require "../libs/db.php";
	$user = R::findOne('user', 'login = ?', array($_POST['input_id']));
		if ($user)
			{
			if (password_verify($_POST['password'], $user->password))
				{	
					$_SESSION['logged_user'] = $data['input_id'];
					echo "123";
				} else
				{
					echo "Неверный пароль!";
				}
			}else
			{
				echo "Такого пользователя не существует!";				
			}
?>