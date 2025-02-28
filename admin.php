<?php
include "./db.php";

//判斷表單是否有送出(isset())，且表單內容是否不為空(!empty())
if(isset($_POST['event_info']) && !empty($_POST['event_info'])){
  //撰寫更新資料的SQL語法
  $sql="update `settings` 
           set `value`='{$_POST['event_info']}' 
         where `item`='event_info'";
  //執行SQL語法
  $pdo->exec($sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025國際交響樂團演奏會(ISOC)</title>
    <script src="./library/jquery.js"></script>
    <link rel="stylesheet" href="./library/bootstrap.css">
    <script src="./library/bootstrap.js"></script>
    <link rel="stylesheet" href="./library/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img id="logo" src="./img/logo.jpg" style="width: 50px;height: auto;">
        <a class="navbar-brand" href="">Admin</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a id="tickets" class="nav-link" href="ad_tickets.php">Tickets</a>
          </li>
        </ul>
      </nav>

    <div class="d-flex  justify-content-center flex-wrap mt-5 px-5">
      <div class="w-50 text-center">
        <h2>活動資訊</h2>
        <form action="?" method="post">
          <div>
            <?php 
            $event_info=$pdo->query("select `value` from `settings` where `item`='event_info'")->fetch();
            ?>
            <textarea name="event_info" id="event_info" cols="80" rows="15"><?=$event_info['value'];?></textarea>
          </div>
          <div>
            <button class="btn btn-primary mx-1">編輯</button>
            <button class="btn btn-warning mx-1" type="reset">重置</button>
          </div>
        </form>
      </div>
    </div>
    <footer class="d-flex flex-column justify-content-center align-items-center fixed-bottom pb-2">
        <div id="share-info" class="social d-flex justify-content-center align-items-center" >
          <img id="fb" src="./img/facebook.png" alt="">
          <img id="google" src="./img/google.png" alt="">
          <img id="ig" src="./img/ig.png" alt="">
        </div>
      <div id="footer">
        Copyright &copy; 2024 FIBEX All Rights Reserved
      </div>
      </footer>
</body>
</html>