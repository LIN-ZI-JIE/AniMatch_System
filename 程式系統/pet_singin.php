<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM stray_animals WHERE pet_ID=".$_GET['edit_id'];
 $result_set= mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $pet_ID = $_GET["pet_ID"];
 $member_ID = $_COOKIE{"member_ID"};
 
 $sql = "SELECT * FROM stray_animals where pet_ID = $pet_ID";
 $result = mysqli_query($link, $sql);
 $row = mysqli_fetch_assoc($result);
 $stray_ID = $row["member_ID"];
 
 // sql query for update data into database
 $sql_query = "INSERT INTO adopter_stray(pet_ID,adopter_ID,adopter_will,stray_ID)
	           VALUES ('$pet_ID','$member_ID','1','$stray_ID')";             
 
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
    alert('已將您的領養資訊送至中途之家，請等待中途之家聯絡您。');
    window.location.href='adopter_main.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('您已經點擊領養過囉！');
  </script>
  <?php
 }
}
?>
<?php
require_once("dbtools.inc.php");
$pet_ID = $_GET["pet_ID"];
$member_ID = $_COOKIE{"member_ID"};
 $link = create_connection();
 $sqlr= "SELECT * FROM stray_animals Where pet_ID = '$pet_ID'";
 $resultr = execute_sql($link, "animatch", $sqlr);
 $sqlz= "SELECT * FROM recommend Where member_ID = '$member_ID'";
 $resultz = execute_sql($link, "animatch", $sqlz);
 $rowr = mysqli_fetch_assoc($resultr);
 $rowz = mysqli_fetch_assoc($resultz);
 echo $variety_ID=$rowr['variety_ID'];
 echo $variety_ID1=$rowz['variety_ID'];
 echo $variety_click=$rowz['variety_click'];
if($variety_ID == $variety_ID1)
  {
  echo $variety_click=$variety_click+1;
  }
  $sql_t = "UPDATE recommend SET variety_click =$variety_click WHERE member_ID =$member_ID";
  
   //關閉資料連接 
   mysqli_close($link);
?>

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
		<a href="#program"  class="w3-button w3-block w3-sand">領養程序</a>
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
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="關鍵字" required name="keyword"></p>
        <p><button onclick="javascript:location.href='search.php'" class="w3-button" type="submit">搜尋</button></p>
    </div>
  </div>
</div>



  <!-- 添加背景色 -->
<div class="w3-sand w3-grayscale ">

<!-- 相關表格 -->
<div class="w3-container" id="menu">
  <div class="w3-content" >
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">浪浪相關資訊</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'after');">
        <div class="w3-rest s6 tablink">領養注意事項</div>
      </a>
    </div>

    <div id="after" class="w3-container menu w3-padding-48 w3-card">
	 <form method="post" target="_self">
	<?php
		require_once("dbtools.inc.php");
		$pet_ID = $_GET["pet_ID"]; 
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query = "SELECT * FROM stray_animals where pet_ID = $pet_ID";
        $result_set = execute_sql($link, "animatch", $sql_query);
        $row = mysqli_fetch_assoc($result_set);
    ?>
	
	 <font size="4">
       <p>1.領養人須年滿20歲及持有身份證。未滿20歲者，須由同住的父母或監護人代為申請。</p><br>
       <p>2.領養人必須為動物提供合適的居住環境，並會盡力照顧牠們。</p><br>
       <p>3.你必須遞交住址證明，才能完成申請程序。某些情況之下，你亦要遞交證明確保你的住宅允許飼養寵物。在個別個案中，我們或許會要求家訪。</p><br>
       <p>4.領養人需要簽署一份領養協議。</p><br>
       <p>5.領養人必須為本會會員。</p><br>
       <p>6.中途之家有權拒絕任何領養申請。</p><br>
       <p>7.領養後需上傳後續追蹤的相關資訊。</p><br>
	  </font>
	  <p align="center"><button name="btn-update" a href="javascript:edit_id('<?php echo $row['pet_ID']; ?>')" class="w3-button" type="submit">確認領養</button></p>
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