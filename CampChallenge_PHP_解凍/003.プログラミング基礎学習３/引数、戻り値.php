<?php
//前による検索プログラムを実装する。3人分のプロフィール(項目は課題「戻り値2」参照)
//戻り値は1人分のプロフィール情報を返却する。
//引き数の文字が名前に含まれる(部分一致)プロフィール情報
//(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。
//それ以降などは課題「戻り値2」と同じ扱いに

function search($name){
$user1 = array(
               $id1   ='1234',
               $name1 = '渡邉',
               $birth1='1988/9/19',
               $add1  ='神奈川'
               );
$user2 = array(
               $id2   ='5678',
               $name2 ='小林',
               $birth2='1988/8/18',
               $add2  ='千葉'
               );
$user3 = array(
               $id3   ='1357',
               $name3 ='安藤',
               $birth3='1977/7/17',
               $add3  ='東京'
               );
extract($user1);
extract($user2);
extract($user3);
    global $key;
    if(strstr($name1,$key)){
      return array($id1,$name1,$birth1,$add1);
}
    elseif(strstr($name2,$key)){
      return array($id2,$name2,$birth2,$add2);
}
    elseif(strstr($name3,$key)){
      return array($id3,$name3,$birth3,$add3);
}
}
$key = '渡邉';
$search = search($key);
    foreach ($search as $value) {
      echo "$value<br>";
}

?>
