<?php
include_once './config/db_connect.php';
$sql = "SELECT * FROM user_types ORDER BY tid DESC LIMIT 1";
$qr = mysql_query($sql);
$rs = mysql_fetch_array($qr);
$tid = $rs['tid']+1;
?>

<div style="padding:10px">
        <form action="home.php?url=save_usertype.php" method="post">
            <table border="0" cellspacing="0" cellpadding="0" width="">           
                <tr>
                    <td class="text-right">user Id :&nbsp;</td>
                    <td><input type="text" name="ut[tid]" value="<?php echo $tid;?>" disabled style="width:50px"/></td>               
                </tr>
                <tr>
                    <td valign="top" class="text-right">ชื่อ :&nbsp;</td>
                    <td>
						<input type="text" name="ut[name]"
						data-validation="required"
						maxlength="200" />
					</td>               
                </tr>   
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary"><i class="icon-ok-sign"></i> บันทึก</button>
                    </td>               
                </tr>   
            </table>
        </form>
</div>