<?php
//以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、
//結果を表示してください。
//「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」

$hensin = '「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」';

$hensin = str_replace('I','い',$hensin);
$hensin = str_replace('U','う',$hensin);

echo $hensin;

?>
