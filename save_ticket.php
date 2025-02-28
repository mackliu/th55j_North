<?php include 'db.php';
/*     $dsn = "mysql:host=localhost;dbname=th55j_north;charset=utf8";
    $pdo = new PDO($dsn,"root",""); */
if(isset($_POST['id']) && !empty($_POST['id'])){
  $sql="update `tickets` 
           set `firstname`='{$_POST['firstname']}',
               `lastname`='{$_POST['lastname']}',
               `phone`='{$_POST['phone']}'
         where `id`='{$_POST['id']}'";
  $pdo->exec($sql);
}
header("location:ad_tickets.php");
?>