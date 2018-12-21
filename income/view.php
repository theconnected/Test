<?php
include './config/db_connect.php';
$id = mysql_real_escape_string($_GET['id']);
$sql = "SELECT * FROM users WHERE id = '" . $id . "'";

$query = mysql_query($sql);
$rs = mysql_fetch_array($query);
?>



<div style="padding:10px">
    <div class="row-fluid">
        <div class="span8">
            <div style="font-size:20px;color:#40bf40">
                <b>ข้อมูลผู้ใช้</b>
            </div>
        </div>
        <div class="span4">
            <div class="text-right">
                <button class="btn btn-warning" onclick="window.location='javascript:history.back()';"><i class="icon-reply"></i> กลับ</button>&nbsp;
                <button class="btn btn-success"><i class="icon-print"></i> ปริ้น</button>
            </div>
        </div>
    </div>

    <div style="border-top: 1px #444 dotted;border-bottom: 1px #444 dotted">
        <div style="padding-top:5px">
            <p>ผู้ใช้ : <strong><?php echo $rs['username']; ?></strong></p>
            <p>ระดับสิทธ์ : <strong style="color:#F09609"><?php echo $rs['user_type_tid']; ?></strong></p>  
            <p>ชื่อ : <strong><?php echo $rs['fname']; ?></strong> นามสกุล : <strong><?php echo $rs['lname']; ?></strong></p>
            <p>ที่อยู่ : <strong><?php echo $rs['address']; ?></strong></p>
            <p>อีเมลล์ : <strong><?php echo $rs['email']; ?></strong> เบอร์โทร :<strong><?php echo $rs['tel']; ?></strong></p>
        </div>
    </div>

</div>