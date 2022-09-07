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
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
     <span class="w3-tag">歡迎各位領養浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-deep-orange" style="font-size:20px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">領養可愛浪浪</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-sand" style="font-size:20px">AniMatch<br>浪浪領養系統</span></span>
  </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="background.png" style="width: 30%">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
   <span class="w3-tag">歡迎領養浪浪</span>
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
      <form action="search.php" method="post" target="_self">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*關鍵字" required name="keyword"></p>
        <p align="center"><button class="w3-button" type="submit">搜尋</button></p>
      </form>
    </div>
  </div>
</div>

<div>
  <p align="center" style='font-size:40px'>領養浪浪教學</p>
  <p align="center" style='font-size:30px'>STEP1:由首頁登入時選擇領養人</p>
  <p align="center"><img src=image/program/a01.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP2:登入後於主頁下方選擇喜歡的浪浪，並點擊了解詳情</p>
  <p align="center"><img src=image/program/a02.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP3:查看浪浪資訊是否符合需求，若符合可點擊我要認養</p>
  <p align="center"><img src=image/program/a03.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP4:點擊後需確認注意事項，確認後點擊確認領養，即回傳領養人資訊至中途之家</p>
  <p align="center"><img src=image/program/a04.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP5:等待中途之家回覆，若同意則可盡速與中途之家聯絡</p>
  <p align="center"><img src=image/program/a05.png style='width:600px'></p>
  <p align="center"><img src=image/program/a06.png style='width:800px'></p>
  
  <p align="center" style='font-size:40px'>刊登浪浪教學</p>
  <p align="center" style='font-size:30px'>STEP1:由首頁登入時選擇中途之家</p>
  <p align="center"><img src=image/program/s01.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP2:登入後點擊會員資訊</p>
  <p align="center"><img src=image/program/s02.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP3:點擊寵物資訊，並選擇新增浪浪</p>
  <p align="center"><img src=image/program/s03.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP4:填入浪浪相關資訊後，點擊新增</p>
  <p align="center"><img src=image/program/s04.png style='width:600px'></p>
  <p align="center" style='font-size:30px'>STEP5:回到寵物資訊，查看或編輯浪浪資訊</p>
  <p align="center"><img src=image/program/s05.png style='width:600px'></p>
  <p align="center"><img src=image/program/s06.png style='width:600px'></p>
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