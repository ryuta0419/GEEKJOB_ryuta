
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
  <title>商品リスト</title>
  <link rel ="stylesheet" href ="">
</head>
<body>

  <?php

  try{
      $pdo = new PDO('mysql:host=localhost;dbname=zaiko_db;charset=utf8','ryuta','chuck0419');
    }catch(PDOException $Exception){
          die('接続に失敗しました:' .$Exception -> getMessage());
    }
    $sql = "select * from zaiko";
    echo "＜商品リスト＞"."<br><br>";
    $query = $pdo -> prepare($sql);
    $query -> execute();
    $result = $query -> fetchall(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
      foreach ($value as $key => $value2) {
        echo $value2.'<br><br>';
      }
    }
     $pdo = NULL;
    ?>

  </body>
  </html>
