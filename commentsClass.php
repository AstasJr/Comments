<?php 

class Comments {
  public function query($id, $i, $pid) {
    $query   = "select * from comments where pid = $id;";
    $result = mysql_query($query);
    while ($row = mysql_fetch_row($result)) {
      $id     = $row[0];
      $author = $row[1];
      $text   = $row[2];
      $temp = $pid;
      $pid    = $row[3];
        if ($temp != $pid) {
        $i++;
      }
        echo<<<EOT
        
        <div class="show_comments$i">
          <div class="author">$author</div>
          <div class="text">$text</div>
          <button id=$id class=$i>Ответить на комментарий $id</button>
          <button id=$id class="drop">Удалить комментарий $id</button>
        </div> <form name="comment" method="post" class="add_comment" id="add_$id">
          <input type="text" name="author" placeholder="Введите Ваше имя"><br>
          <textarea name="text" cols="30" rows="8" placeholder="Напишите здесь комментарий"></textarea><br>
          <input type="text" name="pid" value=$id class="hide">
          <button type="submit">Отправить комментарий</button>
        </form>
EOT;
        Comments::query($id, $i, $pid);        
    }
  }

  public function add_comment() {
    $add_author = $_POST['author'];
    $add_text   = $_POST['text'];
    $add_text = preg_replace("/[\r\n]+/", " ", $add_text);
    $add_pid    = $_POST['pid'];
    $insert = "insert into comments (author, text, pid) values ('$add_author', '$add_text', $add_pid);";
    if(!empty($add_author)) {
      mysql_query($insert);
      header('Location: index.php');
      exit();
    }
  }

}

 ?>