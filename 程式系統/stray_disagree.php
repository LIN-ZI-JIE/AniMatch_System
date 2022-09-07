<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //建立資料連接
  $link = create_connection();

  // variables for input data
  $pet_ID = $_GET["pet_ID"];

  // sql query for update data into database
  $sql_query = "UPDATE adopter_stray SET stray_disagree = 1 WHERE pet_ID = $pet_ID";
  $result = execute_sql ($link, "animatch", $sql_query);
 
  // sql query execution function
  if(mysqli_query($link, $sql_query))
  {
   ?>
   <script type="text/javascript">
     alert('已拒絕領養資訊。');
     window.location.href='stray_member.php';
   </script>
   <?php
  }
  else
  {
   ?>
   <script type="text/javascript">
   alert('資料修改失敗');
   </script>
   <?php
  }
?>