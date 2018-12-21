<?php

include_once './config/db_connect.php';

$prof = $_POST['pf'];//เทส

if ($prof) {
    $Sql = "UPDATE users SET password ='" .base64_encode(base64_encode($prof['password'])) . "',fname ='" . $prof['fname'] . "',lname ='" . $prof['lname'] . "',address ='" . $prof['address'] . "',email ='" . $prof['email'] . "',tel ='" . $prof['tel'] . "',modified = NOW() WHERE id = '" . $prof['uid'] . "'";
    $Query = mysql_query($Sql);

    if ($Query) {
        echo "<div class='alert alert-info'><strong>แจ้งเตือน !</strong> แก้ไขข้อมูลสำเร็จ!.</div>";
        echo "<meta http-equiv='refresh' content='1;url=home.php?url=form_profile.php'>";
    } else {

        echo "ผิดพลาด !" . mysql_error();
    }
}
?>