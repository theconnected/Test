<?php

include_once './config/db_connect.php';
$utype = $_POST['ut'];
$sql = "UPDATE user_types SET name = '" . $utype['name'] . "' WHERE tid = '" . $utype['tid'] . "' ";

$query = mysql_query($sql);
if ($query) {
	echo "<div class='alert alert-info'><strong>แจ้งเตือน! </strong> แก้ไขข้อมูลสำเร็จ.</div>";
	echo "<meta http-equiv='refresh' content='0;URL=home.php?url=usertypes.php'>";
} else {
	echo "ผิดพลาด!" . mysql_error();
}
?>
