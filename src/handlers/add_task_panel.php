<?php 
require "../libs/db.php";
$tasks = R::findAll('task');
$sum_array = array();
foreach ($tasks as $key) {
	$array = array (
		status => $key->status,
	);
	$stack = array($array);
	$sum_array = array_merge($sum_array, $stack);
}
$users = R::findAll('user');
$user_tasks = array();
foreach ($users as $user) {
	// нахожджение информации о пользователе
	// нахожджение заданий пользователя
	$counter_of_tasks_6 = 0;
	$counter_of_tasks_1 = 0;
	$counter_of_tasks_4 = 0;
	$tasks_search = R::findAll('task', 'idresponsable = ?', array($user->id));
	foreach ($tasks_search as $key) {
		if ($key->status == 6) {
			$counter_of_tasks_6++;
		} elseif ($key->status == 1) {
			$counter_of_tasks_1++;
		}  elseif ($key->status == 4) {
			$counter_of_tasks_4++;
		}
	}
	$array_user_task = array(
		alltasks => $counter_of_tasks_6,
		inworktasks => $counter_of_tasks_1,
		missedtasks => $counter_of_tasks_4,
	);
	$keklel = array (
		name => $user->name,
		tasks_amount_user => $array_user_task, 
	);
	$stack_array = array($keklel);
	$user_tasks = array_merge($user_tasks, $stack_array);
}
$global_array = array(
	tasks => $sum_array,
	tasks_amount => $user_tasks,
);
echo json_encode($global_array);
 ?>