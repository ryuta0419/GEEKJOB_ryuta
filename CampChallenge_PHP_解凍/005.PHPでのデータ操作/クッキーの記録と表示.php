<?php
//クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。

//ユーザーの一回目の訪問
$access_time = date('Y年m月d日g時i分s秒');
setcookie('LastLoginDate',$access_time);

echo '今回のログイン時間は<br>'.$access_time.'です。';

?>

<?php
//次回の訪問で
$lastDate = $_COOKIE['LastLoginDate'];

echo '<br><br>'.'<<おかえりなさい。>>'.'<br><br>';
echo '前回のログインは<br>'.$lastDate.'です。';



 ?>
