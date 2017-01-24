<?php
//前回の課題「テーブルの作成とinsert」で作成したテーブルに
//自由なメンバー情報を格納する処理を構築してください

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = 'insert into profiles values(3,"渡辺 隆","012-33555-7788",29,"1987-12-34")';

$query = $pdo->prepare($sql);

echo '格納が完了しました。';

$query->execute();


?>
