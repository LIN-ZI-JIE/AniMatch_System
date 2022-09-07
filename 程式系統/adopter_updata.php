<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM adopter WHERE member_ID=".$_GET['edit_id'];
 $result_set= mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $member_ID = $_COOKIE{"member_ID"};
 $adoption_times = $_POST["adoption_times"];
 $name = $_POST["name"];
 $id_card = $_POST["id_card"];
 $birthday = $_POST["birthday"];
 $adopter_sex = $_POST["adopter_sex"];
 $tel= $_POST["tel"];
 $feeding_place = $_POST["feeding_place"];
 $space = $_POST["space"];
 $income = $_POST["income"];
 $available_time = $_POST["available_time"];
 $animal_species = $_POST["animal_species"];
 $animal_number= $_POST["animal_number"];
 $address = $_POST["address"];
 $cohabitation = $_POST["cohabitation"];
 $email = $_POST["email"];
 $adopter_remark = $_POST["adopter_remark"];

 // sql query for update data into database
 $sql_query = "UPDATE adopter SET adoption_times =$adoption_times,name='$name',id_card='$id_card',birthday='$birthday',adopter_sex='$adopter_sex',tel='$tel',feeding_place='$feeding_place',space=$space,income=$income,available_time='$available_time',animal_species='$animal_species',animal_number=$animal_number,address='$address',cohabitation='$cohabitation',email='$email',adopter_remark='$adopter_remark' WHERE member_ID=$member_ID";
        
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

<!-- 相關表格 -->
<div class="w3-container" id="menu">
  <div class="w3-content" >
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">會員相關資訊</span></h5>
    <div class="w3-rest w3-center w3-card w3-padding">
     <a href="javascript:void(0)" onclick="openMenu(event, 'user');" id="myLink">
       <div class="w3-rest s6 tablink">修改基本資料</div>
     </a>
    </div>

    <div id="user" class="w3-container menu w3-padding-48 w3-card">
      <form  method="post" target="_self">
        <?php
		require_once("dbtools.inc.php");
		$member_ID = $_COOKIE{"member_ID"};
		
        //建立資料連接
        $link = create_connection();
				
        //執行 SELECT 陳述式取得使用者資料
        $sql_query = "SELECT * FROM adopter where member_ID = $member_ID";
        $result_set = execute_sql($link, "animatch", $sql_query);
        $row = mysqli_fetch_assoc($result_set);
  ?>
        <font size="4">
        <p>認養次數:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*認養次數" value="<?php echo $row['adoption_times']; ?>" required name="adoption_times"></p>
        <p>姓名：<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*姓名" value="<?php echo $row['name']; ?>"required name="name"></p>
        <p>身分證：<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*身分證" value="<?php echo $row['id_card']; ?>" required name="id_card"></p>
		<p>出生日期:<input class="w3-input w3-padding-16 w3-border" type="date" placeholder= "*出生日期"value="<?php echo $row['birthday']; ?>" required name="birthday"></p>
        <p>性別：<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*性別" value="<?php echo $row['adopter_sex']; ?>" required name="adopter_sex"></p>
        <p>聯絡電話：<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*聯絡電話" value="<?php echo $row['tel']; ?>" required name="tel"></p>
        <p>飼養地點:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*飼養地點" value="<?php echo $row['feeding_place']; ?>" required name="feeding_place"></p>
        <p>空間大小:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*空間大小" value="<?php echo $row['space']; ?>" required name="space"></p>
        <p>收入級距:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*收入級距" value="<?php echo $row['income']; ?>" required name="income"></p>
        <p>可聯絡時間:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*可聯絡時間" value="<?php echo $row['available_time']; ?>" required name="available_time"></p>
        <p>現有動物種類:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*現有動物種類" value="<?php echo $row['animal_species']; ?>" required name="animal_species"></p>
        <p>現有動物數量:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*現有動物數量" value="<?php echo $row['animal_number']; ?>" required name="animal_number"></p>
        <p>通訊地址:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*通訊地址" value="<?php echo $row['address']; ?>" required name="address"></p>
        <p>同居狀況:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="*同居狀況" value="<?php echo $row['cohabitation']; ?>"required name="cohabitation"></p>
        <p>電子郵件:<input class="w3-input w3-padding-16 w3-border" type="email" placeholder="*電子郵件" value="<?php echo $row['email']; ?>" required name="email"></p>
        <p>備註:<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="備註" value="<?php echo $row['adopter_remark']; ?>" required name="adopter_remark"></p>
        </font>
		<p align="center"><button name="btn-update" a href="javascript:edit_id('<?php echo $row['member_ID']; ?>')" class="w3-button" type="submit">修改</button></p>
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
