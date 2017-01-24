<?php
//rofileID=1のnameを「松岡 修造」に、
//ageを48に、birthdayを1967-11-06に更新してください

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = "update profiles set name ='松岡 修造',age=48,birhday='1967-11-06' where profilesID =1;";

$query = $pdo->prepare($sql);

echo '入力したレコードを更新します。';

$query->execute();

?>
