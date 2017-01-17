<?php

$user1 = array(
               'id'   =>'1234',
               'name' => '渡邉',
               'birth'=>'1988/9/19',
               'add'  =>'神奈川'
               );
$user2 = array(
               'id'   =>'5678',
               'name' =>'小林',
               'birth'=>'1988/8/18',
               'add'  =>'千葉'
               );
$user3 = array(
               'id'   =>'1357',
               'name' =>'安藤',
               'birth'=>'1977/7/17',
               'add'  =>'東京'
               );
  $all = array(
              'profile1'=>$user1,
              'profile2'=>$user2,
              'profile3'=>$user3
               );

  foreach($all as $key=>$value){
    if($key == 'profile3')
    break;
  foreach($value as $key=>$value){

         if($key == 'id' ||$key =='add'){
          continue;}

echo $value.'<br><br>';
}
}



?>
