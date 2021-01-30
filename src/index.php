<?php
require_once 'libs/db.php';

// var_dump($_SESSION['logged_user']);

if (isset($_SESSION['logged_user'])) {
	//var_dump($_SESSION['logged_user']);
	echo "<script>window.location.replace('main.php')</script>";
}
else {
	//var_dump($_SESSION['logged_user']);
	echo "<script>window.location.replace('login.php')</script>";
}
?>