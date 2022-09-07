<?php
  require_once("dbtools.inc.php");

  $member_ID = $_COOKIE{"member_ID"};
  $track_photoID = $_GET["track_photoID"];
  
  //建立資料連接
  $link = create_connection();
  
  //刪除儲存在資料庫的相片資訊
  $sql = "DELETE FROM track_photo WHERE track_photoID =$track_photoID";
  execute_sql($link, "animatch", $sql);
 	
  //釋放記憶體並關閉資料連接
  //mysqli_free_result($result);
  mysqli_close($link);
  
  header("location:adopter_member.php");

?>