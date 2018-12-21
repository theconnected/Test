<?php
	include_once './config/db_connect.php';
	$utId = mysql_real_escape_string($_GET['tid']);
	
	if(!empty($utId)){
		$sql = "SELECT * FROM user_types WHERE tid = '" . $utId . "'";
		
		$qr = mysql_query($sql);
		if($qr){
			$rs = mysql_fetch_array($qr);
		}else{
			echo "ผิดพลาด!_.";
		}
	}
?>

<div style="padding:10px">
  
        <form id="EuType" action="home.php?url=save_edit_usertype.php" method="post">
            <table border="0" cellspacing="0" cellpadding="0" width="">           
                <tr>
                    <td class="text-right">user Id :&nbsp;</td>
                    <td>
						<input type="text" name="utShow"
						value="<?php echo $rs['tid']; ?>"
						disabled style="width:50px"/>
					</td>               
                </tr>
                <tr>
                    <td valign="top" class="text-right">ชื่อ :&nbsp;</td>
                    <td>
						<input type="text" name="ut[name]"
						value="<?php echo $rs['name']; ?>"
						data-validation="required"
						maxlength="200" />
					</td>               
                </tr>   
                <tr>
                    <td>
						<input type="hidden" name="ut[tid]" value="<?php echo $rs['tid']; ?>"/>
					</td>
                    <td>
						<button type="submit" class="btn btn-info" ><i class="icon-ok-sign"></i> บันทึก</button>
                       <!-- <a href="javascript:{}" onclick="document.forms['EuType'].submit()" class="btn btn-info"><i class="icon-ok-sign"></i> แก้ไข</a>-->
                        <a href="home.php?url=usertypes.php" class="btn btn-warning"><i class="icon-double-angle-left"></i> ยกเลิก</a>
                    </td>               
                </tr>   
            </table>
        </form>
  
</div>