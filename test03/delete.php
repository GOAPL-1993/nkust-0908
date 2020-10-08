<?php
    //這個程式是用來刪除指定的記錄（id)
    //以下先取得id，放在變數$id中
    $id = $_GET["id"];
    //如果從網址中（GET協定）找不到id，就直接返回
    if ($id==NULL) {
        header("Location: index.php");
        exit;
    }
    require "../includes/config.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //要使用SQL 的 DELETE FROM 指令 
    $sql = "DELETE FROM playlist WHERE id='$id' LIMIT 1";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $conn->query($sql);
    $sql = "DELETE FROM video WHERE id='$id'";//刪播放清單時，把裡面的歌一起也刪了
    $conn->query($sql);
    $conn->close();
    //資料庫操作完畢之後，即轉址回本練習首頁
    header("Location: index.php");
    exit;
?>