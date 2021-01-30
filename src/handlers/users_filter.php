<?php
require "../libs/db.php";

$users = R::findAll('user');
$sum_array = array();
foreach ($users as $key) {
	// $task_number = 'task'.$count;
	$array = array(
		id => $key->id,
		login => $key->login,
		password => $key->password,
		business => $key->business,
		status => $key->status,
		name => $key->name,
	);
	$stack = array($array);
	$sum_array = array_merge($sum_array, $stack);
}
$global_array = array(
	users => $sum_array
);
echo json_encode($global_array);
?>