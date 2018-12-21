<?php
	include_once './config/db_connect.php';
	$id = mysql_real_escape_string($_GET['uid']);
	if(!empty($id)){	
		$sql = "SELECT * FROM users WHERE id = '" . $id . "'";
		
		$query = mysql_query($sql);
		if($query){
			$rs = mysql_fetch_array($query);
		}else{
			echo "ผิดพลาด!_.";
		}
	}
?>
<div>
    <div>
        <form id="frmUpdateUser" action="home.php?url=save_edit_user.php" method="post">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td valign="top" class="text-right"><label for="">ผู้ใช้งาน : &nbsp;</label></td>
                <td>
					<input type="text" name="user[username]"
					value="<?php echo $rs['username']; ?>"
					style="width: 160px"
					data-validation="custom"
					data-validation-regexp="^([a-z,A-Z,0-9]+)$"
					maxlength="100" />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">รหัสผ่าน : &nbsp;</label></td>
                <td>
					<input type="password" name="user[password]"
                           value="<?php echo base64_decode(base64_decode($rs['password'])); ?>"
					style="width: 160px"
					data-validation="custom"
					data-validation-regexp="^([a-z,A-Z,0-9]+)$"
					maxlength="12" />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">ชื่อ : &nbsp;</label></td>
                <td>
					<input type="text" name="user[fname]"
					value="<?php echo $rs['fname']; ?>"
					data-validation="custom"
					data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
					style="width: 220px"
					maxlength="200" />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">นามสกุล : &nbsp;</label></td>
                <td>
					<input type="text" name="user[lname]"
					value="<?php echo $rs['lname']; ?>"
					data-validation="custom"
					data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
					style="width: 220px"
					maxlength="200" />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">ที่อยู่ : &nbsp;</label></td>
                <td style="padding-bottom:10px">
					<textarea rows="4" name="user[address]" style="width:400px"><?php echo $rs['address']; ?></textarea>
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">อีเมลล์ : &nbsp;</label></td>
                <td>
					<input type="text" name="user[email]"
					value="<?php echo $rs['email']; ?>"
					style="width: 250px"
					maxlength="255"/>
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">โทร : &nbsp;</label></td>
                <td>
					<input type="text" name="user[tel]"
					value="<?php echo $rs['tel']; ?>"
					style="width: 180px"
					maxlength="10" />
				</td>
            </tr>
            <tr>
                <td class="text-right">
                    <label for="">ระดับ : &nbsp;</label>
                </td>
                <td style="padding-bottom:10px">
                    <select name="user[lv]" style="width:160px">
                    <?php 
                        $sql_level = "SELECT * FROM user_types";
                        $qr = mysql_query($sql_level);
					?>  

                    <?php while ($rs_ut = mysql_fetch_array($qr)) :?>
                        <option value="<?php echo $rs_ut['tid'];?>" <?php if($rs_ut['tid'] == $rs['user_type_tid']):?>selected<?php endif;?>><?php echo $rs_ut['name'];?></option>
                    <?php endwhile;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="user[id]" value="<?php echo $rs['id']; ?>" /></td>
                <td>
                    <button type="submit" class="btn btn-success"><i class="icon-ok-sign"></i> แก้ไข</button>
                    <a href="home.php?url=user.php" class="btn btn-warning"><i class="icon-double-angle-left"></i> ยกเลิก</a>
                </td>
            </tr>
        </table>
    </form>

    </div>
</div>