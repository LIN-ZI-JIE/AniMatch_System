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
      <a href="#home" onclick="javascript:location.href='adopter_main.php'" class="w3-button w3-block w3-sand">首頁</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" onclick="javascript:location.href='adopter_chat.php'" class="w3-button w3-block w3-sand">浪浪討論室</a>
    </div>
    <div class="w3-col s2">
      <a href="#information" onclick="javascript:location.href='adopter_member.php'" class="w3-button w3-block w3-sand">會員資訊</a>
    </div>
    <div class="w3-col s2 w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-block w3-sand" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a onclick="javascript:location.href='adopter_mainPet.php'" class="w3-button w3-block w3-sand">浪浪們</a>
        <a href="#program" onclick="javascript:location.href='adopter_program.php'" class="w3-button w3-block w3-sand">領養程序</a>
        <a href="map" onclick="javascript:location.href='adopter_map.php'" class="w3-button w3-block w3-sand">寵物醫院</a>
      </div>
     </div> 
     <div class="w3-col s2">
      <a href="#Sign out" onclick="javascript:location.href='logout.php'" class="w3-button w3-block w3-sand">登出</a>
    </div>
    <div class="w3-col s1">
      <a href="javascript:void(0)" onclick="document.getElementById('search').style.display='block'" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
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
    <img src="background.png" style="width:30% ">
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

 <!--  搜尋 -->
  <div id="search" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-sand">
      <span onclick="document.getElementById('search').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>搜尋</h1>
    </div>
    <div class="w3-container">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="關鍵字" required name="keyword"></p>
        <p><button onclick="javascript:location.href='search.php'" class="w3-button" type="submit">搜尋</button></p>
    </div>
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
        <div class="w3-rest s6 tablink">修改圖片</div>
      </a>
    </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
     <form method="post" action="adopter_photo1.php" enctype="multipart/form-data">
	  <?php
		require_once("dbtools.inc.php");
		$member_ID1 = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link1 = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_set = "SELECT * FROM adopter_photo where member_ID = $member_ID1";
        $result_set1 = execute_sql($link1, "animatch", $sql_set);
		$result_set2 = execute_sql($link1, "animatch", $sql_set);
		$total_photo = mysqli_num_rows($result_set1);
	  ?>
	  
	    <span style='font-size:20px'>step1:上傳圖片<br>
        <input type="file" name="myfile[]" size="50"><br>
	    <input type="file" name="myfile[]" size="50"><br>
	    <input type="file" name="myfile[]" size="50"><br>	      
	    <input type="submit" value="上傳"><br></span>
		<p style='font-size:20px'>step2:編輯圖片
		
		<table width='100%' border='0'>
        <?php 
	      $photo_per_row = 3;
		  $i = 1;
		  $j = 0;
		  while ($row2 = mysqli_fetch_assoc($result_set1))
          {
			$adopter_filename = $row2["adopter_filename"];
			  
			if ($i % $photo_per_row == 1)
              echo "<tr>";
		  
            echo "<td align='center' width='25%'><img src='$adopter_filename' style='width:250px'>";
		    echo "</td>";
				 
			if ($i % $photo_per_row == 0 || $i == $total_photo)
			{
			  echo "</tr>";
			  while ($row3 = mysqli_fetch_assoc($result_set2))
              {
				$j++;
				$adopter_photoID = $row3['adopter_photoID'];
					  
				if ($j % $photo_per_row == 1)
                  echo "<tr>";
                echo "<td align='center'>";
				?>
				
                <button onclick="javascript:return del();" class='w3-button w3-red'><?php echo "<a href='adopter_delPhoto.php?adopter_photoID=$adopter_photoID' style='text-decoration:none;'>"; ?>刪除<?php echo "</a>";?></button>
				
				<?php
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
?>
	  </div>
	 </form>
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

function del() {
  var msg = "您真的確定要刪除嗎？\n\n請確認！";
  if (confirm(msg)==true){
    return true;
  }else{
    return false;
  }
}
</script>

</body>
</html>
