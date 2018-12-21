<?php
	include_once './config/db_connect.php';

	$user = $_POST['pf'];

	$sqlchk_user = "SELECT * FROM users WHERE username = '" . $user['username'] . "'";
	$qr = mysql_query($sqlchk_user);
	$rs = mysql_fetch_array($qr, MYSQL_ASSOC);
	
	if (empty($rs)) {
		$sql = "INSERT INTO users(user_type_tid,username,password,fname,lname,address,email,tel,created)VALUES('1','".$user['username']."','".base64_encode(base64_encode($user['password']))."','".$user['fname']."','".$user['lname']."','".$user['address']."','".$user['email']."','".$user['tel']."',NOW())";

		$query = mysql_query($sql);
		if($query){
			echo "<div class='alert alert-success'><strong>แจ้งเตือน!</strong> บันทึกข้อมูลสำเร็จ.</div>";
			echo "<meta http-equiv='refresh' content='0;url=home.php?url=user.php'>";
		}else{
			echo "ผิดพลาด! <a href='home.php?url=form_user.php'>ลองใหม่อีกครั้ง_.</a>".mysql_error();
		}
	}else{
	 	 echo "
		 <script>
			 alert('แจ้งเตือน! username ซ้ำกับผู้ใช้อื่น กรุณาใช้ ชื่ออื่น.');
			 window.location='javascript:history.back()';
		 </script>"
		 ;
	}

?>