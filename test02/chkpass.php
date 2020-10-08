<?php
  //這個程式是用來檢查使用者輸入的密碼是否正確
  session_start();
  $password = $_POST["password"];
  //在這個例子中，密碼固定是1234
  if($password=="1234") {
      //如果密碼驗證無誤，就在Session中寫入資料以資識別
      $_SESSION["user_type"] = 1;
  }
  //密碼檢查完畢之後，就會轉址到首頁去
  header("Location: index.php");
  exit;
?>