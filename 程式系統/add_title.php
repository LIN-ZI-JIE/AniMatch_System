<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $member_ID = $_COOKIE{"member_ID"};
  $titles = $_POST["titles"];
  $titles_content = $_POST["titles_content"]; 
  
  //建立資料連接
  $link = create_connection();
		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO titles(titles,titles_content,member_ID,start_time,final_date)
  VALUES ('$titles','$titles_content','$member_ID',NOW(),NOW())";
  $result = execute_sql ($link, "animatch", $sql);
	
  echo "<script type='text/javascript'>";
  echo "alert('文章發佈成功！');";
  echo "window.location.href='chat.php';";
  echo "</script>";
  
  //關閉資料連接	
  mysqli_close($link);
?>
