<?php
require "../libs/db.php";
$user = R::findOne('user', 'id = ?', array($_GET['text']));
if ($user->status == 1) {
R::exec('UPDATE `user` SET `status` = :status WHERE id = :id', [
  'status' => 0,
  'id' => $user->id,
]);
echo 'Пользователь замарожен!';
} elseif ($user->status==0) {
	R::exec('UPDATE `user` SET `status` = :status WHERE id = :id', [
	  'status' => 1,
	  'id' => $user->id,
	]);
echo 'Пользователь разблокирован!';
}
 ?>