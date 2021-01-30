<?php
require "../libs/db.php";
$user = R::findOne('user', 'login = ?', array($_SESSION['logged_user']));
$tasks = R::findAll('task','idresponsable = ?', array($user->id));
$tasks_array = array();
$count = 1;
$sum_array = array();
foreach ($tasks as $key) {
	// $task_number = 'task'.$count;
	$array = array(
		id => $key->id,
		status => $key->status,
		name => $key->name,
		deadline => $key->deadline,
		type => $key->type,
		postdate => $key->postdate,
		posttime => $key->posttime,
		comment => $key->comment,
		idresponsable => $key->idresponsable,
		idcreator => $key->idcreator,
	);
	$stack = array($array);
	$sum_array = array_merge($sum_array, $stack);
	$arraybig = array(
		$task_number => $array,
	);
	$tasks_array = array_merge($tasks_array, $arraybig);
	$count++;
}
$global_array = array(
	tasks => $sum_array,
);
echo json_encode($global_array);
// $out = array(
// 	$count => array()
// );
// echo json_encode($tasks_array);
// $task = R::findOne('task', 'id_responsable = ?', $user->id);
// echo $task->id;
?>