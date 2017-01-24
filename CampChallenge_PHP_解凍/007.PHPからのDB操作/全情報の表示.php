<?php
//前回の課題「テーブルの作成とinsert」で作成したテーブルからSELECT*により全件取得し、
//画面に取得した全情報を表示してください

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = 'select * from profiles';

echo '全情報を表示します。<br><br>';

$query = $pdo->prepare($sql);

$query->execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump($result);


?>
