<?php
//引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
//ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。
//この関数を20回呼び出す

$gnum = 3;
 function global_num(){
   global $gnum;
   static $calcCount = 0;
   $gnum *= 2;
 }
   for ($i=0; $i <20 ; $i++) {
     global_num();
 }
   echo $gnum .'<br>' ;


?>
