<?php include 'db.php';

//建立刪除指定id 的資料的SQL語法
$sql="delete from `tickets` where `id`='{$_POST['id']}'";

//執行SQL語法
$pdo->exec($sql);
