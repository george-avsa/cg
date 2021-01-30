<?php
require "../libs/db.php";

$clients = R::findAll('clients');
$sum_array = array();
foreach ($clients as $key) {
	// $task_number = 'task'.$count;
	$array = array(
		id => $key->id,
		name => $key->name,
		city => $key->city,
		login => $key->lolgin,
		password => $key->password,
		status => $key->status,
	);
	$stack = array($array);
	$sum_array = array_merge($sum_array, $stack);
}
$group = R::findAll('groupclients');
$group_array = array();
foreach ($group as $key) {
	// $task_number = 'task'.$count;
	$group_cities = R::findAll('citiesgroups', 'idgroup = ?', array($key->id));
		$group_city_array = array();
		foreach ($group_cities as $lol) {
			$array_city = array(
				id => $lol->id,
				city => $lol->city,
				status => $lol->status,
			);
			$stack_cities = array($array_city);
			$group_city_array = array_merge($group_city_array, $stack_cities);
		}
	$array = array(
		id => $key->id,
		name => $key->name,
		login => $key->lolgin,
		password => $key->password,
		status => $key->status,
		cities => $group_city_array,
	);
	$stack = array($array);
	$group_array = array_merge($group_array, $stack);
}
$global_array = array(
	clients => $sum_array,
	group => $group_array,
);
echo json_encode($global_array);
?>