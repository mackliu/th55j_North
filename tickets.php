<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $password = $_POST["password"]; // 以上四種是要存進資料庫的內容
    echo $_POST["verify"]; // 使用者輸入的驗證碼
    echo $_POST["verify_ans"]; // 正確驗證碼
    // mysql:host=主機位置、dbname 資料庫名稱、charset 編碼
    $dsn = "mysql:host=localhost;dbname=th55_north;charset=utf8";
    $pdo = new PDO($dsn,"root","");

    // $sql = "select * from `tickets`"; // sql 查詢語句
    // $row = $pdo->query($sql)->fetchAll();

    // print_r($row);


    if($_POST["verify"] != $_POST["verify_ans"]){
        // 當使用者輸入的驗證碼跟正確的驗證碼不相符的時候
        echo "<script>alert('驗證碼是錯誤的')</script>";
        echo "<script>location.href='home.html'</script>";
    }else{
        $insert_sql = "INSERT INTO `tickets` (`id`, `firstname`, `lastname`, `phone`, `password`) VALUES (NULL, '$firstname', '$lastname', '$phone', '$password');";
        $pdo->query($insert_sql);
        echo "<script>location.href='home.html'</script>";
    }

