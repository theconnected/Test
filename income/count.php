<?php
include 'config/db_connect.php';

//count
$sql = "UPDATE myfiles SET total = total + 1 WHERE id = '".$_GET["fileId"]."' ";
$query = mysql_query($sql);

//
$sql_download = "SELECT * FROM myfiles WHERE id = '".$_GET["fileId"]."' ";
$qr_download = mysql_query($sql_download);
$result = mysql_fetch_array($qr_download);
//download
header("location:down/".$result["namefile"]);
exit();
?>
