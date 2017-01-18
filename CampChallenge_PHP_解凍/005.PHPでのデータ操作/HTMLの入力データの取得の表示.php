<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>データ処理：課題１</title>
</head>
<body>


  <form method="post" action="data_2.php">
    あなたの名前は？<br>
    <input type="text" name="toukou" size="20">
    <br>
    あなたの性別は？
    <br>
      <input type="radio" name="gender" value="man"   >男
      <input type="radio" name="gender" value="woman" >女

    <br>
    趣味は？<br>
    <input type="checkbox" name="hobby[]" value="サッカー" >サッカー<br>
    <input type="checkbox" name="hobby[]" value="野球" 　　>野球<br>
    <input type="checkbox" name="hobby[]" value="テニス"   >テニス<br>
    <input type="checkbox" name="hobby[]" value="バレー"   >バレー<br>
