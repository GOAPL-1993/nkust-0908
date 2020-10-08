<?php 
    $year = $_POST["year"] + 1911;
    $month = $_POST["month"];
    $day = $_POST["day"];

    $birthday =  "你的生日：$year-$month-$day";
    echo "<script>";
    echo "alert('$birthday');";
    echo "</script>";
?>
<button><a href="test01.php">重新選擇</a></button>