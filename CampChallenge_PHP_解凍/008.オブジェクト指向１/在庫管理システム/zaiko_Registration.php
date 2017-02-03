
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
  <title>商品登録</title>
  <link rel ="styesheet" href= "">
</head>
<center>
<body>
  <font size="5">
  <h2>商品登録</h2>
  <form action = "zaiko_Registration.php" methot = "POST">
    <br><br>
    商品名:<input type = "text" name="name">
    <br><br>
    個数:<input tyupe = "text" name="stock">
    <br><br>
    <input type ="submit" value ="登録">

<?php

if(isset($_GET['name'],$_GET['stock']) == false){
    exit;
  }elseif($_GET['name'] == "" || $_GET['stock'] == "" ){
    echo '未記入の項目があります';
    exit;
  }else{
    $name = $_GET['name'];
    $stock = $_GET['stock'];
  }

  try{
    $pdo = new PDO('mysql:host=localhost;dbname=zaiko_db;charset=utf8','ryuta','chuck0419');
  }catch(PDOException $Exception){
        die('接続に失敗しました:' .$Exception -> getMessage());
  }
  $sql = "insert into zaiko values('$name',$stock)";
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
