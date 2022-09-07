<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  
  $account = $_POST["account"];
  $password = $_POST["password"]; 
  $re_password = $_POST["re_password"];
  $nickname = $_POST["nickname"];
  $company_name = $_POST["company_name"];
  $introduction = $_POST["introduction"];
  $name = $_POST["name"];
  $id_card = $_POST["id_card"];
  $birthday = $_POST["birthday"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $stray_remark = $_POST["stray_remark"];
 
  if($password != $re_password)
  {
	echo "<script type='text/javascript'>";
    echo "alert('密碼輸入錯誤！');";
	echo "window.location.href='index.php';";
    echo "</script>";
	return false;
  }
 
  //建立資料連接
  $link = create_connection();
			
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM member Where account = '$account'";
  $result = execute_sql($link, "animatch", $sql);
  $row = mysqli_fetch_assoc($result);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
	
	if($row['animal_shelter']==1)
	{
		
      //顯示訊息要求使用者更換帳號名稱
      echo "<script type='text/javascript'>";
      echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
      echo "history.back();";
	  echo "</script>";
	}
	else
	{
		if($password == $row['password'])
		{
	       //執行 SQL 命令，新增此帳號
           $sql_query = "UPDATE member SET animal_shelter = '1' WHERE account = '$account'";
	       if(mysqli_query($link, $sql_query))
	       {
	          echo "<script type='text/javascript'>";
              echo "alert('中途之家帳號註冊成功！');";
	          echo "history.back();";
              echo "</script>";
	       }
		}
		else
		{
			//顯示訊息要求使用者輸入正確密碼
            echo "<script type='text/javascript'>";
            echo "alert('密碼輸入不正確，註冊失敗');";
            echo "history.back();";
            echo "</script>";
		}
	}
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
	
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO member(nickname,account,password,animal_shelter)
	VALUES ('$nickname','$account','$password','1')";
	
	$sql1 = "SELECT * FROM adopter where account = '$account'";
	$result = execute_sql ($link, "animatch", $sql);

	echo "<script type='text/javascript'>";
    echo "alert('帳號註冊成功！');";
	echo "history.back();";
    echo "</script>";
  }
  	$sql = "SELECT * FROM member where account = '$account'";
	$result = execute_sql($link, "animatch", $sql);
    $row = mysqli_fetch_assoc($result);
	$member_ID = $row['member_ID'];
	
    $sql = "INSERT INTO animal_shelter(member_ID,company_name,introduction,name,id_card,birthday,tel,email,stray_remark) 
	VALUES ('$member_ID', '$company_name', '$introduction', '$name', '$id_card', '$birthday', '$tel', '$email', '$stray_remark')";
	$result = execute_sql($link, "animatch", $sql);
	
    //關閉資料連接	
    mysqli_close($link);
?>
