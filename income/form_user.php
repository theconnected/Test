
    <div style="padding:10px">
        <form action='home.php?url=save_user.php' method='post'>
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td valign="top" class="text-right"><label for="">ผู้ใช้งาน : &nbsp;</label></td>
                    <td>
						<input type="text" name="pf[username]" 
						style="width: 160px"
						data-validation="custom"
						data-validation-regexp="^([a-z,A-Z,0-9]+)$"
						maxlength="100" />
					</td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">รหัสผ่าน : &nbsp;</label></td>
                    <td>
                        <input type="text" name="pf[password]"
						style="width: 160px"
						data-validation="required"
						maxlength="12" />
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">ชื่อ : &nbsp;</label></td>
                    <td>
						<input type="text" name="pf[fname]"
						data-validation="required"
						style="width: 220px"
						maxlength="200" />
					</td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">นามสกุล : &nbsp;</label></td>
                    <td>
						<input type="text" name="pf[lname]" 
						data-validation="required"
						style="width: 220px"
						maxlength="200" />
					</td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">ที่อยู่ : &nbsp;</label></td>
                    <td style="padding-bottom:10px">
						<textarea rows="4" name="pf[address]" style="width:400px" ></textarea>
					</td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">อีเมลล์ : &nbsp;</label></td>
                    <td>
						<input type="text" name="pf[email]"
						style="width: 250px"
						maxlength="255"/>
					</td>
                </tr>
                <tr>
                    <td valign="top" class="text-right"><label for="">โทร : &nbsp;</label></td>
                    <td>
						<input type="text" name="pf[tel]"
						style="width: 180px"
						maxlength="10" />
					</td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <div>
                            <button type="submit" class="btn btn-success">
                                <i class="icon-ok-sign"></i> บันทึก
                            </button>
                            <a href="home.php?url=user.php" class="btn btn-warning" ><i class="icon-double-angle-left"></i> ยกเลิก</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

