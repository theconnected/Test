<div>
    <div>
        <a href="home.php?url=form_usertype.php" class="btn btn-warning"><i class="icon-plus-sign"></i> เพิ่มประเภท</a>
    </div>
    <div>
        <table border="0" cellspacing="0" cellpadding="0" width="100%" class="table table-striped">
            <thead>
                <tr style="">
                    <td style="font-weight:bold;text-align: center;width: 5%">###</td>
                    <td style="font-weight:bold;width: 70%">ระดับ</td>
                    <td style="font-weight:bold;width: 25%">###</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include './config/db_connect.php';
                $sql = "SELECT * FROM user_types";
                $qr = mysql_query($sql);
                ?>
                <?php
                while ($rs = mysql_fetch_array($qr,MYSQL_ASSOC)):
                ?>
                <tr>
                    <td style="text-align: right;padding-right:10px"><?php echo $rs['tid']; ?></td>
                    <td><?php echo $rs['name'];?></td>
                    <td>
                        <a href="home.php?url=edit_usertype.php&tid=<?php echo mysql_real_escape_string($rs['tid']);?>" class="btn btn-mini btn-success">
                            <i class="icon-pencil"></i> แก้ไข</a>
                        <a href="home.php?url=delete_usertype.php&tid=<?php echo mysql_real_escape_string($rs['tid']); ?>" class="btn btn-mini btn-danger"onclick="return confirm('ยืนยัน\n--------------------\nคุณต้องการลบรายการนี้ใช่หรือไม่?')">
                            <i class="icon-remove"></i> ลบ</a>
                    </td>
                </tr>
                <?php endwhile;?>
                <?php mysql_close();?>
            </tbody>
        </table>
    </div>
</div>