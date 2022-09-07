<!DOCTYPE html>
<html lang="en">
<head>
<title>AniMatch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}
.mySlides {display: none}

.menu {display: none;}
</style>

</head>
<body>

<!-- 導覽欄 -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-sand">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div class="w3-col s3">
      <a href="#home" onclick="javascript:location.href='index.php'" class="w3-bar-item w3-button w3-block w3-sand">首頁</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" onclick="javascript:location.href='program.php'" class="w3-bar-item w3-button w3-block w3-sand">領養程序</a>
    </div>
    <div class="w3-col s3">
      <a href="#animals" onclick="javascript:location.href='map.php'" class="w3-bar-item w3-button w3-block w3-sand">寵物醫院</a>
    </div>
    <div class="w3-col s2">
      <a href="#Signin" onclick="document.getElementById('Sign in').style.display='block'" class="w3-bar-item w3-button w3-block w3-sand">登入</a>
    </div>
    </div>
</div>
    
<!-- 小螢幕的導覽欄 onclick="myFunction()在class後面加這個會讓導覽欄亭在原位-->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  
</div>

<!-- 頁面內容 -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- 自動幻燈片 -->
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
     <span class="w3-tag">歡迎各位領養浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:45px">Stray animals<br>領養系統</span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">領養可愛浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-sand" style="font-size:45px">Stray animals<br>領養系統</span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">歡迎領養浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:45px">Stray animals<br>領養系統</span>
  </div>
  </div>

<!--  選擇登入角色 -->
<div id="Sign in" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('Sign in').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>登入</h1>
    </div>
    <div class="w3-container">
      <p>請使用您的帳戶角色</p>
        <p><button onclick="document.getElementById('zSign').style.display='block'" class="w3-button" type="submit">領養者</button></p>
        <p><button onclick="document.getElementById('sigin').style.display='block'" class="w3-button" type="submit">中途之家</button></p>
    </div>
  </div>
</div>


 <!--  登入 -->
 <div id="zSign" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('zSign').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>登入（領養者）</h1>
    </div>
    <div class="w3-container">
        <p>請使用您的帳戶</p>
      <form action="adopter_checkpwd.php" method="post" name="myForm" target="_self">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="帳號" required name="account"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="密碼" required name="password"></p>
        <p align="center">
		<button class="w3-button" type="submit">登入</button>
        <button onclick="document.getElementById('registered').style.display='block'" class="w3-button" type="submit">註冊</button>
		</p>
      </form>
    </div>
  </div>
  </div>
  <!--  註冊 -->
<div id="registered" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('registered').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>註冊（領養者）</h1>
    </div>
    <div class="w3-container">
      <p>請填寫相關資料(標示「*」欄位請務必填寫)</p>
      <form action="add_adopter.php" method="post" target="_self">
      
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*使用者帳號(請使用英文或數字鍵)" required name="account"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="*使用者密碼(請使用英文或數字鍵)" required name="password"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="*密碼確認(請使用英文或數字鍵)" required name="re_password"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*姓名" required name="name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*暱稱" required name="nickname"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="*信箱" required name="email"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*聯絡電話" required name="tel"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*身分證" required name="id_card"></p>
		<p>&nbsp;*出生日期</p>
		<p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder="*出生日期" required name="birthday"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*性別" required name="adopter_sex"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*認養次數" required name="adoption_times"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*飼養地點" required name="feeding_place"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*空間大小" required name="space"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*收入級距" required name="income"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*可聯絡時間" required name="available_time"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*現有動物種類" required name="animal_species"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*現有動物數量" required name="animal_number"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*通訊地址" required name="address"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*同居狀況" required name="cohabitation"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="備註" name="adopter_remark"></p>
		

		<p align="center"><button class="w3-button" type="submit">註冊</button></p>

      </form>

    </div>
  </div>
