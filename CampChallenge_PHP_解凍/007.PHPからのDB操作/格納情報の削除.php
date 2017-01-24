<?php
//課題「テーブルへ情報を格納」でINSERTしたレコードを指定して削除してください。
//SELECT*で結果を表示してください

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = "delete from profiles where name = '渡辺 隆';";

echo '入力したレコードを削除します。';

$query = $pdo->prepare($sql);

$query->execute();

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = 'select * from profiles';

echo '結果を表示します。';

$query = $pdo->prepare($sql);

$query->execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump($result);


?>
