<?php


$orgnum=$_GET['number'];//クエリストリングの値
$varnum=$orgnum;//変化する値
$num='';//素因数の表示
$othernum=''; //その他の表示

while($varnum!=1){//変化する値が1以外で稼働
  if($varnum==0){//入力された値が０の場合止まる
    break;
  }

  if($varnum%2==0){
    $num .= '2,';//$numに割った数だけ追加入力
    // $varnum=$varnum/2;
    $varnum /= 2;
  }elseif($varnum%3==0){
    $num.='3,';//$numに割った数だけ追加入力
    $varnum/=3;
  }elseif($varnum%5==0){
    $num.='5,';//$numに割った数だけ追加入力
    $varnum/=5;
  }elseif($varnum%7==0){
    $num.='7,';//$numに割った数だけ追加入力
    $varnum/=7;
  }else{
    $othernum=$varnum;//二桁の素因数を表示
    break;
  }
}

echo '元の値は：' .$orgnum;
echo '<br>';
echo '一桁の素因数は：'.$num;
echo '<br>';
echo 'その他は：' .$othernum;
?>
