<?php
session_start();

if (empty($_SESSION['user'])) {
    ?>
   <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
       <title>ระบบบันทึกรายรับ-รายจ่าย ประจำวัน</title>
		<meta name="description" content="ระบบบริหาร รายรับ-รายจ่าย ประจำวัน" />
		<meta name="keywords" content="รายรับ,รายจ่าย,ระบบ,โปรแกม,แจกฟรี" />
		<meta name="author" content="n@win_dev" />
		<meta name="revisit-after" content="7 days" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.form-validator.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/layout.css">
	
</head>
<body>
	<div class="container">
		<div class="form-bg">
			<form action="chk.php" method="post">
				<h2>เข้าระบบ บันทึกรายรับ-รายจ่าย </h2>
				<p><input type="text" placeholder="ชื่อผู้ใช้งาน" name="login[username]" data-validation="custom" data-validation-regexp="^([a-z,A-Z,0-9]+)$"  maxlength="100"/></p>
				<p><input type="password" placeholder="รหัสผ่าน" name="login[password]" data-validation="custom" data-validation-regexp="^([ก-๙,a-z,A-Z,0-9]+)$"  maxlength="100"/></p>
				<!-- <label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label> -->
				<button type="submit">เข้าระบบ</button>
			<form>
		</div>
		<p class="forgot">สมัครสมาชิกใหม่ <a href="register.php"><i class="icon-pencil"></i> คลิ๊ก.</a></p>
	</div>

	<script>$.validate()</script>
	<!-- JS  -->

	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>>
    <?php
}else {
    echo "<meta http-equiv='refresh' content='0;URL=home.php?url'>";
}?>