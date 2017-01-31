<?php
//パブリックな２つの変数
//２つの変数に値を設定するパブリックな関数
//２つの変数の中身をechoするパブリックな関数
?>
<?php
class  Member{
  public $name ='';
  public $no =NULL;
  public $age =NULL;

  public function setMember($n,$no,$a){
    $this->name = $n;
    $this->no = $no;
    $this->age = $a;
  }

  public function getMember(){
    echo $this->name;
    echo $this->no;
    echo $this->age;
  }

}

$a = new Member;
$a->setMember('渡邉','9番','29歳');

$b = new Member;
$b->setMember('天野','7番','29歳');

$c = new Member;
$c->setMember('堀江','1番','28歳');

echo $a->getMember().'<br>'.'<br>';
echo $b->getMember().'<br>'.'<br>';
echo $c->getMember().'<br>'.'<br>';


?>
