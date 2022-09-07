<?php
 require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
  
 //取得表單資料
 $member_ID = $_COOKIE{"member_ID"};
 $animal_nickname = $_POST["animal_nickname"];
 $animal_sex = $_POST["animal_sex"];
 $animal_category = $_POST["animal_category"];
 $animal_variety = $_POST["animal_variety"];
 $age = $_POST["age"];
 $weight = $_POST["weight"];
 $microchip = $_POST["microchip"];
 $found_location = $_POST["found_location"];
 $shelter_location = $_POST["shelter_location"];
 $feature = $_POST["feature"];
 $health = $_POST["health"];
 $vaccine = $_POST["vaccine"];
 $neuter = $_POST["neuter"];
 $diet = $_POST["diet"];
 $discovered = $_POST["discovered"];
 $adopt = $_POST["adopt"];
 $adopter_ID = $_POST["adopter_ID"];
 $updated = $_POST["updated"];
 $animal_remark = $_POST["animal_remark"];
 
 //建立資料連接
 $link = create_connection();
 
 // sql query for update data into database
 $sql = "INSERT INTO stray_animals(member_ID,animal_nickname,animal_sex,animal_category,animal_variety,age,weight,microchip,found_location,shelter_location,feature,health,vaccine,neuter,diet,discovered,adopt,adopter_ID,updated,animal_remark) 
 VALUES ('$member_ID', '$animal_nickname', '$animal_sex', '$animal_category', '$animal_variety', '$age', '$weight', '$microchip', '$found_location', '$shelter_location', '$feature', '$health', '$vaccine', '$neuter', '$diet', '$discovered', '$adopt', '$adopter_ID', '$updated', '$animal_remark')";        
 $result = execute_sql ($link, "animatch", $sql);

  ?>
  <script type="text/javascript">
  alert('資料修改成功');
  window.location.href='stray_member.php';
  </script>
  <?php

 mysqli_close($link);
 
?>

