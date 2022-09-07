<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM titles WHERE titles_ID=".$_GET['edit_id'];
 $result_set= mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}

if(isset($_POST['btn-update']))
{
 // variables for input data
 $member_ID = $_COOKIE{"member_ID"};
 $titles_ID = $_GET["titles_ID"];
 $titles = $_POST["titles"];
 $titles_content = $_POST["titles_content"];
 
 $sql_query  = "SELECT * FROM titles WHERE titles_ID = $titles_ID";
 $result_set = mysqli_query($link, $sql_query);
 //$row = mysqli_fetch_assoc($result_set);
 

 //sql query for update data into database
 $sql_t = "UPDATE titles SET titles =$titles,titles_content =$titles_content WHERE titles_ID =$titles_ID";
        
 //sql query execution function
 if(mysqli_query($link, $sql_t))
 {
  ?>
  <script type="text/javascript">
  alert('資料修改成功');
  window.location.href='stray_chat.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('資料修改失敗');
  </script>
  <?php
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AniMatch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
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
    <img src="background.png" style="width: 30% ">
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

<!-- 頁面容器 -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- 網格 -->
  <div class="w3-row">
    <!-- 左列 -->
    <div class="w3-col m3">
      <!-- 個人簡歷 -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">我的簡歷</h4>
         <p class="w3-center"><img src="02.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <?php
          require_once("dbtools.inc.php");
          $member_ID = $_COOKIE{"member_ID"};
          $link = create_connection();
          $sql_query=" SELECT * FROM member where member_ID =$member_ID ";
          $result_set = execute_sql($link,"animatch", $sql_query);
          $row = mysqli_fetch_assoc($result_set)
         
         ?>
          <p><i class="fa fa-user-circle-o w3-margin-right w3-text-theme"></i> <?php echo $row['nickname']; ?></p>
       
         <?php
          $link = create_connection();
          $sql_query=" SELECT * FROM adopter where member_ID =$member_ID ";
          $result_set = execute_sql($link,"animatch", $sql_query);
          $row = mysqli_fetch_assoc($result_set)
          ?>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['birthday']; ?></p>
          
        </div>
      </div>
      <br>

      <!-- 興趣 --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>愛好</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">犬</span>
            
            <span class="w3-tag w3-small w3-theme-d1">小型犬</span>
            
            <span class="w3-tag w3-small w3-theme-l5">毛色黃</span>
          </p>
        </div>
      </div>
      <br>
      <!-- 警報匡 -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>嗨!</strong></p>
        <p>準備好要領養寵物了嗎？</p>
      </div>
    
    <!-- 左側結束 -->
    </div>

    <!-- 中欄-->
    <div class="w3-col m7">
	 <div class="w3-row-padding">
	  <div class="w3-card w3-round w3-white">
       <div class="w3-container w3-padding">
	  	<br>
         <form  method="post" target="_self">
		  <img src="02.png" alt="Avatar" class="fa-user-circle-o w3-margin-right" style="width:60px">
			<?php
			require_once("dbtools.inc.php");
			$member_ID = $_COOKIE{"member_ID"};
			$titles_ID = $_GET["titles_ID"];
			
			//建立資料連接
			$link = create_connection();
					
			//執行 SELECT 陳述式取得使用者資料
			$sql_query = "SELECT * FROM titles WHERE titles_ID = $titles_ID";
			$result_set = execute_sql($link, "animatch", $sql_query);
			$row = mysqli_fetch_assoc($result_set);
			$sql1 = "SELECT * FROM member WHERE member_ID = $member_ID";
		    $result = execute_sql($link, "animatch", $sql1);
		    $row1 = mysqli_fetch_assoc($result)
			?>
			
			  <?php echo $row1['nickname']; ?>
			  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="主題" required name="titles"></p>
			
			  <hr class="w3-clear">
			
			  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="內容" required name="titles_content"></p>
			  <p><button class="w3-button w3-right w3-theme" name="btn-update" a href="javascript:edit_id('<?php echo $row['titles_ID']; ?>')" type="submit">確認修改</button></p>
			</form>
		    
    </div>
   </div>
  </div>
 </div>
 </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
      
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
