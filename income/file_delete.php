<?php
	include 'config/db_connect.php';
	
	$sql = "SELECT * FROM myfiles WHERE id = '".$_GET['id']."'";
	$query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	$file = $rs['namefile'];
	if(!empty($file))
	{
		unlink("down/".$file);
	}
	$sql_del = "DELETE FROM myfiles WHERE id = '".$_GET['id']."'";	
		$qr_del = mysql_query($sql_del);		
		if($qr_del)
		{
			echo "<div class='alert alert-danger'><strong>แจ้งเตือน!</strong> ลบข้อมูลสำเร็จ.</div>";
			echo "<meta http-equiv='refresh' content='0;url=home.php?url=download.php'>";
		}else{
			echo "ผิดพลาด! ".mysql_error();
		}	

?>