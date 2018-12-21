<?php
include_once './config/db_connect.php';

$ut = $_POST['ut'];
$sql = "INSERT INTO user_types(name)VALUES ('".$ut['name']."')";
$query = mysql_query($sql);
if ($query) {
    echo "<div class='alert alert-success'><strong>แจ้งเตือน!</strong> บันทึกข้อมุลสำเร็จ.</div>";
    echo "<meta http-equiv='refresh' content='0;url=home.php?url=usertypes.php'>";
} else {
    echo "ผิดพลาด !!" . mysql_error();
}
?>
