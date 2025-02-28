<?php 
include 'db.php';
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
        <a class="navbar-brand" href="admin.php">Admin Tickets</a>
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
        <div class="w-75 text-center">
            <h2>訂票管理</h2>
            <table class="table table-bordered text-center">
                <tr>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Phone</td>
                    <td>manage</td>
                </tr>
                <?php 
                    /* $dsn = "mysql:host=localhost;dbname=th55j_north;charset=utf8";
                    $pdo = new PDO($dsn,"root",""); */
                $tickets=$pdo->query("select * from `tickets`")->fetchAll();
                foreach($tickets as $ticket):
                ?>
                <tr>
                    <td><?=$ticket['firstname'];?></td>
                    <td><?=$ticket['lastname'];?></td>
                    <td><?=$ticket['phone'];?></td>
                    <td>
                        <button class="btn-edit m-1 btn btn-primary" data-id="<?=$ticket['id'];?>">編輯</button>
                        <button class="btn-del m-1 btn btn-danger" data-id="<?=$ticket['id'];?>">刪除</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div id="modal"></div>

    <footer class="d-flex flex-column justify-content-center align-items-center fixed-bottom pb-2">
        <div id="share-info" class="social d-flex justify-content-center align-items-center">
            <img id="fb" src="./img/facebook.png" alt="">
            <img id="google" src="./img/google.png" alt="">
            <img id="ig" src="./img/ig.png" alt="">
        </div>
        <div id="footer">
            Copyright &copy; 2024 FIBEX All Rights Reserved
        </div>
    </footer>
    <script>

    $(".btn-edit").on("click",function(){
        let id=$(this).data("id");
       //console.log(id);
        $.get("edit_ticket.php",{id},function(modal){
            $("#modal").html(modal);
            $("#EditModal").modal("show");
        });
    });

    $(".btn-del").on("click",function(){
        let id=$(this).data("id");
        if(confirm("確定要刪除這筆訂單嗎?")){
            $.post("del_ticket.php",{id},function(res){

                location.reload();
            });
        }
    });
    </script>
</body>


</html>