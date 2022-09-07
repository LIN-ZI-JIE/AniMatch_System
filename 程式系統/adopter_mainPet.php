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
        <a  onclick="javascript:location.href='adopter_map.php'" class="w3-button w3-block w3-sand">寵物醫院</a>
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
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
     <span class="w3-tag">歡迎各位領養浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:45px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">領養可愛浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-sand" style="font-size:45px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 80%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">歡迎領養浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:45px">AniMatch<br>浪浪領養系統</span></span>
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
      <form action="search.php" method="post" target="_self">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*關鍵字" required name="keyword"></p>
        <p align="center"><button class="w3-button" type="submit">搜尋</button></p>
      </form>
    </div>
  </div>
</div>

<!-- 添加背景色 -->
<div style="background-color:#F7F5F2">
<?php
      require_once("dbtools.inc.php");
	  $member_ID = $_COOKIE{"member_ID"};
      
      //建立資料連接
      $link = create_connection();
	  
	  $sqlk = "SELECT * FROM recommend where member_ID = $member_ID Order By variety_click Desc";
      $resulk = execute_sql($link, "animatch", $sqlk); 

	  $total_photo = 4;	  
										
      echo "<table width='100%' border='0'>";

      //指定每列顯示幾張照片
      $photo_per_row = 4;
      					
      //顯示相片縮圖
      $i = 1;
	  $j = 0;
      while ($rowk = mysqli_fetch_assoc($resulk))
      {
		$variety_ID = $rowk['variety_ID'];
		
		$sql = "SELECT * FROM stray_animals WHERE variety_ID = $variety_ID";
        $result = execute_sql($link, "animatch", $sql);
	    while ($row = mysqli_fetch_assoc($result))
		{
		  $pet_ID = $row["pet_ID"];
		
		  $sql1 = "SELECT * FROM animal_photo where pet_ID = $pet_ID";
          $result2 = execute_sql($link, "animatch", $sql1);
		  $row2 = mysqli_fetch_assoc($result2);
		  $animal_filename = $row2["animal_filename"];
		
		  if ($i % $photo_per_row == 1)
            echo "<tr>";
		
		  if($rowk['variety_ID']==$row['variety_ID'])
          {
		    echo "<td align='center' width='25%'>";
		    echo "<img src='$animal_filename' style='width:300px'>";
		    echo "</td>";
		
		    if ($i % $photo_per_row == 0 || $i == $total_photo)
		    {
              echo "</tr>";
			  
			  $sqlk1 = "SELECT * FROM recommend where member_ID = $member_ID Order By variety_click Desc";
              $resulk1 = execute_sql($link, "animatch", $sqlk); 
		      while($rowk1 = mysqli_fetch_assoc($resulk1))
              {
				$variety_ID = $rowk1['variety_ID'];
				$sql3 = "SELECT * FROM stray_animals WHERE variety_ID = $variety_ID";
			    $result3 = execute_sql($link, "animatch", $sql3);
				while ($row3 = mysqli_fetch_assoc($result3))
		        {
			      $j++;
			      $animal_nickname = $row3["animal_nickname"];
      	          $animal_category = $row3["animal_category"];
			      $pet_ID1 = $row3["pet_ID"];
			
			      if ($j % $photo_per_row == 1)
                    echo "<tr>";
			  
			      if($rowk1['variety_ID']==$row3['variety_ID'])
                  {
		            echo "<td align='center'>";
					echo "<span class='w3-tag w3-round-large w3-red w3-center '>為您推薦</span><br>";
					echo "<br><button class='w3-button w3-black' type='submit'><a href='adopter_pet.php?pet_ID=$pet_ID1' style='text-decoration:none;'>了解詳情 <i class='fa fa-folder-open-o'></i></a></button>";
                    echo "<br><span style='font-size:18px'>類別：$animal_category";
			        echo "<br><span style='font-size:18px'>暱稱：$animal_nickname";
                    echo "</td>";
			
			        if ($j % $photo_per_row == 0 || $j == $total_photo)
			        {
                      echo "</tr>";
			          break;
			        }
				  }
				}
				if($j == $total_photo)
				  break;
		      }	
	        }
		  $i++;
		  }
		}
		if($i == $total_photo + 1)
		  break;
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
