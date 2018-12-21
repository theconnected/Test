<?php

include_once './config/db_connect.php';
$data = $_POST['data'];
$sql = "UPDATE datas SET  type = '" . $data['income'] . "', name = '" . $data['description'] . "' , qty = '" . $data['qty'] . "', modified = NOW() WHERE id = '" . $data['id'] . "' ";

$query = mysql_query($sql);
if ($query) {
	echo "<div class='alert alert-info'><strong>แจ้งเตือน!</strong> แก้ไขข้อมูลสำเร็จ.</div>";
	echo "<meta http-equiv='refresh' content='0;URL=home.php?url=lists_data.php'>";
} else {
	echo "ข้อผิดพลาด!!" . mysql_error();
}
?>

