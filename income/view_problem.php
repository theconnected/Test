
<?php 
include "config/db_connect.php";
$sql ="SELECT u.username, u.email, s . * FROM supports s LEFT JOIN users u ON s.user_id = u.id WHERE s.id = '".mysql_real_escape_string($_GET['pId'])."' ORDER BY created DESC";

$query = mysql_query($sql);
$result = mysql_fetch_array($query);

?>
<div style="padding:5px">
	<div class="headline headline-md">
		<h2>ข้อมูลการแจ้ง</h2>
	</div>
	<div style="padding:10px">
		เรื่อง : <strong><?php echo $result['name'];?></strong><br/>
		เนื้อหา : &nbsp;<pre><?php echo $result['detail'];?></pre>
	
		โดย: <strong><?php echo $result['username'];?></strong> เมื่อ : &nbsp; <p class="label label-success"> <i class="icon-calendar"></i> <?php echo DateThai_full($result['created']);?></p><br/>
		Email : <strong><?php echo $result['email'];?></strong>
	</div>
</div>