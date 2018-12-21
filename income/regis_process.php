    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <meta name="stats-in-th" content="0f5d" />
            <title>บันทึก รายรับ-รายจ่าย ประจำวัน</title>
            <meta name="description" content="ระบบบันทึก รายรับ-รายจ่าย ประจำวัน" />
            <meta name="keywords" content="รายรับ,รายจ่าย,ระบบ,โปรแกม,แจกฟรี" />
            <meta name="author" content="n@win_dev" />
            <meta name="revisit-after" content="7 days" />
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
            <link rel="icon" href="/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css"/>
            <script type="text/javascript" src="assets/js/bootstrap.js"></script>

            <script type="text/javascript" src="assets/js/jquery.js"></script>
            <link href='http://fonts.googleapis.com/css?family=Bitter:400' rel='stylesheet' type='text/css'>
            <style>
                body{
                    font-family: 'Bitter', sans-serif;
                }
            </style>
        </head> 
		<body>		
		<?php
                    include "./config/db_connect.php";

                    $regis = $_POST['regis'];
				//check user
                    $sqlchk = "SELECT * FROM users WHERE username = '" . $regis['username'] . "'";

                    $qr = mysql_query($sqlchk);
                    $rs = mysql_fetch_array($qr, MYSQL_ASSOC);


                    if (empty($rs)) {
                        $sql = "INSERT INTO users(user_type_tid,username, password, fname, lname,email,tel,created)VALUES (1,'" . $regis['username'] . "','" .base64_encode(base64_encode($regis['password'])). "','" . $regis['fname'] . "','" . $regis['lname'] . "','" . $regis['email'] . "','" . $regis['tel'] . "',NOW())";
                        $rs2 = mysql_query($sql);
                        if ($rs2) {
                           echo "<div class='alert alert-info'><strong>แจ้งเตือน!</strong> Register Complete!.</div>";
						echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                        } else {
                            echo "fail!_. <a href='register.php'>back</a>" . mysql_error();
                        }
                    } else {
                        echo "
						 <script>
							 alert('แจ้งเตือน!!! username ถูกใช้งานแล้ว ลองใหม่อีกครั้ง.');
							 window.location='javascript:history.back()';
						 </script>"
						 ;
                    }
                    ?>
     </body>
</html>	 