<?php
ob_start();
session_start();

include './header.php';
?>
<div class="clearfix"></div>
<?php if (!empty($_SESSION['user'])): ?>
    <div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td style="width:20%" valign="top">

                    <div style="
                         border:1px #ccc solid;
                         -webkit-border-radius:8px;
                         -moz-border-radius:8px;
                         border-radius:8px;

                         -moz-box-shadow: 0 0 5px #ccc;
                         -webkit-box-shadow: 0 0 5px #ccc;
                         box-shadow: 0 0 5px #ccc;
                         ">

                        <div style="border-bottom:1px #ccc solid;padding:10px;background:#535353;-webkit-border-radius:8px 8px 0 0;-moz-border-radius:8px 8px 0 0;border-radius:8px 8px 0 0">
                            <a href="home.php" style="color:#fff;text-decoration:none"><b><i class="icon-home"></i> เมนูหลัก</b></a>
                        </div>

                        <?php if ($_SESSION['user']['user_type_tid'] == '1'): ?> 
                            <div style="padding:5px;background:#fff;-webkit-border-radius:0 0 8px 8px;-moz-border-radius:0 0 8px 8px;border-radius:0 0 8px 8px">
                                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=lists_data.php" >
                                                        <div><img src="./icon/file-add.png" /></div>
                                                        <small>รายการ</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=form_profile.php" >
                                                        <div><img src="./icon/folder-blue.png" /></div>
                                                        <small>โปรไฟล์</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=report.php" >
                                                        <div><img src="./icon/pile.png" /></div>
                                                        <small>กราฟ</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=download.php" >
                                                        <div><img src="./icon/cloud-download.png" /></div>
                                                        <small>ดาวน์โหลด</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        <?php elseif ($_SESSION['user']['user_type_tid'] == '2'): ?>
                            <div style="padding:5px;background:#fff;-webkit-border-radius:0 0 8px 8px;-moz-border-radius:0 0 8px 8px;border-radius:0 0 8px 8px">
                                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=lists_data.php" >
                                                        <div><img src="./icon/file-add.png" /></div>
                                                        <small>รายการ</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=form_profile.php" >
                                                        <div><img src="./icon/folder-blue.png" /></div>
                                                        <small>โปรไฟล์</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=user.php" >
                                                        <div><img src="./icon/user.png" /></div>
                                                        <small>ผู้ใช้งาน</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
									</tr>
                                    <tr>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=usertypes.php" >
                                                        <div><img src="./icon/group.png" /></div>
                                                        <small>ประเภทผู้ใช้</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=report.php" >
                                                        <div><img src="./icon/pile.png" /></div>
                                                        <small>กราฟ</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=download.php" >
                                                        <div><img src="./icon/cloud-download.png" /></div>
                                                        <small>ดาวน์โหลด</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
									<tr>
                                        <td>
                                            <div style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px #ccc solid;padding:5px">
                                                <div class="text-center" style="padding:5px">
                                                    <a href="home.php?url=support.php" >
                                                        <div><img src="./icon/help-icon.png" /></div>
                                                        <small>ซัพพอร์ท</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            
                                        </td>
										<td></td>
                                    </tr>
                                </table>

                            </div>
                        </div> 
                    <?php endif; ?>
                </td>

                <td style="width:1%"></td>

                <td style="width:79%" valign="top">
                    <div style="
                         border:1px #ccc solid;
                         -webkit-border-radius:8px;
                         -moz-border-radius:8px;
                         border-radius:8px;

                         -moz-box-shadow: 0 0 5px #ccc;
                         -webkit-box-shadow: 0 0 5px #ccc;
                         box-shadow: 0 0 5px #ccc;
                         ">
                        <div style="color:#fff;border-bottom:1px #ccc solid;padding:10px;-webkit-border-radius:8px 8px 0 0;-moz-border-radius:8px 8px 0 0;border-radius:8px 8px 0 0;background:#535353">
                            <b>
                                <?php
                                if (@$_GET['url'] == 'form_data.php') {
                                    echo "<i class='icon-pencil'></i> เพิ่มรายการ";
                                } else if (@$_GET['url'] == 'problem.php') {
                                    echo "<i class='icon-code'></i> แจ้งปัญหาการใช้งาน";
                                } else if (@$_GET['url'] == 'download.php') {
                                    echo "<i class='icon-cloud'></i> ไฟล์ - เอกสาร";
                                }else if (@$_GET['url'] == 'lists_data.php') {
                                    echo "<i class='icon-smile'></i> รายการ";
                                } else if (@$_GET['url'] == 'edit_data.php') {
                                    echo "<i class='icon-pencil'></i> แก้ไขข้อมูล";
                                } else if (@$_GET['url'] == 'report.php') {
                                    echo "<i class='icon-file'></i> รายงาน";
                                } else if (@$_GET['url'] == 'user.php') {
                                    echo "<i class='icon-bug'></i> จัดการผู้ใช้งาน.";
                                } else if (@$_GET['url'] == 'edit_user.php') {
                                    echo "<i class='icon-pencil'></i> แก้ไขผู้ใช้";
                                } else if (@$_GET['url'] == 'form_user.php') {
                                    echo "<i class='icon-user'></i> เพิ่มผู้ใช้";
                                } else if (@$_GET['url'] == 'usertypes.php') {
                                    echo "<i class='icon-puzzle-piece'></i> จัดการ ประเภทผู้ใช้";
                                } else if (@$_GET['url'] == 'form_usertype.php') {
                                    echo "<i class='icon-star'></i> เพิ่ม ประเภทผู้ใช้";
                                } else if (@$_GET['url'] == 'edit_usertype.php') {
                                    echo "<i class='icon-pencil'></i> แก้ไข ประเภทผู้ใช้";
                                } else if (@$_GET['url'] == 'form_profile.php') {
                                    echo "<i class='icon-user'></i> โปรไฟล์";
                                }else if (@$_GET['url'] == 'support.php') {
                                    echo "<i class='icon-bell'></i> รายการ แจ้งปัญหา";
                                } else {
                                    echo "#####";
                                }
                                ?>
                            </b>
                        </div>
                        <div style="padding:5px;background:#fff;-webkit-border-radius:0 0 8px 8px;-moz-border-radius:0 0 8px 8px;border-radius:0 0 8px 8px">
                            <?php if (@$_GET['url'] != null): ?>
                                <?php include_once $_GET['url']; ?>	
                            <?php else: ?>
                                <div style="padding:10px">
                                    <b style="color:#C52A2A"><i class="icon-bullhorn"></i>&nbsp;ประกาศ :</b>
                                    
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<?php else: header('location:index.php'); ?>
<?php endif; ?>

<?php
include './footer.php';
?>