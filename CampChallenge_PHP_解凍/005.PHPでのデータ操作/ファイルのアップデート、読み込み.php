<HTML>
  <head>
  </head>
  <body>

    <form enctyp = "multipart/form-date"
          action = "sampule.php" metod = "post">
          ファイル選択：<input name = "userfile"
                              type = "file">

    </from>
  </body>
</HTML>

<?php
//アップロードされたファイル情報確認
var_dump($_FILES);

//サーバー側に保存する名前
$file_name = "uproad.txt";

//アップロードされたファイルを移動する
move_uploaded_file(
$_FILES['userfile']['tmp_name'],$file_name);

?>
