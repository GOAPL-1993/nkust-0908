<?php
    //本程式實際執行張貼（插入）資料記錄
    //先取得要新增的訊息（從表單來，POST協定）
    //取得的訊息放到$message變數中備用
    $message = $_POST["message"];

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bbs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //要使用SQL 的 INSERT INTO 指令 
    $sql = "INSERT INTO news (message) values ('$message')";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    //資料庫操作完畢之後，隨即轉址回練習首頁
    header("Location: index.php");
    exit;
?>