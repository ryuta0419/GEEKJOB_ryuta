<?php
//nameに「茂」を含む情報を取得し、
//画面に取得した情報を表示してください

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');

$sql = "select * from profiles where name like '%実%';";

echo '指定した情報を表示します。';

$query = $pdo->prepare($sql);

$query->execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump($result);

?>
