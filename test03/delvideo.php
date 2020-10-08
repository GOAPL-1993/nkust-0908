<?php
    //這個程式是用來刪除指定的記錄（id)
    //以下先取得id，放在變數$id中
    $id = $_GET["id"];
    $pid = $_GET["pid"];
    $name = $_GET["name"];
    //如果從網址中（GET協定）找不到id，就直接返回
    if ($id==NULL) {
        header ("Location:tvshow.php?pid=$pid&name=$name");
        exit;
    }
    require "../includes/config.php";
    
    //要使用SQL 的 DELETE FROM 指令 
    $sql = "DELETE FROM video WHERE id='$id' LIMIT 1";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    $conn->close();
    //資料庫操作完畢之後，即轉址回本練習首頁
    header ("Location:tvshow.php?pid=$pid&name=$name");
    exit;
?>