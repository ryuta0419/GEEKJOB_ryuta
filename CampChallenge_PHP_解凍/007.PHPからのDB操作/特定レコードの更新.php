<?php
//profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください
?>

<html>
<head>
  <title>PHP/DB操作10</title>
</head>
<body>
<?php
//DB接続
try{
  $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');
  $sql = "select profilesID from profiles";
  $query = $pdo->prepare($sql);
  $query->execute();
  //ID一覧の表示
  $result=$query->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}echo 'データベース接続成功！！<br>';
//ID一覧の取得
echo 'ID一覧：<br>';
foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'：';
  }
  }
?>

  <form name="delete_form" action="php_db_11.php" method="POST">
    <br>
    更新するプロフィールIDを選択してください
　　　<br>
    プロフィールID:
    <input type="number" min="0" max="99" name="ID">
　　　<br>
     <br>
     更新する値を入力してください。
     <br>
     名前：
    <input type="text" name="name"><br />
     電話：
    <input type="text" name="tell"><br />
     年齢：
    <input type="number" min="0" max="99" name="age"><br />
     生年月日：
    <input type="text" name="bd" ><br />
    <br>
    <input type="submit" value="更新しました。">
  </form>

  <?php

$id = $_POST["ID"];
$name = $_POST["name"];
$tell = $_POST["tell"];
$age = $_POST["age"];
$bd = $_POST["bd"];

$sql = "update profiles set name = '$name' ,tell='$tell', age='$age' where profilesID = $id;";

$query = $pdo->prepare($sql);
$query->execute();

if($query->execute()==1){
$sql = "select *from profiles";
$query = $pdo->prepare($sql);
$query->execute();
$result=$query->fetchall(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo '<br>';
  foreach($value as $value2){
    echo $value2.'<br>';
  }
 }
}else{
  echo 'IDを入力してください。';
}
  ?>
</body>
</html>
