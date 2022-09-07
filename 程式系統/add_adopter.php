<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  
  $account = $_POST["account"];
  $password = $_POST["password"]; 
  $re_password = $_POST["re_password"];
  $name = $_POST["name"];
  $nickname = $_POST["nickname"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $id_card = $_POST["id_card"];
  $birthday = $_POST["birthday"];
  $adopter_sex = $_POST["adopter_sex"];
  $adoption_times = $_POST["adoption_times"];
  $feeding_place = $_POST["feeding_place"];
  $space = $_POST["space"];
  $income = $_POST["income"];
  $available_time = $_POST["available_time"];
  $animal_species = $_POST["animal_species"];
  $animal_number = $_POST["animal_number"];
  $address = $_POST["address"];
  $cohabitation = $_POST["cohabitation"];
  $adopter_remark = $_POST["adopter_remark"];
  
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
	if($row['adopter']==1)
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
          $sql_query = "UPDATE member SET adopter = '1' WHERE account = '$account'";
	      if(mysqli_query($link, $sql_query))
	      {
	        echo "<script type='text/javascript'>";
            echo "alert('領養人帳號註冊成功！');";
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
    $sql = "INSERT INTO member(nickname,account,password,adopter)
	VALUES ('$nickname','$account','$password','1')";
	
	$sql1 = "SELECT * FROM adopter where account = '$account'";
	$result = execute_sql ($link, "animatch", $sql);

	echo "<script type='text/javascript'>";
    echo "alert('領養人帳號註冊成功！');";
	echo "history.back();";
    echo "</script>";
	//關閉資料連接	
    mysqli_close($link);
  }
  	$sql = "SELECT * FROM member where account = '$account'";
	$result = execute_sql($link, "animatch", $sql);
    $row = mysqli_fetch_assoc($result);
	$member_ID = $row['member_ID'];
	
    $sql = "INSERT INTO adopter(member_ID,account,name,email,tel,id_card,birthday,adopter_sex,adoption_times,feeding_place,space,income,available_time,animal_species,animal_number,address,cohabitation,adopter_remark) 
	VALUES ('$member_ID', '$account', '$name', '$email', '$tel', '$id_card', '$birthday', '$adopter_sex', '$adoption_times', '$feeding_place', '$space', '$income', '$available_time', '$animal_species', '$animal_number', '$address', '$cohabitation', '$adopter_remark')";
	$result = execute_sql($link, "animatch", $sql);
	
   //關閉資料連接	
   mysqli_close($link);
?>
