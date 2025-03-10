<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="site-title">2025國際交響樂團演奏會(ISOC)</title>
  <script src="./library/jquery.js"></script>
  <link rel="stylesheet" href="./library/bootstrap.css">
  <script src="./library/bootstrap.js"></script>
  <link rel="stylesheet" href="./library/index.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img id="logo" src="./img/logo.jpg" style="width: 50px;height: auto;">
    <a class="navbar-brand" href="">首頁</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!-- <a id="home" class="nav-link" href="home.html">Home</a> -->
        <a id="home" class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a id="news" class="nav-link" href="news.html">News</a>
      </li>
      <li class="nav-item">
        <a id="performance" class="nav-link" href="performance.html">Performance</a>
      </li>
      <li class="nav-item">
        <a id="tickets" class="nav-link" href="tickets.html">Tickets</a>
      </li>
    </ul>
  </nav>
  <main class="p-5">
  <!--設定輪播圖片的區塊大小為w-75、置中mx-auto-->
  <div id="carousel" class="carousel slide w-50 m-auto" data-ride="carousel">
    <!--下方指標區-->
    <ol class="carousel-indicators">
      <!--第1個指標區塊-->
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <!--第2個指標區塊-->
      <li data-target="#carousel" data-slide-to="1"></li>
      <!--第3個指標區塊-->
      <li data-target="#carousel" data-slide-to="2"></li>
      <!--第4個指標區塊-->
      <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
    <!--輪播內容區-->
    <div class="carousel-inner">
      <!--第1個輪播區塊-->
      <div class="carousel-item active">
        <!--輪播圖片-->
        <img src="./img/slide-01.png" class="d-block w-100" style="height:40vh">
        <!--說明文字區-->
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
     <!--第2個輪播區塊-->
      <div class="carousel-item">
        <img src="./img/slide-02.png" class="d-block w-100" style="height:40vh">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <!--第3個輪播區塊-->
      <div class="carousel-item">
        <img src="./img/slide-03.png" class="d-block w-100" style="height:40vh">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <!--第4個輪播區塊-->
      <div class="carousel-item">
        <img src="./img/slide-04.png" class="d-block w-100" style="height:40vh">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
     <!--左指標器-->
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <!--右指標器-->
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--活動資訊區-->
  <div id="event-info" class="w-75 mx-auto mt-4">
    <h3>Event Info</h3>
    <article style="font-size: 20px;">
      <?php
      //撰寫取得資料的sql語法
      $sql="select `value` from `settings` where `item`='event_info'";
      
      //執行SQL語法，並把結果指定給變數$event_info
      $event_info=$pdo->query($sql)->fetch();
      
      //使用echo輸出活動資訊
      echo nl2br($event_info['value']);
      ?>
    </article>
  </div>   
  </main>
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