<?php
require "includes/config.php"; //不用點點是因為往它直接往下層找
require "includes/utils.php"; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: 微軟正黑體;
        }
    </style>
    <title>阿鈺0908</title>
</head>

<body>
    <h2>阿鈺0908 PHP練習記錄</h2>
    <hr>
    <?php
    getCounter("homepage");
    $conn->close();
    ?>
    <?php include "includes/menu.php"; ?>
    <hr>
    <?php include "includes/footer.php"; ?>
</body>

</html>