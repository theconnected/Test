<?php
include_once './config/db_connect.php';
$data = $_POST['data'];
$sql = "INSERT INTO datas(user_id, type, name, qty, created)VALUES ('" . $_SESSION['user']['id'] . "','" . $data['income'] . "','" . $data['description'] . "','" . $data['qty'] . "',NOW())";
$query = mysql_query($sql);
if ($query) {
    echo "<div class='alert alert-success'><strong>แจ้งเตือน!</strong> บันทึกข้อมูลสำเร็จ.</div>";
    echo "<meta http-equiv='refresh' content='0;url=home.php?url=lists_data.php'>";
} else {
    echo "ผิดพลาด!" . mysql_error();
}
?>

