

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

		<meta name="stats-in-th" content="0f5d" />
		<title>ระบบบันทึกรายรับ-รายจ่าย ประจำวัน</title>
		<meta name="description" content="ระบบบริหาร รายรับ-รายจ่าย ประจำวัน" />
		<meta name="keywords" content="รายรับ,รายจ่าย,ระบบ,โปรแกม,แจกฟรี" />
		<meta name="author" content="n@win_dev" />
		<meta name="revisit-after" content="7 days" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
	   <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.form-validator.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
        <style>
            body{
                font-family: 'Roboto', Tahoma;
            }
        </style>
		<?php include 'config/func.php';?>
    </head>
    <body style="background:#eee">
		
        <div <?php if($_SESSION['user']['user_type_tid'] == 2):?> class="container-fluid" <?php else:?>class="container"<?php endif;?>>
            <?php if (!empty($_SESSION['user'])): ?>
                <div style="border-bottom: 2px #fa5203 solid;height: 100px">
                    <div class="row">
                        <div class="span2">
                            <div id='logo'>
                                <img src="image/m2.png" />
                            </div>
                        </div>
                        <div class="span10">
                            <div style="padding-top:50px">
                                <div style="font-weight:bold;font-size:30px;text-shadow:2px 2px 2px #444">
                                    <p>ระบบบันทึก รายรับ-รายจ่าย ประจำวัน</p>  
                                </div>

                                <div style="margin-bottom:5px;color:#444">
										ยินดีต้อนรับ : <i class="icon-user"></i>
									<?php echo $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname']; ?>
                                    ( <a href='logout.php' onclick="return confirm('ยืนยัน!!\n-------------------------\n คุณต้องการออกจากระบบใช้หรือไม่?')">ออกจากระบบ</a> )
										ระดับ : <?php echo $_SESSION['user']['name']; ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>




