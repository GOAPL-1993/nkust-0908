<?php
    //本程式實際執行新影片項目記錄
    //先取得要新增的訊息（從表單來，POST協定）
    //取得的訊息放到$message變數中備用
    $title = $_POST["title"];
    $vid = $_POST["vid"];
    $pid = $_POST["pid"];
    $name = $_POST["name"];

    //如果title跟vid是空的，就返回tvshow.php
    if ($title == NULL||$vid==NULL){
        header ("Location:tvshow.php?pid=$pid&name=$name");
        exit;
    }
    require "../includes/config.php";
    //新增影片之前，先檢查有沒有重複
    $sql = "SELECT * FROM video WHERE vid='$vid'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {//沒有重複才能執行INSERT INTO
        //要使用SQL 的 INSERT INTO 指令 
        $sql = "INSERT INTO video (title, vid, pid) values ('$title', '$vid', '$pid')";
        //以下執行SQL查詢指令，並把結果傳回給$result變數
        $conn->query($sql);
    } 
    $conn->close();
    //資料庫操作完畢之後，隨即轉址回練習首頁
    header("Location: tvshow.php?pid=$pid&name=$name");
    exit;
?>