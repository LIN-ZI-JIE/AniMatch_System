<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM track_photo WHERE track_photoID=".$_GET['edit_id'];
 $result_set= mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $track_photoID = $_GET["track_photoID"];
 $track_comment = $_POST["track_comment"];
 
 // sql query for update data into database
 $sql_query = "UPDATE track_photo SET track_comment='$track_comment' WHERE track_photoID=$track_photoID";
        
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('資料修改成功');
  window.location.href='adopter_member.php';
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
        <a href="#program" onclick="javascript:location.href='adopter_program.php'" class="w3-button w3-block w3-sand">領養程序</a>
        <a href="#" class="w3-button w3-block w3-sand">例子</a>
        <a href="#" class="w3-button w3-block w3-sand">其他</a>
      </div>
     </div> 
     <div class="w3-col s2">
      <a href="#Sign out" onclick="javascript:location.href='logout.php'" class="w3-button w3-block w3-sand">登出</a>
      
    </div>
    <div class="w3-col s1">
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  
    </div>
    </div>
</div>
    


<!-- 小螢幕的導覽欄 onclick="myFunction()在class後面加這個會讓導覽欄亭在原位-->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#home" class="w3-button w3-block w3-sand" >首頁</a>
  <a href="#about" class="w3-button w3-block w3-sand" >領養程序</a>
  <a href="#information" onclick="javascript:location.href='adopter_member.php'" class="w3-button w3-block w3-sand" >會員資訊</a>
  <a href="#"  class="w3-button w3-block w3-sand">資訊</a>
  <a href="#" class="w3-button w3-block w3-sand">例子</a>
  <a href="#" class="w3-button w3-block w3-sand">其他</a>
  <a href="#Sign out" onclick="javascript:location.href='logout.php'" class="w3-button w3-block w3-sand" >登出</a>
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

  

  <!-- 添加背景色 -->
<div style="background-color:#F7F5F2">

<!-- 相關表格 -->
<div class="w3-container" id="menu">
  <div class="w3-content" >
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">會員相關資訊</span></h5>
  
    <div class="w3-rest w3-center w3-card w3-padding">
     <a href="javascript:void(0)" onclick="openMenu(event, 'user');" id="myLink">
       <div class="w3-rest s6 tablink">修改圖片介紹</div>
     </a>
    </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
	  <?php
		require_once("dbtools.inc.php");
		$track_photoID = $_GET["track_photoID"];
		
        //建立資料連接
        $link1 = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query = "SELECT * FROM track_photo where track_photoID = $track_photoID";
        $result_set = execute_sql($link, "animatch", $sql_query);
	  ?>
	  
		<table width='100%' border='0'>
        <?php 
	      $photo_per_row = 3;
		  $row = mysqli_fetch_assoc($result_set);
		  $track_filename = $row["track_filename"];
          echo "<tr>";
          echo "<td align='center' width='25%'><img src='$track_filename' style='width:250px'>";
		  echo "</td>";
		  echo "</tr>";
          echo "<tr>";
		?>
			  
          <td align='center'>
		  <form method="post" target="_self">
		  <p>圖片介紹:<input class='w3-input w3-padding-16 w3-border' type='text' placeholder='圖片介紹' value="<?php echo $row['track_comment']; ?>" name='track_comment'></p>
		  <button name="btn-update" a href="javascript:edit_id('<?php echo $row[$track_photoID]; ?>')" class="w3-button w3-black" type="submit">修改</button>
		  </form>
			  
		  <?php
			echo "</td>";
			echo "</tr>";
		    echo "</table>" ;
          ?>
	    </div>
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
