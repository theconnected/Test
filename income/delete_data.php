<?php
if ($_SESSION['user']['user_type_tid'] == '2') {
	include_once './config/db_connect.php';
    $id = mysql_real_escape_string($_GET['id']);
	
	if(!empty($id)){	
		
		$sql = "DELETE FROM datas WHERE id = '" . $id . "'";
		$query = mysql_query($sql);
		
		if ($query) {
			echo "<div class='alert alert-error'><strong>แจ้งเตือน!</strong> ลบข้อมุลสำเร็จ!.</div>";
			echo "<meta http-equiv='refresh' content='0;url=home.php?url=lists_data.php'>";
		}else{
			echo "<div class='alert alert-warning'><strong>แจ้งเตือน!</strong> เกิดข้อผิดพลาด!.</div>";
			echo "<meta http-equiv='refresh' content='1;url=home.php?url=lists_data.php'>";
		}
	}
} else {
    echo "<metahttp-equiv='refresh' content='0;URL=index.php'>";
}
?>
