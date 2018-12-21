<?php
	include './config/db_connect.php';
    $sql = "SELECT * FROM users";
    $query = mysql_query($sql);
	
	//pagination
	$numRows = mysql_num_rows($query); //นับแถวในตาราง
	$perPage = 50;// จำนวนที่จะแสดงแต่ล่ะหน้า

	$page = @$_GET["page"]; //get page

	 if (!@$_GET["page"]) { // ถ้าไม่มี page ก็แสดง page แรก
		   $page = 1; //กำหนด $page = 1 ไว้
	 }
	 
	$PrevPage = $page - 1; //ลดลง
	$NextPage = $page + 1; //บวกเพิ่ม

	$PageStart = (($perPage * $page) - $perPage); //$perPage(จะแสดงเท่าไหร่)  * $page(หน้า page ที่ get ค่ามา) - $perPage || (10*1)-10

	 if ($numRows <= $perPage)//ถ้าจำนวนแถว <= หน้าที่จะแสดง
	 { 
		 $numPage = 1;
	 }
	 else if (($numRows % $perPage) == 0) //แถวทั้งหมด Mod กับ Page ที่จะแสดง
	 {
		 $numPage = ($numRows / $perPage);
	 }
	else
	{
		 $numPage = ($numRows / $perPage) + 1;
		 $numPage = (int) $numPage;
	}
	
	$sql .= "  ORDER BY id ASC LIMIT $PageStart , $perPage";
	$query = mysql_query($sql);
?>

<div style="padding:5px">
    <div style="padding:5px">
        <a href="home.php?url=form_user.php" class="btn btn-warning"><i class="icon-plus-sign"></i>  เพิ่มรายการ</a>
    </div>
	
    <div>
        <table border="0" cellspacing="0" cellpadding="0" width="100%" class="table table-hover">
            <thead>
                <tr>
                    <td style="width:7%;font-weight:bold">ไอดี</td>
                    <td style="width:12%;font-weight:bold">ชื่อผู้ใช้</td>
                    <td style="width:30%;font-weight:bold">รหัสผ่าน</td>
                    <td style="width:13%;font-weight:bold">ชื่อ</td>
                    <td style="width:13%;font-weight:bold">นามสกุล</td>
                    <td style="width:22%;font-weight:bold">###</td>
                </tr>
            </thead>
            <tbody>
                <?php
					while ($rs = mysql_fetch_array($query, MYSQL_ASSOC)):
                ?>
                    <tr>
                        <td style="text-align: right;padding-right: 5px"><?php echo $rs['id']; ?></td>
                        <td><?php echo $rs['username']; ?></td>
                        <td><?php echo $rs['password']; ?></td>
                        <td><?php echo $rs['fname']; ?></td>
                        <td><?php echo $rs['lname']; ?></td>
                        <td>

                            <a href="home.php?url=view.php&id=<?php echo $rs['id']; ?>" class="btn btn-mini btn-info">
								<i class="icon-eye-open"></i> ดู
							</a>
                            <a href="home.php?url=edit_user.php&uid=<?php echo mysql_real_escape_string($rs['id']); ?>" class="btn btn-mini btn-success">
								<i class="icon-pencil"></i>  แก้ไข
							</a>
                            <a href="home.php?url=delete_user.php&uid=<?php echo mysql_real_escape_string($rs['id']); ?>" class="btn btn-mini btn-danger" onclick="return confirm('ยืนยัน\n--------------------\nคุณต้องการลบรายการนี้ใช่หรือไม่?')">
								<i class="icon-remove"></i>  ลบ
							</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
		<!-- pagegination-->
		<div class="pagination">
			<ul>
				<?php
				//prev
				if ($PrevPage) {
					 echo "<li><a href='home.php?url=user.php&page=$PrevPage'>&laquo;</a></li>";
				 }
				 //all page
				for ($i = 1; $i <= $numPage; $i++) 
				{
					if ($i != $page)
					{
						echo "<li><a href='home.php?url=user.php&page=$i'>$i</a></li>";
					} else {
						echo "<li><a style='color:#449d44;font-weight:bold'>$i</a></li>";
					}
				}
				//next
				if ($page != $numPage)
				{
					echo "<li><a href ='home.php?url=user.php&page=$NextPage'>&raquo;</a></li>";
				}
				?>
			</ul>
		</div>
    </div>

</div>
