<?php 
require "../libs/db.php";
	$user = R::findOne('user', 'login = ?', array($_SESSION['logged_user']));
	echo $user->status;
 ?>