<?php
//課題「ユーザー定義関数」で定義した関数に追記する形として、戻り値　true(bool値)
//を返却するように返却し、関数の呼び出し側でtrueを受けとれたら「この処理は正しく
//実行できました。」、そうでないなら「正しく実行できませんでした。」と表示する。

function my_profile(){
  echo '名前:渡邉隆太';
  echo '<br>';
  echo '生年月日：１９８７年４月１９日';
  echo '<br>';
  echo '趣味：フットサル、映画鑑賞.<br>';
  $profile = true;
  return $profile;
}

$proflie = my_profile();
 echo $proflie.'<br>';

   if($proflie == false){
     echo 'この処理は正しく実行しました。';
   }
   else{
     echo '正しく実行できませんでした。';
   }


?>
