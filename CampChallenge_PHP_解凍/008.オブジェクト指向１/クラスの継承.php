<?php
class  Member{
  public $name ='';
  public $no =NULL;
  public $age =NULL;

  public function setmember($name,$no,$age){
    $this->name = $name;
    $this->no = $no;
    $this->age = $age;
  }

  public function getMember(){
    echo $this->name;
    echo $this->no;
    echo $this->age;
  }

}
class AMember extends Member{
  public function Clesr(){
    $name ='';
    $no =NULL;
    $age =NULL;
    $this->name=$name;
    $this->no =$no;

  }

}

$koba = new AMember;
$koba->setMember('小林','6番','28歳');

$wata = new Member;
$wata->setMember('渡邉','9番','29歳');

$ama = new Member;
$ama->setMember('天野','7番','29歳');

$hori = new Member;
$hori->setMember('堀江','1番','28歳');

echo $wata->getmember().'<br>'.'<br>';
echo $ama->getmember().'<br>'.'<br>';
echo $hori->getMember().'<br>'.'<br>';
echo $koba->getMember().'<br>'.'<br>';


$koba->Clesr();
echo $koba->getMember();


?>
