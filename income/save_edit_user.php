<?php

	include_once './config/db_connect.php';
	$u = $_POST['user'];
	
	
	$sql = "SELECT id,username FROM users WHERE username = '" . $u['username'] . "' ";//  username ที่ตรง
	
	$qr = mysql_query($sql);
	$rs = mysql_fetch_array($qr, MYSQL_ASSOC);
	
	if ($rs) //ถ้า username ที่ส่งมา ตรงกับ username ใน db
	{ 
		//check เงื่อนไขอีกว่า
		// ถ้า id ที่ส่งมา  ตรงกับ id ใน db ไหม
		// ถ้าตรงกัน
		if($rs['id'] == $u['id'])
		{
			$sql_up = "UPDATE users SET  username = '" . $u['username'] . "', password = '" . base64_encode(base64_encode($u['password'])). "' , fname = '" . $u['fname'] . "', lname = '" . $u['lname'] . "',address = '" . $u['address'] . "', email = '" . $u['email'] . "',tel = '" . $u['tel'] . "',user_type_tid = '" . $u['lv'] . "',modified = NOW() WHERE id = '" . $u['id'] . "' ";
			$query = mysql_query($sql_up);
				
			if ($query)
			{
				echo "<div class='alert alert-info'><strong>แจ้งเตือน!</strong> แก้ไขข้อมูลสำเร็จ.</div>";
				echo "<meta http-equiv='refresh' content='0;URL=home.php?url=user.php'>";
			} else {
				echo "ผิดพลาด!" . mysql_error();
			}						
		}
	
		//ถ้า id ที่ส่งมา  ไม่ตรงกับ id ใน db
		if($rs['id'] != $u['id'])
		{
			echo "
			 <script>
				 alert('แจ้งเตือน! username ซ้ำกับผู้ใช้อื่น กรุณาใช้ ชื่ออื่น หรือ ชื่อเดิม.');
				 window.location='javascript:history.back()';
			 </script>"
			 ;
		}
		
	}
	else if(empty($rs))//ถ้า username ไม่ซ้ำกับใครเลย
	{
			$sql_up = "UPDATE users SET  username = '" . $u['username'] . "', password = '" . $u['password']. "' , fname = '" . $u['fname'] . "', lname = '" . $u['lname'] . "',address = '" . $u['address'] . "', email = '" . $u['email'] . "',tel = '" . $u['tel'] . "',user_type_tid = '" . $u['lv'] . "',modified = NOW() WHERE id = '" . $u['id'] . "' ";
			$query = mysql_query($sql_up);
				
			if ($query)
			{
				echo "<div class='alert alert-info'><strong>แจ้งเตือน!</strong> แก้ไขข้อมูลสำเร็จ.</div>";
				echo "<meta http-equiv='refresh' content='0;URL=home.php?url=user.php'>";
			} else {
				echo "ผิดพลาด!" . mysql_error();
			}	
	}else{
		echo "ผิดพลาด! ".mysql_error();
	}
	

?>