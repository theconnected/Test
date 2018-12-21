<?php
	include 'config/db_connect.php';
	$up = $_POST['up'];
	if($_FILES["fileUpload"]["name"] != "")//file ไม่เป็น Null
	{ 			
         if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"down/".$_FILES["fileUpload"]["name"]))
		{
			//insert to database
			$sql = "INSERT INTO myfiles (user_id,header,namefile,total,created)VALUES ('".$up['uid']."','".$up['name']."','".$_FILES["fileUpload"]["name"]."',0,NOW())";
			$query = mysql_query($sql);
			//echo $sql;
			
			if($query){
				//echo "<script>alert('แจ้งเตือน!!! Upload File สำเร็จแล้วววววว.');</script>";
				echo "<div class='alert alert-success'><strong>แจ้งเตือน!</strong> Upload File สำเร็จแล้วววววว.</div>";
				echo "<meta http-equiv='refresh' content='0;url=home.php?url=download.php'>";
			}else{
				echo "ผิดพลาด !".mysql_error();
			}
         }else{
			echo "<script>alert('แจ้งเตือน!!! Upload File ผิดพลาด.');window.location='javascript:history.back()';</script>";
		}
		 
		 
     }else{
		echo "<script>alert('แจ้งเตือน!!! กรุณาเลือกไฟล์!!!.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=home.php?url=download.php'>";
	 }
?>		

