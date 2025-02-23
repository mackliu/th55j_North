<?php include 'db.php';

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