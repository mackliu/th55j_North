<?php include 'db.php';
/*     $dsn = "mysql:host=localhost;dbname=th55j_north;charset=utf8";
    $pdo = new PDO($dsn,"root",""); */
//建立刪除指定id 的資料的SQL語法
$sql="delete from `tickets` where `id`='{$_POST['id']}'";

//執行SQL語法
$pdo->exec($sql);
