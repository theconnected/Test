<?php
include 'config/db_connect.php';
$sql = "SELECT * FROM myfiles";
$query = mysql_query($sql);

?>
<div style="padding:10px">
    <?php if ($_SESSION['user']['user_type_tid'] == 2): ?>
        <div style="border-bottom:2px #ccc solid;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px">

            <form method="post" enctype="multipart/form-data" action ="home.php?url=save_up.php">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td valign="top">
                            <div class="text-right">ชื่อ  : &nbsp;</div>
                        </td>
                        <td>
                            <input type="text" name="up[name]"
                                   data-validation="required"
                                   maxlength="200"
                                   style="width:200px"/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <div class="text-right">อัฟโหลดไฟล์ ( <2M) :&nbsp;</div>
                        </td>
                        <td>
                            <input type="file" name="fileUpload"
							data-validation="required"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="up[uid]" value="<?php echo $_SESSION['user']['id']; ?>" />
                        </td>
                        <td>
                            <div style="padding-top:5px">
                                <button type="submit" class="btn btn-warning" >อัฟโหลด <i class="icon-cloud-upload"></i></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    <?php endif; ?>	


    <div class="headline headline-md">
        <h2>Downloads</h2>
    </div>
	<div style="padding:5px">
	<?php
		$numrow = mysql_num_rows($query);
		if($numrow > 0)
		{
			$i = 1;
			$ro = 0;
			while($i <= $numrow)
			{
				$result = mysql_fetch_array($query);
				?>
					<?php if($ro % 3 == 0):?>
						<div class="row-fluid" style="padding-bottom:5px">
					<?php endif;?>
						<div class="span4">
							<div style="border:1px #eee solid;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;">
								<div style="color:#444;border-bottom:1px #eee solid;background:#eee;-webkit-border-radius:5px 5px 0 0;-moz-border-radius:5px 5px 0 0;border-radius:5px 5px 0 0">
									<div class="row-fluid">
										<div style="padding:5px;;padding-top:8px">
											<div class="span9">
												<?php echo $result['header']; ?>
											</div>
											<div class="span3">
												<i class="icon-download-alt"></i> <?php echo number_format($result['total']); ?>
											</div>
										</div>
									</div>
								</div>
								<div style="padding:15px" class="text-center">
									<?php if($_SESSION['user']['user_type_tid'] == 2):?>
									<a href="home.php?url=file_delete.php&id=<?php echo $result['id']; ?>" class="btn btn-danger" onclick="return confirm('ยืนยัน!\n---------------------------------------\nคูณต้องการลบไฟล์นี้ออกจากระบใช่หรือไม่');">ลบ <i class="icon-remove-sign"></i></a>
									<?php endif;?>
									<a href="home.php?url=count.php&fileId=<?php echo $result['id']; ?>"
									title="ดาวน์โหลด" class="btn btn-success">ดาวน์โหลด  <i class="icon-cloud-download"></i>
									</a>
								</div>
							</div>
						</div>
					<?php if($ro % 3 == 2):?>
						</div>
					<?php endif;?>	
				<?php $ro++;$i++;
			}
		}else{
			echo "<small>------------------------------- ยังไม่มีรายการ ---------------------------------</small>";
		}
	?>
	
	</div>