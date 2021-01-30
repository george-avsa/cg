<?php 
require "../libs/db.php";
	if (empty($_POST['name_task'])) {
		echo 'Укажите название задания';
	} elseif (empty($_POST['client'])) {
		echo 'Укажите пароль';
	} elseif (empty($_POST['deadline_time'])) {
		echo 'Укажите дедлайн';
	} elseif (empty($_POST['deadline_data'])) {
		echo 'Укажите дедлайн';
	} elseif (empty($_POST['comment'])) {
		echo 'Укажите комментарий';
	} 	else {
		$create_task = R::dispense('task');
		$create_task->name = $_POST['name_task'];
		$create_task->client = $_POST['client'];
		$create_task->type = 'Акция';
		$create_task->idresponsable = $_POST['responsable'];
		$create_task->idcreator = '1';
		$create_task->status = '6';
		$create_task->deadline = $_POST['deadline_data'];
		$create_task->posttime = $_POST['deadline_time'];
		$create_task->comment = $_POST['comment'];
		$id = R::store ($create_task);
		echo 'Задание создано';
	}	
?>