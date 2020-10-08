<?php 
    //此程式用於登出
    //不管Session有哪些內容，一律刪除
    session_start();
    session_destroy();
    //刪除所有Session記錄之後，隨即返回練習首頁
    header("Location: index.php");
    exit;
?>