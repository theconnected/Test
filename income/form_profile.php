<?php
	include_once './config/db_connect.php';
	$uid = mysql_real_escape_string(@$_GET['uid']);

	$sql = "SELECT * FROM users WHERE id = '" . $_SESSION['user']['id'] . "'";
	$query = mysql_query($sql);
	
	if($query){
		$rs = mysql_fetch_array($query);
	}else{
		echo "ผิดพลาด!_.";
	}
?>

<div style="padding:5px">

    <form id='frmProfile' action='home.php?url=save_profile.php' method='post'>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td valign="top" class="text-right"><label for="">ผู้ใช้งาน : &nbsp;</label></td>
                <td>
					<input type="text" name="pf[username]"
					value="<?php echo $rs['username']; ?>"
					style="width: 160px"
					disabled />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">รหัสผ่าน : &nbsp;</label></td>
                <td>
                    <input type="password" name="pf[password]"
					value="<?php echo base64_decode(base64_decode($rs['password'])); ?>"
					style="width: 160px"
					data-validation="custom"
					data-validation-regexp="^([a-z,A-Z,0-9]+)$"
					maxlength="12"
					<?php if (empty($uid)): ?>disabled<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">ชื่อ : &nbsp;</label></td>
                <td>
					<input type="text" name="pf[fname]" 
					value="<?php echo $rs['fname']; ?>" 
					data-validation="custom"
					data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
					style="width: 220px"
					maxlength="200"
					<?php if (empty($uid)): ?>disabled<?php endif; ?> />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right"><label for="">นามสกุล : &nbsp;</label></td>
                <td>
					<input type="text" name="pf[lname]"
					value="<?php echo $rs['lname']; ?>"
					data-validation="custom"
					data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
					style="width: 220px"
					maxlength="200"
					<?php if (empty($uid)): ?>disabled<?php endif; ?> />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right">
					<label for="">ที่อยู่ : &nbsp;</label>
				</td>
                <td style="padding-bottom:10px">
					<textarea rows="4" style="width:400px" name="pf[address]" <?php if (empty($uid)): ?>disabled<?php endif; ?>><?php echo $rs['address']; ?></textarea>
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right">
					<label for="">อีเมลล์ : &nbsp;</label>
				</td>
                <td>
					<input type="text" name="pf[email]" 
					value="<?php echo $rs['email']; ?>" 
					data-validation="email"
					style="width: 250px"
					maxlength="255"
					<?php if (empty($uid)): ?>disabled<?php endif; ?> />
				</td>
            </tr>
            <tr>
                <td valign="top" class="text-right">
					<label for="">โทร : &nbsp;</label>
				</td>
                <td>
					<input type="text" name="pf[tel]" 
					value="<?php echo $rs['tel']; ?>"
					data-validation="number"
					style="width: 180px"
					maxlength="10"
					<?php if (empty($uid)): ?>disabled<?php endif; ?> />
				</td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="pf[uid]" value="<?php echo mysql_real_escape_string($rs['id']); ?>" />
                </td>
                <td>
                    <div class="text-left">
                        <?php if (empty($uid)): ?>
                            <a href="home.php?url=form_profile.php&uid=<?php echo mysql_real_escape_string($rs['id']); ?>" class="btn btn-info">
                                <i class="icon-pencil"></i> แก้ไข
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($uid)): ?>
                        <button class="btn btn-success" type="submit">
                                <i class="icon-ok-sign"></i> บันทึก
                        </button>
                            <a href="home.php?url=form_profile.php" class="btn btn-warning">
								<i class="icon-double-angle-left"></i> ยกเลิก
							</a>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
