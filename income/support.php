<?php
include "config/db_connect.php";

if($_SESSION['user']['user_type_tid'] == 2){
	$sql ="SELECT sup.*,stt.s_name FROM supports sup JOIN pro_status stt ON stt.id = sup.status_id ORDER BY sup.created DESC";
}else{
	$sql ="SELECT sup.*,stt.s_name FROM supports sup JOIN pro_status stt ON stt.id = sup.status_id WHERE sup.user_id = '".$_SESSION['user']['id']."' ORDER BY sup.created DESC";
}
$query = mysql_query($sql);
//echo $sql;
?>
<div style="padding:10px">
	<?php if($_SESSION['user']['user_type_tid'] == 1):?>
		<a href="home.php?url=problem.php" class="btn btn-warning">ฟอร์ม  <i class="icon-pencil"></i></a>
	<?php endif;?>
	<div class="headline headline-md">
		<h2>รายการทั้งหมด</h2>
	</div>
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class = "table table-hover">
		<thead>
			<tr>
				<td style="font-weight:bold;width:55%">เรื่อง</td>
				<td style="font-weight:bold;width:15%">เมื่อ</td>
				<td style="font-weight:bold;<?php if(@$_GET['supId'] == ""):?>width:15%<?php else:?>width:30%<?php endif;?>">สถานะ</td>
				<?php if($_SESSION['user']['user_type_tid'] == 2):?>
					<?php if(@$_GET['supId'] == ""):?>
						<td style="font-weight:bold;width:15%">###</td>
					<?php endif;?>
				<?php endif;?>
			</tr>
		</thead>
		<body>
		<?php 
		$sql_up = "SELECT * FROM pro_status";
		$qr_up = mysql_query($sql_up);
					
		$numrow = mysql_num_rows($query);
		if($numrow > 0):?>
			<?php while($result = mysql_fetch_array($query)):?>
			<tr>
				<td><a href="home.php?url=view_problem.php&pId=<?php echo $result['id']?>"><?php echo $result['name'];?></a></td>
				<td>
					<small><?php echo DateThai_full($result['created']);?></small>
				</td>
				<td>
					<?php if($result['status_id'] == 1):?> 
						<div><i class="icon-check" style="color:#0DB00F"></i> <small><?php echo $result['s_name'];?></small></div>
					<?php else:?>
					
						<?php if(@$_GET['supId'] != ""):?>
							<?php if($result['id'] == $_GET['supId']):?>
								<form action="">
									<select name="" class="span2">
										<?php while($stt = mysql_fetch_array($qr_up )):?>
											<option value="<?php echo $stt['id']?>"><?php echo $stt['s_name']?></option>
										<?php endwhile;?>
									</select>
									<button class="btn btn-small btn-success">บันทึก</button>
									<a href="#" class="btn btn-small btn-warning">ยกเลิก</a>
								</form>
							<?php else:?>
								<div><i class="icon-refresh" style="color:#FB5501"></i> <small><?php echo $result['s_name'];?></small></div>
							<?php endif;?>
						<?php else:?>
							<div><i class="icon-refresh" style="color:#FB5501"></i> <small><?php echo $result['s_name'];?></small></div>
						<?php endif;?>
					<?php endif;?>
				</td>
				<?php if($_SESSION['user']['user_type_tid'] == 2):?>
						<?php if(@$_GET['supId'] != $result['id']):?>
							
								<td>
									<?php if($result['status_id'] != 1):?>
									<a href="home.php?url=support.php&supId=<?php echo $result['id'];?>" class="btn btn-mini btn-info"><i class="icon-pencil"></i></a>
									<?php endif;?>
									<a href="home.php?url=del_sub.php&supId=<?php echo $result['id'];?>" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
								</td>
								
							<?php endif;?>
					
				<?php endif;?>
			</tr>
			<?php endwhile;?>
		<?php else:?>
			<tr>
				<td colspan='3'><div class='text-center'><small>---------------- ยังไม่มีรายการ ---------------------</small></div></td>
			</tr>
		<?php endif;?>	
		</body>
	</table>	
</div>
