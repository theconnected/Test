<?php

include_once './config/db_connect.php';

$sql = "SELECT * FROM datas WHERE user_id = '" . $_SESSION['user']['id'] . "'";
$Query = mysql_query($sql);


//pagination
$numRows = mysql_num_rows($Query); //นับแถวในตาราง
$perPage = 50; // จำนวนที่จะแสดงแต่ล่ะหน้า

$page = @$_GET["page"]; //get page

if (!@$_GET["page"]) { // ถ้าไม่มี page ก็แสดง page แรก
    $page = 1; //กำหนด $page = 1 ไว้
}

$PrevPage = $page - 1; //ลดลง
$NextPage = $page + 1; //บวกเพิ่ม

$PageStart = (($perPage * $page) - $perPage); //$perPage(จะแสดงเท่าไหร่)  * $page(หน้า page ที่ get ค่ามา) - $perPage || (10*1)-10

if ($numRows <= $perPage) {//ถ้าจำนวนแถว <= หน้าที่จะแสดง
    $numPage = 1;
} else if (($numRows % $perPage) == 0) { //แถวทั้งหมด Mod กับ Page ที่จะแสดง
    $numPage = ($numRows / $perPage);
} else {
    $numPage = ($numRows / $perPage) + 1;
    $numPage = (int) $numPage;
}
//เรียง
$sort = @$_POST['order'];
if (!empty($sort)) { // 
    $sql .= " AND type = '" . $sort . "' ORDER BY created DESC LIMIT $PageStart , $perPage";
} else { // 
    $sql .=" ORDER BY created DESC LIMIT $PageStart , $perPage";
}
$Query = mysql_query($sql);
?>



<div style="padding:5px">

	<div class="row-fluid">
		<div class="span8">
			<form name="sort" action="" method="post">
				<select name="order" style="width: 180px">
					<option value="" <?php if (@$sort == ''): ?>selected<?php endif; ?> >ทั้งหมด</option>
					<option value="income" <?php if (@$sort == 'income'): ?>selected<?php endif; ?> >รายรับ</option>
					<option value="pay" <?php if (@$sort == 'pay'): ?>selected<?php endif; ?> >รายจ่าย</option>
				</select>
				<button type="submit" class="btn btn-default">จัดเรียง </button>
			</form>
		</div>
		<div class="span4">
			<div class="text-right">
				<a href="home.php?url=form_data.php" class="btn btn-info"><i class="icon-eye-open"></i> เพิ่มรายการ</a>
			</div>
		</div>
		
    <div>

        <table cellspacing="0" cellpadding="0" width="100%" class="table-hover table">
            <thead>
                <tr style="">
                    <td style="width:5%;text-align:center;font-weight:bold">###</td>
                    <td style="width:20%;font-weight:bold">วันที่</td>
                    <td style="width:45%;font-weight:bold">รายการ</td>
                    <td style="width:20%;font-weight:bold">###</td>
                    <td style="width:10%;text-align:center;font-weight:bold">จำนวน</td>
                </tr>
            </thead>
            <tbody>
			<?php
			$numRow = mysql_num_rows($Query);
			if($numRow > 0){
				$i = 1;
				while ($Rs = mysql_fetch_array($Query)):
			?>
                <tr>
                        <td style="text-align: right;padding-right: 10px"><?php echo $i++; ?></td>
                        <td>
                            <i class="icon-calendar"></i>
                            <small><?php echo DateThai_full($Rs['created']); ?></small>
                        </td>
                        <td><?php echo $Rs['name']; ?></td>
                        <td class="text-center">
                            <a href="home.php?url=edit_data.php&id=<?php echo mysql_real_escape_string($Rs['id']) ?>"  class="btn btn-mini btn-success">
                                <i class="icon-pencil"></i> แก้ไข
                            </a>
                            <a href="home.php?url=delete_data.php&id=<?php echo mysql_real_escape_string($Rs['id']) ?>&page=<?php echo $page; ?>" onclick="return confirm('ยืนยัน!!\n--------------------\nคุณต้องการลบรายการนี้ใช่หรือไม่ ?')" class="btn btn-mini btn-danger">
                                <i class="icon-remove"></i> ลบ
                            </a>
                        </td>
                        <td style="text-align: right">
                     <?php if ($Rs['type'] == 'income'): ?>
                                <span style="color:#339933">
                                <?php echo number_format($Rs['qty']); ?>
                                </span>
                                <?php else: ?>
                                <span style="color:#ee5f5b">
                                <?php echo number_format($Rs['qty']); ?>
                                </span>
                                <?php endif; ?>
                        </td>
                </tr>
            <?php
                  endwhile;
                  $i++;
         }else{
			echo "<tr><td colspan='5'><div  class='text-center'><small>------------------------------- ยังไม่มีรายการ ---------------------------------</small></div></td></tr>";
		}
		?>
        </tbody>
    </table>
    </div>
   

    <!-- pagegination-->
    <div class="pagination">
        <ul>
            <?php
            //prev
            if ($PrevPage) {
                echo "<li><a href='home.php?url=lists_data.php&page=$PrevPage'>&laquo;</a></li>";
            }
            //all page
            for ($i = 1; $i <= $numPage; $i++) {
                if ($i != $page) {
                    echo "<li><a href='home.php?url=lists_data.php&page=$i'>$i</a></li>";
                } else {
                    echo "<li><a style='color:#FF6600;font-weight:bold'>$i</a></li>";
                }
            }
            //next
            if ($page != $numPage) {
                echo "<li><a href ='home.php?url=lists_data.php&page=$NextPage'>&raquo;</a></li>";
            }
            ?>
        </ul>
    </div>


    <div style="font-weight:bold;color:#444">
        <div class="row-fluid" style="border-top:#F95300 1px solid">
            <div style="padding-top:5px">
                <div class="span9">
                    <div style="padding-left:20px">
                        <?php
                        if (@$sort == 'income') {
                            echo "ยอดรายรับทั้งหมด";
                        } else if (@$sort == 'pay') {
                            echo "ยอดรายจ่ายทั้งหมด";
                        } else {
                            echo "ยอดค่าใช้จ่ายคงเหลือ";
                        } 
                        ?>
                    </div>
                </div>

                <div class="span3 text-right">
                    <div style="text-decoration:underline">
                        <?php
                        $SQL_IN = "SELECT SUM(qty) AS total FROM datas WHERE type='income' AND user_id = '" . $_SESSION['user']['id'] . "'";
                        $SQL_PAY = "SELECT SUM(qty) AS total2 FROM datas WHERE type='pay' AND user_id = '" . $_SESSION['user']['id'] . "'";

                        $QR_IN = mysql_query($SQL_IN);
                        $QR_PAY = mysql_query($SQL_PAY);

                        $RESULT_IN = mysql_fetch_array($QR_IN);
                        $RESULT_PAY = mysql_fetch_array($QR_PAY);

                        if (@$sort == 'income') {
                            $SUM = $RESULT_IN['total'];
                            echo number_format($SUM) . " ฿-";
                        } else if (@$sort == 'pay') {
                            $SUM = $RESULT_PAY['total2'];
                            echo number_format($SUM) . " ฿-";
                        } else {
                            $SUM = $RESULT_IN['total'] - $RESULT_PAY['total2'];
                            echo number_format($SUM) . " ฿-";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
?>




