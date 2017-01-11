<?php

$param1 = $_GET['param1'];//商品種別
$param2 = $_GET['param2'];//総額
$param3 = $_GET['param3'];//一個当たり
$param4 = $_GET['param4'];//購入金額


//１は雑貨、２は生鮮食品、３はその他
if ($param1==1){
  echo '雑貨';
}elseif($param1==2){
echo '生鮮食品';
}else{
  echo 'その他';
}

echo "<br>";


$wari = $param2/$param3;//総額/個数
  echo "総額.$param2.円";
  echo "<br>";
  echo "一個当たり.$wari.円";

  echo "<br>";


if($param4>=3000){
  $kake = $param4*0.04;
  echo "$kake.ポイント";
}elseif($param4>=5000){
  $kake = $param4*0.05;
  echo "$kake.ポイント";
}
