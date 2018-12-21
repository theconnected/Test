<?php
if ($_SESSION['user']['user_type_tid'] == '2') {
	include_once './config/db_connect.php';
	$id = mysql_real_escape_string($_GET['uid']);
	
	if(!empty($id)){
		$sql_del_data = "DELETE FROM datas WHERE user_id = '".$id."'"; //ลบ ข้อมูลใน ตาราง datas 
		$sql_del_logs = "DELETE FROM login_logs WHERE user_id = '".$id."'"; //ลบ ข้อมูลใน ตาราง  login_logs
		
		$qr_del_data = mysql_query($sql_del_data); //datas
		$qr_del_logs = mysql_query($sql_del_logs); //login_logs
		
		if($qr_del_data){
			$sql = "DELETE FROM users WHERE id = '".$id."'";
			$qr = mysql_query($sql);
			echo "<div class='alert alert-error'><strong>แจ้งเตือน!</strong> ลบข้อมูลสำเร็จ.</div>";
			echo "<meta http-equiv='refresh' content='0;url=home.php?url=user.php'>";
		}else{
			echo "<div class='alert alert-warning'><strong>แจ้งเตือน!</strong> ผิดพลาด!.</div>";
			echo "<meta http-equiv='refresh' content='1;url=home.php?url=user.php'>";
		}
	}
}else{
	echo "<metahttp-equiv='refresh' content='0;URL=index.php'>";
}
?>