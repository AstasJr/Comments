<?php 
require_once 'config.php';
mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD)
	or die("<p>ERROR</p>");
mysql_select_db(DB_NAME)
	or die("<p>ERROR</p>");
 ?>
