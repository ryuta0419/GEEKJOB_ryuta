<?php
session_start();

if(isset($_SESSION['login'])){

}else{
  header('Location; zaiko_login.php');
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <center>
   <meta charset = "utf-8">
   <title>商品リスト</title>
   <link rel ="stylesheet" href ="">
 </head>
 <body>
  <font size="5">
   <h2>メイン画面</h2>
   <a href ="zaiko_List.php">商品リスト</a>
   <br><br>
   <a href ="zaiko_Registration.php">商品登録</a>
   <br><br>
   <a href ="zaiko_User_registration.php">新規ユーザー登録</a>
   <br><br>
   <a href ="zaiko_login.php">ログアウト</a>
  </font>
 </center>

 </body>
 </html>
