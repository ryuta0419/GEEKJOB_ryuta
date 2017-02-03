<!DOCTYPE html>
<html>
  <head>
    <center>

  <font size="5"><title1>＜在庫管理システム＞</title1><br><br></font>
  <font size="5"><title2>ログイン画面</title2><br><br></font>
  </head>

  <body>
<font size="5">
    <form action = "zaiko_login.php" methot ="post">
      ユーザーネーム<input type ="text" name ="username"value = ""><br><br>
      パスワード<input type ="text" name ="password" value = ""><br><br>
      <input type ="submit" value ="ログイン">

    </form>
</font>
  </body>
  <?php
   session_start();

   if(isset($_GET['username'],$_GET['password']) == false){
     echo '未記入の項目があります';
     exit;
  }elseif($_GET['username'] =="" || $_GET['password'] == "" ){
    echo '未記入の項目があります';
    exit;
  }
    $name = $_GET['username'];
    $password = $_GET['password'];


   try{
    $pdo = new PDO('mysql:host=localhost;dbname=user_db;charset=utf8','ryuta','chuck0419');
  }catch(PDOException $Exception){
     die("接続に失敗しました、、、。".$Exception -> getMessage());
  }

  $sql = "select * from users where name='$name' AND password='$password'";
  $query = $pdo -> prepare($sql);
  $query -> execute();
  $result = $query -> fetchall(PDO::FETCH_ASSOC);
  $pdo = NULL;


    if(empty($result == false)){
      $_SESSION['login'] = 'login';

      echo 'ログインに成功しました。';
      echo '<meta http-equiv="refresh"content="1;URL=http://localhost/zaiko_main.php">';
    }else{
      echo 'ログインに失敗しました。';
  }
  ?>
 </center>
</html>
