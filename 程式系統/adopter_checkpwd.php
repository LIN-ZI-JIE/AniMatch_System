<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $account = $_POST["account"]; 	
  $password = $_POST["password"];
  
  //建立資料連接
  $link = create_connection();
					
  //檢查帳號密碼是否正確
  $sql = "SELECT * FROM member Where account = '$account' AND password = '$password'";
  $result = execute_sql($link, "animatch", $sql);

  //如果帳號密碼錯誤
  if (mysqli_num_rows($result) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
	
    //關閉資料連接
    mysqli_close($link);
		
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請查明後再登入');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號密碼正確
  else
  {
    //取得 id 欄位
    $member_ID = mysqli_fetch_object($result)->member_ID;
	
	//判斷會員
    $sql_query  = "SELECT * FROM member Where member_ID = $member_ID ";
    $result_set = execute_sql($link, "animatch", $sql_query );
	$row = mysqli_fetch_assoc($result_set);
	
	if(($row['adopter'])==0)
	{
		echo "<script type='text/javascript'>";
        echo "alert('您尚未填寫領養人資料');";
        echo "history.back();";
        echo "</script>";
	}
	else
	{
        //釋放 $result 佔用的記憶體	
        mysqli_free_result($result);
		
        //關閉資料連接	
        mysqli_close($link);

        //將使用者資料加入 cookies
        setcookie("member_ID", $member_ID);
        setcookie("passed", "TRUE");		
        header("location:adopter_main.php");	
	}
  }
?>