<?php


function my_profile(){
  echo '名前:渡邉隆太';
  echo '<br>';
  echo '生年月日：１９８７年４月１９日';
  echo '<br>';
  echo '趣味：フットサル、映画鑑賞.<br>';
}
$i = 0;
  for($i = 0;$i<10;$i++){
my_profile();
}
?>
