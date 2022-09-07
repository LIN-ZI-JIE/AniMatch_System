<?php
  require_once("dbtools.inc.php");
  $member_ID = $_COOKIE{"member_ID"};
  //建立資料連接
  $link = create_connection();
  
  $pet_ID = $_POST['pet_ID'];
  $sql_query = "SELECT * FROM stray_animals where pet_ID = $pet_ID";
  $result_set = execute_sql($link, "animatch", $sql_query);
  $row = mysqli_fetch_assoc($result_set);
  $smember_ID = $row['member_ID'];
		  
  if($row['adopter_ID'] != $member_ID)
  {
    echo "<script type='text/javascript'>";
    echo "alert('您尚未領養此浪浪！');";
	echo "history.back();";
    echo "</script>";
	return false;
  }
	  
      for ($i = 0; $i < 3; $i++)
      {		
        //若檔案名稱不是空字串，表示上傳成功，將暫存檔案移至指定之目錄
        if ($_FILES["myfile"]["name"][$i] != "")
        {
          $src_file = $_FILES["myfile"]["tmp_name"][$i];
          $src_file_name = $_FILES["myfile"]["name"][$i];
          $src_ext = strtolower(strrchr($_FILES["myfile"]["name"][$i], "."));
          $desc_file_name = uniqid() . ".jpg";
	
          $thumbnail_file_name = "./image/track/$desc_file_name";
          move_uploaded_file($src_file,"./image/track/".$desc_file_name);
          resize_photo($src_file, $src_ext, $thumbnail_file_name, 150);
		  
		  $sql = "insert into track_photo(track_filename,adopter_ID,stray_ID,pet_ID) values('$thumbnail_file_name', '$member_ID', '$smember_ID', '$pet_ID')";
          execute_sql($link, "animatch", $sql);
        }
      }
    //關閉資料連接	
    mysqli_close($link);
  
    header("location:adopter_member.php?member_ID=$member_ID");

  function resize_photo($src_file, $src_ext, $dest_name, $max_size)
  {
  	switch ($src_ext)
  	{
  	  case ".jpg":
  	    $src = imagecreatefromjpeg($src_file);
  	    break;
  	  case ".png":
  	    $src = imagecreatefrompng($src_file);
  	    break;
  	  case ".gif":
  	    $src = imagecreatefromgif($src_file);
  	    break;
  	}
  }	  
?>