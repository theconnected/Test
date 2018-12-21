<?php
include "config/db_connect.php";
$problem = $_POST['pb'];
$sql = "INSERT INTO supports (user_id,status_id,name,detail,created)VALUES('" . $_SESSION['user']['id'] . "',2,'" . $problem['name'] . "','" . $problem['detail'] . "',NOW())";


$query = mysql_query($sql);
if ($query) {
    echo "<div class='alert alert-success'><strong>แจ้งเตือน!</strong> ส่งข้อมูลสำเร็จ.</div>";
    echo "<meta http-equiv='refresh' content='0;url=home.php?url=support.php'>";
} else {
    echo "ผิดพลาด !" . mysql_error();
}
?>