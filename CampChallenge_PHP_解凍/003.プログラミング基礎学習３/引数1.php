<?php

function even_num($num){
  $isEven = ($num %2 == 0) ? true : false;
  return $isEven ;
}

function a_num($num){
  $isEven = even_num($num);
  if ($isEven == true)
    $contents = "偶数";
  else
    $contents = "奇数";
  return $contents;
}

  $num2 = 7;
  echo  $num2 . "は、" . a_num($num2) . "です。";
  ?>
