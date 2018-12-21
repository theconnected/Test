<?php
	include_once './config/db_connect.php';	
	$id = mysql_real_escape_string($_GET['id']);
	if(!empty($id)){	
		$sql = "SELECT * FROM datas WHERE id = '" . $id . "'";
		$qr = mysql_query($sql);
		
		if($qr){
			$rs = mysql_fetch_array($qr);
		}else{
			echo "ผิดพลาด!_.";
		}
	}
	
?>

<div style="padding:5px">
    <form id="insertData" action="home.php?url=save_edit_data.php" method="post">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td valign="top" class="text-right">
                    <label for="income">เลือก : &nbsp;</label>
                </td>
                <td>
                    <div>
                        <label class="radio">
                            <input type="radio" name="data[income]" value="income" <?php if ($rs['type']=='income'): ?>checked<?php endif; ?>/><span class="metro-radio">รายรับ</span>
                        </label>
                        <label class="radio">
                            <input type="radio" name="data[income]" value="pay" <?php if ($rs['type']=='pay'): ?>checked<?php endif; ?> /><span class="metro-radio">รายจ่าย</span>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" class="text-right">
                    <label for="description">รายละเอียดที่ใช้ : &nbsp;</label>
                </td>
                <td>
                    <input type="text" name="data[description]" 
					value="<?php echo $rs['name']; ?>" 					
					data-validation="required"
					style="width: 250px"/>
                </td>
            </tr>
            <tr>
                <td valign="top" class="text-right">
                    <label for="qty">จำนวน : &nbsp;</label>
                </td>
                <td>
                    <input type="text" name="data[qty]" 
					value="<?php echo $rs['qty']; ?>" 
					style="width: 250px"
					data-validation="number"
					maxlength="8" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="data[id]" value="<?php echo $rs['id']; ?>"/>
                </td>
                <td>
                    <a href="javascript:{}" onclick="document.getElementById('insertData').submit()"class="btn btn-success"><i class="icon-ok-sign"></i> แก้ไข</a>
                    <a href="home.php?url=lists_data.php" class="btn btn-warning"><i class="icon-double-angle-left"></i> ยกเลิก</a>
                </td>
            </tr>
        </table>
    </form>
</div>