<?php

function num($num1, $num2 =5, $type =false){
  $kake = $num1 * $num2;

  if($type == false){
    echo $kake;
}
elseif($type == true){
    $nijo = $kake**2;
    echo $nijo;
  }
}
num(3,4,true);
