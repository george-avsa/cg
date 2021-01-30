<?php 
if (!isset($_SESSION['logged_user'])) {
// var_dump($_SESSION['logged_user']);
	echo "<script>window.location.replace('../login.php')</script>";
}
?>