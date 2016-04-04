<?php 

require_once 'connect.php';

$id = $_POST['id'];
delete($id);

function delete($id) {
  $query  = "delete from comments where id = $id;";
  $result = mysql_query($query);
  $query = "select * from comments where pid = $id;";
  $result = mysql_query($query);
  while ($row = mysql_fetch_row($result)) {
    $id = $row[0];
    delete($id);
  }
}

 ?>