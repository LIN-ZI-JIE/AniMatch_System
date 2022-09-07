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

  

  <!-- 添加背景色 -->
<div style="background-color:#F7F5F2">

<!-- 相關表格 -->
<div class="w3-container" id="menu">
  <div class="w3-content" >
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">浪浪相關資訊</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
     <a href="javascript:void(0)" onclick="openMenu(event, 'user');" id="myLink">
        <div class="w3-rest s6 tablink">新增浪浪資訊</div>
      </a>
    </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
      <form action="add_animal2.php" method="post" target="_self">
        <font size="4">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*小名" required name="animal_nickname"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*性別" required name="animal_sex"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*動物類別" required name="animal_category"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*品種" required name="animal_variety"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*目前年齡 " required name="age"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*目前體重 " required name="weight"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*晶片號碼 " required name="microchip"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*發現地點 " required name="found_location"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*收容地點 " required name="shelter_location"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*特徵描述 " required name="feature"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*健康狀況 " required name="health"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*接踵疫苗 " required name="vaccine"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*是否結紮 " required name="neuter"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*飲食習慣 " required name="diet"></p>
		<p>&nbsp;*發現日期</p>
		<p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder= "*發現日期 " required name="discovered"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "*領養狀態 " required name="adopt"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "領養人 " name="adopter_ID"></p>
		<p>&nbsp;*最後更新日期</p>
		<p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder= "*最後更新日期 " required name="updated"></p>
		<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder= "備註 " name="animal_remark"></p>
		</font>
		<p align="center">
		<button class="w3-button" type="submit">新增</button>
        </p>
      </form>
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
