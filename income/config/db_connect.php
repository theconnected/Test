<?php

$server = "localhost";
$username = "root";
$password = "123456";
$database = "db_income";

$conn = mysql_connect($server, $username, $password);
if ($conn) {
    mysql_select_db($database,$conn) or die(mysql_error());

    //"set charecter_set_connection = utf8"
    //"set charecter_set_client = utf8"
    //"set charecter_set_result = utf8"
    mysql_query("SET NAMES utf8");
} else {
    echo 'error'.  mysql_error();
}
?>
