<?php

session_start();
include './config/db_connect.php';

$login = $_POST['login'];

$sql = "SELECT * FROM users u LEFT JOIN user_types ut ON ut.tid = u.user_type_tid WHERE username = '" . $login['username'] . "' AND password = '" .$login['password']. "'";
$qr = mysql_query($sql);
$rs = mysql_fetch_array($qr, MYSQL_ASSOC);

if (!empty($rs)) {
    $_SESSION['user'] = $rs; //สร้าง session

    $id = $_SESSION['user']['id'];
    //insert ข้อมูลที่ login ครั้งล่าสุด
    $ip = $_SERVER['REMOTE_ADDR'];// or : getenv("REMOTE_ADDR"); 
    $sql_insert_lastlogin = "INSERT INTO login_logs(user_id,ip,last_login)VALUES('" . $id . "','".$ip."',NOW())";

    $query = mysql_query($sql_insert_lastlogin);
    if ($query) {
        echo "<meta http-equiv='refresh' content='0;url=home.php'>";
    } else {
        echo 'ข้อผิดพลาด => '.mysql_error();
    }
} else {
    echo "<script>
	alert('Username OR Password Invalid! Please Try Again_.');
	window.location='javascript:history.back()';
	</script>";// window.location='javascript:history.back()';
    //echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}
