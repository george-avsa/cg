<?php 
	require "rb.php";

	R::setup( 'mysql:host=localhost;dbname=cg','root', 'root' );
	if(!R::testConnection()) die('No DB connection!');
	
	session_start();
	header('Cache-Control: no cache');
	session_cache_limiter('private_no_expire');
?>