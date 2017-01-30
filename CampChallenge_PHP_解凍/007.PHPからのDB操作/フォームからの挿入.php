<?php
//フォームからデータを挿入できる処理を構築してください。
?>

<html>
<head>
  <title>PHP/DB操作09</title>
  <body>
    
    <form name ="form1" action="php_db_09.php" method="POST">
      ProfilesID:
      <input type="number" min="0" max="99" name="ID" ><br>
      Name:
      <input type="text" name="name" ><br>
      Tell:
      <input type="text" name="tell" ><br>
      Age:
      <input type="number" min="18" max ="100" name="age" ><br>
      Birthday:
      <input type="text" name="birthday" ><br>
      <br>
      <input type="submit" value="挿入">
    </form>


<?php

$id = $_POST["ID"];
$name = $_POST["name"];
$tell = $_POST["tell"];
$age = $_POST["age"];
$bd = $_POST["birthday"];

try{$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}echo '接続成功<br>';

$sql = "insert into profiles values ($id, '$name','$tell',$age,'$bd')";

$query = $pdo->prepare($sql);
$query->execute();

if($query->execute()==1){
echo "以下のプロフィールを追加しました。<br><br>";
$result_sql=$pdo->query("select * from profiles where profilesID = $id;");
$result = $result_sql->fetch(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo $value.'<br>';
}
}else{
  echo '値を入力してください！';
}
?>


  </body>
</head>
</html>
