<?php
require "../libs/db.php"; 
$task = R::findOne('task', 'id = ?', array($_POST['text']));
R::exec('UPDATE `task` SET `status` = :status WHERE id = :id', [
  'status' => 2,
  'id' => $task->id,
]);
echo "Статус задание обновлен";
 ?>