<?php
//①処理の経過を書き込むログファイルを作成する。
//②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
//③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
//④最後に、ログファイルを読み込み、その内容を表示してください。

touch('log.txt');
date_default_timezone_set('Asia/Tokyo');//タイムゾーンの変更
mktime();

$day = date('Y/m/d h:m:s').'<br>';
$start = '開始  '.$day.'<br>';
$finish = '終了  '.$day.'<br>';



$start_time = microtime(true);
$end_time = microtime(true);
$time = $end_time - $start_time;

$fp = fopen('log.txt','w');
fgets($fp);
$start_time;
fwrite($fp,$start);
$end_time;
fwrite($fp,"<br>処理速度： {$time}秒かかりました。<br><br>".$finish);
fclose($fp);

$fs = file_get_contents('log.txt');
echo $fs;

?>
