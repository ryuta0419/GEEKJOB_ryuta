<?php
//課題「クッキーの記録と表示」と同じ機能をセッションで作成してください。

//セッション開始
session_start();

//セッションに情報を入れる
$_SESSION['LastTimeDate'] = date('Y年m月d日g時i分s秒');
     
//セッションから出データを取りだす
     echo '前回のログインは<br>'.$_SESSION['LastTimeDate'].'です。';

?>
