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
      <a href="#home" onclick="javascript:location.href='stray_main.php'" class="w3-button w3-block w3-sand">首頁</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" onclick="javascript:location.href='stray_chat.php'" class="w3-button w3-block w3-sand">浪浪討論室</a>
    </div>
    <div class="w3-col s2">
      <a href="#information" onclick="javascript:location.href='stray_member.php'" class="w3-button w3-block w3-sand">會員資訊</a>
    </div>
    <div class="w3-col s2 w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-block w3-sand" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#program" onclick="javascript:location.href='stray_program.php'" class="w3-button w3-block w3-sand">領養程序</a>
        <a  onclick="javascript:location.href='stray_map.php'"class="w3-button w3-block w3-sand">寵物醫院</a>
      </div>
     </div> 
     <div class="w3-col s2">
      <a href="#Sign out" onclick="javascript:location.href='logout.php'" class="w3-button w3-block w3-sand">登出</a>
    </div>    
    </div>
</div>
    


<!-- 小螢幕的導覽欄 onclick="myFunction()在class後面加這個會讓導覽欄亭在原位-->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#home" class="w3-button w3-block w3-sand" >首頁</a>
  <a href="#about" class="w3-button w3-block w3-sand" >領養程序</a>
  <a href="#information" onclick="javascript:location.href='stray_member.php'" class="w3-button w3-block w3-sand" >會員資訊</a>
  <a href="#"  class="w3-button w3-block w3-sand">資訊</a>
  <a href="#" class="w3-button w3-block w3-sand">例子</a>
  <a href="#" class="w3-button w3-block w3-sand">其他</a>
  <a href="#Sign out" onclick="javascript:location.href='logout.php'" class="w3-button w3-block w3-sand" >登出</a>
</div>


<!-- 頁面內容 -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- 自動幻燈片 -->
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:20px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-sand" style="font-size:20px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:20px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>

  

  <!-- 添加背景色 -->
<div style="background-color:#F7F5F2">

