<?php
//ファイルに自己紹介を書き出し、保存してください。


$profile = '私の名前は渡邉隆太です。年齢は２９歳です。よろしくお願いします。';



file_put_contents('kadai_put',$profile);

echo '保存されました。';
?>
