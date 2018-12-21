<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="stats-in-th" content="0f5d" />
		
        <meta name="description" content="ระบบบันทึก รายรับ-รายจ่าย ประจำวัน" />
        <meta name="keywords" content="รายรับ,รายจ่าย,ระบบ,โปรแกม,แจกฟรี" />
        <meta name="author" content="n@win_dev" />
        <meta name="revisit-after" content="7 days" />
		
        <title>:: ลงทะเบียน เพื่อใช้งาน ระบบ ::</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css"/>
		
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script src="js/jquery.form-validator.js"></script>
		
       
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
			<style>
				 body{
                    font-family: 'Roboto', Tahoma;
                }
		</style>
    </head>
    <body style="background:#eee">

        <div class="container" style="padding-top:40px">
            <div class="row">
                <div class="span3"></div>

                <div class="span6">
                    <div style="border:1px #ccc solid;-moz-box-shadow: 0 0 5px #ccc;-webkit-box-shadow: 0 0 5px #ccc;box-shadow: 0 0 5px #ccc">
                        <div style="color:#fff;border-bottom:1px #ccc solid;padding:10px;background:#4396F0">
                            <b><i class="icon-pencil"></i> ลงทะเบียน</b></a>
                        </div>
                        <div style="padding:5px;background:#fff">
                            <div style="padding-top:10px">
                                <?php if (empty($_SESSION['user'])): ?>
                                    <div>
                                        <form name="regis" action="regis_process.php" method="post">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">ชื่อผู้ใช้งาน :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="regis[username]" 
															data-validation="custom"
															data-validation-regexp="^([a-z,A-Z,0-9]+)$"
															style="width: 160px" maxlength="100"/>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">รหัสผ่าน :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="password" name="regis[password]"
															data-validation="custom"
															data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
															style="width: 160px" maxlength="12"/>
                                                        </div>	
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">ชื่อ :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="regis[fname]"
															data-validation="custom"
															data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
															style="width: 220px" maxlength="200"/>
                                                        </div>											
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">นามสกุล :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="regis[lname]" 
															data-validation="custom"
															data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"
															style="width: 220px" maxlength="200"/>
                                                        </div>	
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">เบอร์โทร :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="regis[tel]"
															data-validation="number"
															style="width: 180px" maxlength="10"/>
                                                        </div>	
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="text-right">อีเมลล์ :&nbsp;</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="regis[email]"
															data-validation="email"
															style="width: 250px" maxlength="255"/>
                                                        </div>	
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-success"><i class="icon-ok-sign"></i> บันทึก</button>
                                                        <button type="reset" class="btn btn-warning"><i class="icon-refresh"></i> เคลียร์</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                        <div style="padding:10px">
                                            <a href="index.php"><i class="icon-terminal"></i>ย้อนกลับ</a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div style='padding-top:25px;padding-bottom: 25px' class='text-center'>
                                        <strong style="color:#F95300"><i class="icon-terminal"></i>คุณเป็นสมาชิกอยู่แล้ว!! อย่ากวนตีน</strong><br/>
                                        <meta http-equiv='refresh' content='2;url=home.php?url=user.php'>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>					

                        <div class="span3"></div>

                    </div>
                </div>
            </div>
			<script>$.validate({decimalSeparator : ','})</script>
    </body>
</html>

