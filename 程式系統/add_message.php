<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $member_ID = $_COOKIE{"member_ID"};
  $message_content = $_POST["message_content"]; 
  
  //建立資料連接
  $link = create_connection();
		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO message(message_content,member_ID,message_time)
  VALUES ('$message_content','$member_ID',NOW())";
  $result = execute_sql ($link, "animatch", $sql);
	
  echo "<script type='text/javascript'>";
  echo "alert('留言成功！');";
  echo "window.location.href='chat.php';";
  echo "</script>";
  
  //關閉資料連接	
  mysqli_close($link);
?>
