<?php

//以下の課題を、PHPからのPDOを用いて実現してください。
//Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください

try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','ryuta','chuck0419');
      }catch(PDOException $Exception){
       die('接続に失敗しました:'.$Exception->getMessage());
}

echo'PDO 接続に成功しました。';

$pdo = null;

?>
