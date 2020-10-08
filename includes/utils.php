<?php
    
//區堿變數，所有在函數裡定義的變數或使用的變數

//因為匯入指令時要改小地方，因此用function比較好用
function getCounter($target){
    global $conn;//宣告我要使用的$conn，是外面的那個全堿變數$conn
    $sql = "SELECT * from counter WHERE name = '$target'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $value = $row["value"];
    } else {
        $value = 0;
    }
    echo "參觀人次：" . $value . "人。<br>";
    $value++;
    //update value into table
    $sql = "UPDATE counter SET value = '$value' WHERE name='$target'";
    $conn->query($sql);
}
function get_video_number ($id){
    global $conn;
    $sql = "SELECT COUNT(*) AS numbers from video WHERE pid='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        $row = $result->fetch_assoc();
        $numbers = $row["numbers"];
    } else {
        $numbers = 0;
    }
    return $numbers;
}
?>