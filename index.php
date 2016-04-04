<?php 

require_once 'connect.php';
require_once 'commentsClass.php';

$comment = new Comments();
$comment->add_comment();
$comment->query(0,0,1);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset='UTF-8'>
  <title>Comments</title>
  <link rel="stylesheet" href="css/index.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 </head>
 <body>
  <div class="wrepper">
    <form name="comment" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="add_comment" id="const">
      <input type="text" name="author" placeholder="Введите Ваше имя"><br>
      <textarea name="text" cols="30" rows="8" placeholder="Напишите здесь комментарий"></textarea><br>
      <input type="text" name="pid" value="0" class="hide">
      <button type="submit" onfocus="this.blur();">Отправить комментарий</button>
    </form>
  </div>
<script src="js/index.js"></script>
 </body>
 </html>