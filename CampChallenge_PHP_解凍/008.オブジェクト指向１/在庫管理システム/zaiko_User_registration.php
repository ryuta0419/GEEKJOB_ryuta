<!DOCTYPE html>
<html>
<hrad>
  <meta charset = "utf-8">

  <center>
  <title>ユーザー登録画面</title>
  <link rel ="stylessheet" href ="">
</herd>
<body>
  <font size="5">
  <h2>ユーザー登録</h2>
  <form action = "zaiko_User_registration.php" methot = "POST">
    名前:<input type ="text" name ="name">
    <br><br>
パスワード<input type ="txet" name ="password">
    <br><br>
             <input type ="submit" value ="登録">


<?php

if(isset($_GET['name'],$_GET['password']) == false){
  exit;
}elseif($_GET['name'] == ""|| $_GET['password'] == ""){
    echo '未記入の項目があります';
    exit;
  }else{
    $name = $_GET['name'];
    $password = $_GET['password'];
}
  try{
    $pdo = new PDO('mysql:host=localhost;dbname=user_db;charset=utf8','ryuta','chuck0419');
  }catch(PDOException $Exception){
        die('接続に失敗しました:' .$Exception -> getMessage());
  }
  $sql = "insert into users values('$name', '$password')";
  $query = $pdo -> prepare($sql);
  echo "<br>";
  echo "登録が完了しました。";
  $query -> execute();
  $result = $query -> fetchall(PDO::FETCH_ASSOC);
  $pdo = NULL;

?>
</form>
</font>
</body>
</html>
