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
        <a class="navbar-brand" href="">Admin Tickets</a>
        <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
            <a id="home" class="nav-link" href="ad_home.html">Home</a>
          </li> -->
          <li class="nav-item">
            <a id="news" class="nav-link" href="ad_news.php">News</a>
          </li>
          <!-- <li class="nav-item">
            <a id="performance" class="nav-link" href="ad_performance.html">Performance</a>
          </li> -->
          <li class="nav-item">
            <a id="tickets" class="nav-link" href="ad_tickets.php">Tickets</a>
          </li>
        </ul>
      </nav>

    <div class="d-flex justify-content-center flex-wrap mt-5 px-5">
      <?php 
          $dsn = "mysql:host=localhost;dbname=th55_north;charset=utf8";
          $pdo = new PDO($dsn,"root","");
          
          $sql=" select * from `tickets`"; 
          $rows=$pdo->query($sql)->fetchAll();
    ?>
        <table class="table table-bordered text-center w-50">
            <tr>
              <td>First name</td>
              <td>Last name</td>
              <td>Phone</td>
              <td>manage</td>
            </tr>
         <?php
          $rows=$pdo->query($sql)->fetchAll();
          foreach($rows as $row):
            ?>
            <tr>
              <td><?=$row['firstname'];?></td>
              <td><?=$row['lastname'];?></td>
              <td><?=$row['phone'];?></td>
              <td>
                <button class=" m-1 btn btn-primary">編輯</button>
                <button class=" m-1 btn btn-danger">刪除</button>
              </td>
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
    <script>
        let verify = "";
        let verify_ans = document.getElementById("verify_ans");
        let verify_image = document.getElementById("verify_image");
        // console.log(verify)
        verify = String(Math.floor(Math.random() * 10)) + String(Math.floor(Math.random() * 10)) + String(Math.floor(Math.random() * 10)) + String(Math.floor(Math.random() * 10));
        verify_image.value = verify;

        let verify_arr = verify.split(""); // 會變成陣列 []
        let answer = verify_arr.sort().join(""); // 用sort排序之後，join("") 將陣列轉回字串
        console.log(answer)

        verify_ans.value = answer; // 儲存正確密碼的地方

    </script>
</body>


</html>