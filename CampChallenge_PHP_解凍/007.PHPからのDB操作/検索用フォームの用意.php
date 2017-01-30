<?php
//以下の課題を、PHPからのPDOを用いて実現してください。
//検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。
//同じページにリダイレクトするPOST処理と、
//POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できます。
?>

<html>
<body>
<form action = "php_db_08.php"method="post">
  <h2>データベースの検索</h2>
  <input type ="text" name = "search_key"/>
  <input type ="submit" value="検索"/>
</form>

<?php

try{
  $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}echo '接続成功！<br>';

$search = '%'.$_POST['search_key'].'%';
$serch_check = $_POST['search_key'];

if($serch_check == Null){
  echo '入力してください';
}else{
 $sql = "select *from profiles where name like'$search';";
   $query = $pdo->prepare($sql);
   $query->execute();
 //実行結果の確認
$result=$query->fetchall(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo '<br>';{
    foreach($value as $value2){
      echo $value2.'<br>';
  }
}
}
}
 ?>

</body>
</html>
