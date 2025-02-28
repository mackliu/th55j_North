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
        <a class="navbar-brand" href="">首頁</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a id="home" class="nav-link" href="home.html">Home</a>
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
          <li class="nav-item">
            <a id="search" class="nav-link" href="search.html">Search</a>
          </li>
        </ul>
      </nav>
    <h2 class="text-center">查詢結果</h2>
    <div class="d-flex justify-content-center mt-5">
        <?php
          /* $dsn = "mysql:host=localhost;dbname=th55j_north;charset=utf8";
          $pdo = new PDO($dsn,"root",""); */
          include "db.php";
          
          $sql=" select * from `tickets` where "; 

          $tmp=[];
          /* if(!empty($_POST['firstname'])){
            $tmp[]= " `firstname` = '{$_POST['firstname']}'";
          } */
          if(!empty($_POST['firstname'])){
            $tmp[]= " `firstname` like '%{$_POST['firstname']}%'";
          }

          /* if(!empty($_POST['lastname'])){
            $tmp[]= " `lastname` = '{$_POST['lastname'}'";
          } */
          if(!empty($_POST['lastname'])){
            $tmp[]= " `lastname` like '%{$_POST['lastname']}%'";
          }

          /* if(!empty($_POST['phone'])){
            $tmp[]= " `phone` = '{$_POST['phone']}'";
          } */
          if(!empty($_POST['phone'])){
            $tmp[]= " `phone` like '%{$_POST['phone']}%'";
          }

          $sql .= join(" AND ",$tmp);
          //echo $sql;
         ?>
          <table class="table table-bordered text-center w-50">
            <tr>
              <td>First name</td>
              <td>Last name</td>
              <td>Phone</td>
            </tr>
         <?php
          $rows=$pdo->query($sql)->fetchAll();
          foreach($rows as $row):
            ?>
            <tr>
              <td><?=$row['firstname'];?></td>
              <td><?=$row['lastname'];?></td>
              <td><?=$row['phone'];?></td>
            </tr>
          <?php
          endforeach;
        ?>
      </table>
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