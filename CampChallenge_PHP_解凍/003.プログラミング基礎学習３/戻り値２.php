<?php
//戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、
//受け取った後は全情報を表示する

function personal(){
    $data = array(
      "id"       => 111999,
      "name"     => "渡邉",
      "birthday" => "1999/9/19",
      "address"  =>'神奈川県横浜市',
    );
    return $data;
  }

$alldeta = personal();

foreach($alldeta as $value){
  echo $value;

}
?>