<!-- 相關表格 -->
<div class="w3-container" id="menu">
  <div class="w3-content" >
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">會員相關資訊</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
     <a href="javascript:void(0)" onclick="openMenu(event, 'user');" id="myLink">
        <div class="w3-quarter s6 tablink">會員資訊</div>
      </a>
	 <a href="javascript:void(0)" onclick="openMenu(event, 'animal');" id="myAnimal">
        <div class="w3-quarter s6 tablink">寵物資訊</div>
      </a>
	 <a href="javascript:void(0)" onclick="openMenu(event, 'adopter');">
       <div class="w3-quarter s6 tablink">認養資訊</div>
     </a>
	  
     <a href="javascript:void(0)" onclick="openMenu(event, 'after');">
        <div class="w3-quarter s6 tablink">後續追蹤</div>
      </a>
    </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
      <form  method="post" target="_blank">
        <?php
		require_once("dbtools.inc.php");
		$member_ID = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query = "SELECT * FROM animal_shelter where member_ID = $member_ID";
        $result_set = execute_sql($link, "animatch", $sql_query);
        $row = mysqli_fetch_assoc($result_set);
		
  ?>
        
        <font size="4">
		<p>中途之家:<?php echo $row['company_name']; ?> <required name="company_name"></p>
        <p>簡介：<?php echo $row['introduction']; ?> <required name="introduction"></p>
		<p>姓名：<?php echo $row['name']; ?> <required name="name"></p>
		<p>身分證：<?php echo $row['id_card']; ?> <required name="id_card"></p>
		<p>出生日期：<?php echo $row['birthday']; ?> <required name="birthday"></p>
		<p>聯絡電話：<?php echo $row['tel']; ?> <required name="tel"></p>
		<p>電子信箱：<?php echo $row['email']; ?> <required name="email"></p>
		<p>備註：<?php echo $row['stray_remark']; ?> <required name="stray_remark"></p>
		
        </font>
		
		<p align="center">
		<button onclick="javascript:location.href='stray_updatapsd.php'" class="w3-button" type="submit">修改密碼</button>
        <button onclick="javascript:location.href='stray_updata.php'" class="w3-button" type="submit">修改基本資料</button>
		</p>

      </form>
    </div>

    <div id="animal" class="w3-container menu w3-padding-48 w3-card">
      <form method="post" target="_blank">
        <?php
		require_once("dbtools.inc.php");
		$member_ID = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query = "SELECT * FROM stray_animals where member_ID = $member_ID";
        $result_set = execute_sql($link, "animatch", $sql_query);
        while ($row = mysqli_fetch_assoc($result_set))
		{
		$pet_ID = $row['pet_ID'];
		
        ?>
        
        <font size="4">
		<p>浪浪ID:<?php echo $row['pet_ID']; ?> <required name="member_ID"></p>
		<p>小名:<?php echo $row['animal_nickname']; ?> <required name="animal_nickname"></p>
        <p>性別：<?php echo $row['animal_sex']; ?> <required name="animal_sex"></p>
        <p>動物類別：<?php echo $row['animal_category']; ?> <required name="animal_category"></p>
        <p>品種:<?php echo $row['animal_variety']; ?> <required name="animal_variety"></p>
        <p>目前年齡：<?php echo $row['age']; ?> <required name="age"></p>
        <p>目前體重：<?php echo $row['weight']; ?> <required name="weight"></p>
        <p>晶片號碼:<?php echo $row['microchip']; ?> <required name="microchip"></p>
        <p>發現地點:<?php echo $row['found_location']; ?> <required name="found_location"></p>
        <p>收容地點:<?php echo $row['shelter_location']; ?> <required name="shelter_location"></p>
        <p>特徵描述:<?php echo $row['feature']; ?> <required name="feature"></p>
		<p>健康狀況:<?php echo $row['health']; ?> <required name="health"></p>
        <p>接踵疫苗:<?php echo $row['vaccine']; ?> <required name="vaccine"></p>
        <p>是否結紮:<?php echo $row['neuter']; ?><required name="neuter"></p>
		<p>飲食習慣:<?php echo $row['diet']; ?><required name="diet"></p>
		<p>照片或影片:<br><required name="animal_photo"></p>
		
		<?php
		$sql = "SELECT * FROM animal_photo where pet_ID = $pet_ID";
        $result = execute_sql($link, "animatch", $sql);
		while ($row1 = mysqli_fetch_assoc($result))
		{
		?>
		
		<img src="<?php echo $row1['animal_filename']; ?>" style='width:200px'>
        
		<?php
		}
		?>
		
        <p>發現日期:<?php echo $row['discovered']; ?> <required name="discovered"></p>
		<p>領養狀態:<?php echo $row['adopt']; ?> <required name="adopt"></p>
		<p>領養人:<?php echo $row['adopter_ID']; ?> <required name="adopter_ID"></p>
		<p>最後更新日期	:<?php echo $row['updated']; ?> <required name="updated"></p>
		<p>備註:<?php echo $row['animal_remark']; ?> <required name="animal_remark"></p>
		<button class="w3-button" type="submit"><?php echo "<a href='animal_updata.php?pet_ID=$pet_ID' style='text-decoration:none;'>"; ?>修改浪浪資料<?php echo "</a>"; ?></button>
		<hr style='height:2px;border-width:0;color:gray;background-color:gray'>
		<?php
		}
		?>
        </font>
		
		<p align="center">
		<button onclick="javascript:location.href='add_animal.php'" class="w3-button" type="submit">新增浪浪資料</button>
		<button onclick="javascript:location.href='animal_photo.php'" class="w3-button" type="submit">修改浪浪圖片</button></p>
		</p>
      </form>       
    </div> 

    <div id="adopter" class="w3-container menu w3-padding-48 w3-card">
        <?php
		require_once("dbtools.inc.php");
		$member_ID = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query1 = "SELECT * FROM adopter_stray where stray_ID = $member_ID";
        $result_set1 = execute_sql($link, "animatch", $sql_query1);
        while($row1 = mysqli_fetch_assoc($result_set1))
		{
		$adopter_ID = $row1['adopter_ID'];
		$pet_ID1 = $row1['pet_ID'];
		
		$sql_query = "SELECT * FROM adopter where member_ID = $adopter_ID";
        $result_set = execute_sql($link, "animatch", $sql_query);
        while($row = mysqli_fetch_assoc($result_set))
		{
	  
  ?>
          <font size="4">
		  <p>欲認養浪浪ID:<?php echo $pet_ID1; ?> <required name="pet_ID"></p>
		  <p>認養次數:<?php echo $row['adoption_times']; ?> <required name="adoption_times"></p>
          <p>姓名：<?php echo $row['name']; ?> <required name="name"></p>
          <p>身分證：<?php echo $row['id_card']; ?> <required name="id_card"></p>
          <p>出生日期:<?php echo $row['birthday']; ?> <required name="birthday"></p>
          <p>性別：<?php echo $row['adopter_sex']; ?> <required name="adopter_sex"></p>
          <p>聯絡電話：<?php echo $row['tel']; ?> <required name="tel"></p>
          <p>飼養地點:<?php echo $row['feeding_place']; ?> <required name="feeding_place"></p>
          <p>空間大小:<?php echo $row['space']; ?> <required name="space"></p>
          <p>收入級距:<?php echo $row['income']; ?> <required name="income"></p>
          <p>可聯絡時間:<?php echo $row['available_time']; ?> <required name="available_time"></p>
          <p>現有動物種類:<?php echo $row['animal_species']; ?> <required name="animal_species"></p>
          <p>現有動物數量:<?php echo $row['animal_number']; ?> <required name="animal_number"></p>
          <p>通訊地址:<?php echo $row['address']; ?> <required name="address"></p>
          <p>同居狀況:<?php echo $row['cohabitation']; ?><required name="cohabitation"></p>
          <p>同居狀況:<?php echo $row1['adopter_ID']; ?><required name="cohabitation"></p>
	      <p>飼養場所照片:<br><required name="adopter_photo"></p>
		
          <?php
	   	  $sql = "SELECT * FROM adopter_photo where member_ID = $adopter_ID";
          $result = execute_sql($link, "animatch", $sql);
		  while ($row2 = mysqli_fetch_assoc($result))
		  {
		  ?>
		
		  <img src="<?php echo $row2['adopter_filename']; ?>" style='width:200px'>

		  <?php
		  }
		  ?>
		
          <p>電子郵件:<?php echo $row['email']; ?> <required name="email"></p>
          <p>備註:<?php echo $row['adopter_remark']; ?> <required name="adopter_remark"></p>
		
		  <?php
		  if($row1['stray_agree']==1)
		  {
	         echo"<font size='4'>
		          領養進度：已確認領養人資訊，等待領養人回覆。
		          </font>";
		  }
		  else if($row1['stray_disagree']==1)
		  {
	         echo"<font size='4'>
		          領養進度：已拒絕領養人資訊。
		          </font>";
		  }
		  else
		  {
	         echo"<font size='4'>
		          領養進度：尚未確認領養人資訊。
		          </font>";
		  }
		  
		  if(($row1['stray_agree']==0)&&($row1['stray_disagree']==0))
		  {
		  ?>
		
		  <p align="center">
	      <button class="w3-button" type="submit"><?php echo "<a href='stray_agree.php?pet_ID=$pet_ID1' style='text-decoration:none;'>"; ?>同意<?php echo "</a>"; ?></button>
	      <button class="w3-button" type="submit"><?php echo "<a href='stray_disagree.php?pet_ID=$pet_ID1' style='text-decoration:none;'>"; ?>不同意<?php echo "</a>"; ?></button>
		  </p>
		  <?php
		  }
		  ?>
          </font>
		  <?php
		  echo"<hr style='height:1px;border-width:0;color:gray;background-color:gray'>";
		  
		}
		}
		?>
    </div>

	<div id="after" class="w3-container menu w3-padding-48 w3-card">
	  <?php
		require_once("dbtools.inc.php");
		$member_ID = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql = "SELECT * FROM track_photo where stray_ID = $member_ID ORDER BY pet_ID";
        $result_set = execute_sql($link, "animatch", $sql);
		$result_set1 = execute_sql($link, "animatch", $sql);		
		$total_photo = mysqli_num_rows($result_set1);
	  ?>

		<table width='100%' border='0'>
        <?php 
	      $photo_per_row = 3;
		  $i = 1;
		  $j = 0;
		  while ($row = mysqli_fetch_assoc($result_set))
          {
			$track_filename = $row["track_filename"];
			  
			if ($i % $photo_per_row == 1)
              echo "<tr>";
		  
            echo "<td align='center' width='25%'><img src='$track_filename' style='width:250px'>";
		    echo "</td>";
				 
			if ($i % $photo_per_row == 0 || $i == $total_photo)
			{
			  echo "</tr>";
			  while ($row1 = mysqli_fetch_assoc($result_set1))
              {
				$j++;
				$track_photoID = $row1['track_photoID'];
				$track_comment = $row1['track_comment'];
				$pet_ID = $row1['pet_ID'];
				
				$sql3="SELECT * FROM stray_animals WHERE pet_ID=$pet_ID";
                $result_set3 = execute_sql($link, "animatch", $sql3);
                $row3 = mysqli_fetch_array($result_set3);
				$animal_nickname = $row3['animal_nickname'];
				
				if ($j % $photo_per_row == 1)
                  echo "<tr>";
			   ?>
                <td align='center'>
				<p style='font-size:20px'>浪浪ID：<?php echo "$pet_ID";?>
				<p style='font-size:20px'>浪浪名稱：<?php echo "$animal_nickname";?>
				<p style='font-size:20px'>圖片介紹：
				<p style='font-size:20px'><?php echo "$track_comment";?>
                </p>
				</td>
				
				<?php
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
?>
	    </div>
    </div>
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

// 標籤式菜單
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


</body>
</html>
