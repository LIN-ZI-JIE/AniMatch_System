<?php
  require_once("dbtools.inc.php");

  $member_ID = $_COOKIE{"member_ID"};
  $titles_ID = $_GET["titles_ID"];
  
  //建立資料連接
  $link = create_connection();
  
  //刪除儲存在資料庫的相片資訊
  $sql = "DELETE FROM titles WHERE titles_ID =$titles_ID";
  execute_sql($link, "animatch", $sql);
 	
  mysqli_close($link);
  
  header("location:adopter_chat.php");

?>