</div>
<!--  登入 -->
 <div id="sigin" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('sigin').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>登入（中途之家）</h1>
    </div>
    <div class="w3-container">
        <p>請使用您的帳戶</p>
      <form action="stray_checkpwd.php" method="post" name="myForm" target="_self">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="帳號" required name="account"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="密碼" required name="password"></p>
        <p align="center">
		<button class="w3-button" type="submit">登入</button>
        <button onclick="document.getElementById('register').style.display='block'" class="w3-button" type="submit">註冊</button>
		</p>
      
      </form>
    </div>
  </div>
 </div>
<!--  註冊 -->
<div id="register" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>註冊（中途之家）</h1>
    </div>
    <div class="w3-container">
      <p>請填寫相關資料(標示「*」欄位請務必填寫)</p>
      <form action="add_stray.php" method="post" target="_self">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*使用者帳號(請使用英文或數字鍵)" required name="account"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="*使用者密碼(請使用英文或數字鍵)" required name="password"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="*密碼確認(請使用英文或數字鍵)" required name="re_password"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*中途之家" required name="company_name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*簡介" required name="introduction"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*姓名" required name="name"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*暱稱" required name="nickname"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*身分證" required name="id_card"></p>
		<p>&nbsp;*出生日期</p>
		<p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder="*出生日期" required name="birthday"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*聯絡電話" required name="tel"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="*電子信箱" required name="email"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="備註" name="stray_remark"></p>
        <p align="center"><button class="w3-button" type="submit">註冊</button></p>
      </form>
    </div>
  </div>
</div>
<!-- 添加背景色 -->
<div style="background-color:#F7F5F2">

<?php
      require_once("dbtools.inc.php");
      
      //建立資料連接
      $link = create_connection();
										
      //取得相簿裡所有照片的縮圖
      $sql = "SELECT pet_ID, animal_nickname, animal_category FROM stray_animals";
      $result = execute_sql($link, "animatch", $sql);
	  $result_set = execute_sql($link, "animatch", $sql);
	  $total_photo = mysqli_num_rows($result);
	  
      echo "<table width='100%' border='0'>";

      //指定每列顯示幾張照片
      $photo_per_row = 4;
      					
      //顯示相片縮圖
      $i = 1;
	  $j = 0;
      while ($row = mysqli_fetch_assoc($result))
      {
      	$pet_ID = $row["pet_ID"];
		
		$sql1 = "SELECT * FROM animal_photo where pet_ID = $pet_ID";
        $result2 = execute_sql($link, "animatch", $sql1);
		$row2 = mysqli_fetch_assoc($result2);
		$animal_filename = $row2["animal_filename"];
		
		if ($i % $photo_per_row == 1)
            echo "<tr>";
			
		echo "<td align='center' width='25%'><img src='$animal_filename' style='width:300px'>";
		echo "</td>";
		
		if ($i % $photo_per_row == 0 || $i == $total_photo)
		{
        echo "</tr>";
		while ($row1 = mysqli_fetch_assoc($result_set))
          {
			$j++;
			$animal_nickname = $row1["animal_nickname"];
      	    $animal_category = $row1["animal_category"];
			$pet_ID1 = $row1["pet_ID"];
			if ($j % $photo_per_row == 1)
              echo "<tr>";
		    echo "<td align='center'><button class='w3-button w3-black' type='submit'><a href='pet.php?pet_ID=$pet_ID1' style='text-decoration:none;'>了解詳情 <i class='fa fa-folder-open-o'></i></a></button>";
            echo "<br><span style='font-size:18px'>暱稱：$animal_nickname<br>";
            echo "類別：$animal_category</span>";
            echo "</td>";
			
			if ($j % $photo_per_row == 0 || $j == $total_photo)
			{
              echo "</tr>";
			  break;
			}
		  }	
	    }
		$i++;
      }
      
      echo "</table>" ;
											  		
      //釋放資源並關閉資料連接
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
  </div>
 </div>

<script>
// 自動幻燈片4秒換一次
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// 小屏幕單及菜單按鈕切換菜單
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>

</body>
</html>