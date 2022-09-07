<!DOCTYPE html>
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query = "SELECT * FROM message WHERE titles_ID=".$_GET['edit_id'];
 $result_set = mysqli_query($link, $sql_query);
 $fetched_row = mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
  //取得表單資料
  $member_ID = $_COOKIE{"member_ID"};
  $titles_ID = $_GET["titles_ID"];
  $message_content = $_POST["message_content"]; 

		
  //執行 SQL 命令，新增此帳號
  $sql = "INSERT INTO message(titles_ID,message_content,member_ID,message_time)
  VALUES ('$titles_ID','$message_content','$member_ID',NOW())";
  
  if(mysqli_query($link, $sql))
  {
  ?>
   <script type="text/javascript">
   alert('留言成功！');
   window.location.href='stray_chat.php';
   </script>
  <?php
  }
  else
  {
  ?>
   <script type="text/javascript">
   alert('留言失敗！');
   </script>
   <?php
  }
}
?>

<html lang="en">
<head>
<title>AniMatch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

<style>
html, body, h1, h2, h3, h4, h5 {
  height: 100%;
  font-family: "Open Sans", sans-serif;
}
.mySlides {display: none}

.menu {display: none;}

.buttonClass.active{
background-color: red;
}
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
    <span class="w3-sand" style="font-size:20">AniMatch<br>浪浪領養系統</span></span>
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

  

  <!-- 添加背景色<div class="w3-sand w3-grayscale "> -->


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
      <!-- 其他顏色
      <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
       -->
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
	  <div class="w3-col m12">
	   <div class="w3-card w3-round w3-white">
        <div class="w3-container w3-padding">
	  	<?php
	    $titles_ID=$_GET["titles_ID"];
	   	$sql = "SELECT titles_ID, titles, member_ID,titles_content,start_time,final_date,message_number FROM titles WHERE titles_ID=$titles_ID";
        $result = execute_sql($link, "animatch", $sql);
        $row = mysqli_fetch_assoc($result);
		$titles = $row['titles'];
	    echo "<p>$titles</p>";
	   ?>
	   
	   <!--輸入留言-->
       <form method="post" target="_self">
         <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="留言...." required name="message_content"></p>           
         <p><button name="btn-update" a href="javascript:edit_id('<?php echo $row['titles_ID']; ?>')" class="w3-button w3-theme w3-right" type="submit" style="width:80px"><i class="fa fa-paper-plane"></i></button></p>
       </form>
	   
	  <br>
	  <hr class="w3-clear">
	  <!--顯示留言區-->
        <?php
        $sql1 = "SELECT * FROM message WHERE titles_ID = $titles_ID";
        $result1 = execute_sql($link, "animatch", $sql1);
		$i = 1;
		$j = 0;
		while($row1 = mysqli_fetch_assoc($result1))
		{
		  $member_ID1 = $row1['member_ID'];
		  $message_ID1 = $row1['message_ID'];
          $sql2 = "SELECT member_ID,nickname FROM member WHERE member_ID = $member_ID1";
          $result2 = execute_sql($link, "animatch", $sql2);
		  while($row2 = mysqli_fetch_assoc($result2))
		  {
		    $nickname = $row2['nickname'];
		  }
		  $j = $row1['message_ID'];
		  ?>
          <p>第<?php echo "$i"; ?>層</p>
		  <p>
		  <h5>留言人：<?php echo "$nickname"; ?></h5></p>
          <p><?php echo $row1['message_content']; ?></p>
		  
		  <?php
		  if($row1['member_ID'] == $member_ID)
		  {
			
		    echo "<a href='stray_editMessage.php?message_ID=$j' style='text-decoration:none;'>
			      <button class='w3-button w3-red' type='submit'>修改</button></a>
                  <a href='stray_delMessage.php?message_ID=$j' style='text-decoration:none;'>
				  <button class='w3-button w3-black' type='submit'>刪除</button></a>";
		  }
		  ?>
		  
		  <p align="right">留言時間：<?php echo $row1['message_time']; ?></p>
          <hr class="w3-clear">
		<?php
		  $i++;
		}
	    ?>
		</div>
	   </div>
      </div>
     </div>
    </div>
  </div>
  <br>
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

var btn = document.getElementById('love_btn');
btn.addEventListener("touchstart",
function(){
btn.classList.add("active");
});
</script>
</body>
</html>