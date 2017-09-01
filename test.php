<html lang="ja">
 <head>
  <meta charset ="utf-8">
  <title>htmlタグからデータを受け取る</title>
 </head>
 <body>
  <h1>フォームデータの送信</h1>
  <form action="test.php" method ="get">
   <textarea name ="comment" rows="4" cols="40">ここに何かを入れてくださ>    い</textarea><br/>
   <input type="submit" value ="送信">
  </form>
 </body>
</html>
<?php
 if(isset($_GET['comment'])){
  if ( preg_match('/zoneid=(\w+)/', $_GET['comment'], $matches) ) {
   print $matches[1];
  } else {
   echo '見つかりません';
  }
 }
?>
