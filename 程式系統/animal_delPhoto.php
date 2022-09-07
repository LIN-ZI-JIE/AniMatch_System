<?php
  require_once("dbtools.inc.php");

  $member_ID = $_COOKIE{"member_ID"};
  $animal_photoID = $_GET["animal_photoID"];
  
  //建立資料連接
  $link = create_connection();
  
  //刪除儲存在資料庫的相片資訊
  $sql = "DELETE FROM animal_photo WHERE animal_photoID =$animal_photoID";
  execute_sql($link, "animatch", $sql);
 	
  //釋放記憶體並關閉資料連接
  //mysqli_free_result($result);
  mysqli_close($link);
  
  header("location:animal_photo.php");

?>