<?php 
require "../libs/db.php";
if(isset($_POST['enter_btn'])){
	$data = $_POST;
	$user = R::findOne('user', 'login = ?', array($data['input_id']));
		if ($user)
			{
			if (password_verify($data['password'], $user->password))
				{	
					$_SESSION['logged_user'] = $data['input_id'];
					echo "<script> window.location.replace('../main.php'); </script>";
				} else
				{
					echo "
				<script> alert('Неверный пароль'); </script>
					";
				var_dump(123);
				}
			}else
			{
				echo "
					<script> alert('Такого аккаунта не существует'); </script>
				";
				echo $user->login;
				
			}
}
?>