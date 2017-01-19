
<HTML>
  <head>
  </head>
  <body>
    <form method="post" action="PHP_HTML.php">
          あなたのお名前は？<br><br>
          <input type="text" name="userName" size="20">
          <br>
          <br>
          あなたの性別は？
          <br>
          <br>
          <input type="radio" name="gender" value="男">男
          <input type="radio" name="gender" value="女">女
          <br>
          <br>
          趣味は？<br><br>
          <select type="checkbox" name="hobby">

          <option value="野球"      >野球    </option>
          <option value="サッカー"  >サッカー </option>
          <option value="テニス"    >テニス   </option>
          <option value="バレー"    >バレー   </option>

        </select>
          <br>
          <br>
          <input type="submit">
        </form>

      </body>

</HTML>

//PHP_HTML.php
<?php

session_start();

  echo "<br>";
  echo "あなた名前は、 " . $_SESSION['userName'] . " さん。<br>";
  echo "性別は " . $_SESSION['gender']  ." です。<br>";
  echo "趣味は".$_POST['hobby']."です。" ;

?>
