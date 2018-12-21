<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
            .container{
                width:80%;
                margin-right: auto;
                margin-left: auto; 
            }

            .menu{
                padding: 10px 0px 28px 0px;
                background: #f5f5f5;
                margin-bottom: 5px;
            }

            .menu-left{
                float:left;
                width:75%;
            }

            .menu-right{
                float:right;
                width:25%;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .menu li {
                float: left;
                border-right: 1px solid #ececec;
            }

            .menu li:last-child {
                border-right: none;
            }

            .menu li a {
                display: block;
                text-align: center;
                padding: 0px 30px;
                text-decoration: none;
                
            }

            .menu li a:hover {
                color: #001122;
            }

            .menu-nav-left{
                width:25%;
                float:left;
            }
            .content-data{
                width:75%;
                float:right;
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="menu-left">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
            </div>
            <div  class="menu-right">
                 นายขจรศักดิ์ ผักใบเขียว &nbsp;<a href="">ออกจากระบบ</a>
            </div>
        </div>

        <div class="menu-nav-left">
            <div style="border:1px solid #ccc;margin-right:5px">
                <ul>
                    <li><a href="home.php?url=m1.php">เมนู 1 </a></li>
                    <li><a href="#">เมนู 2 </a></li>
                    <li><a href="#">เมนู 3 </a></li>
                    <li><a href="#">เมนู 4 </a></li>
                    <li><a href="#">เมนู 5 </a></li>
                    <li><a href="#">เมนู 6 </a></li>
                </ul>
            </div>
        </div>
        <div class="content-data">
            <div style="border:1px solid #ccc">
                <div style="padding:10px">
                    <?php if (@$_GET['url'] != null): ?>
                    <?php include_once $_GET['url']; ?>	
                        <?php else: ?>
                           Hello world
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div style="clear:both"></div>
        <hr />
        <div>
            Coppy right 2018
        </div>
    </div>
</body>

</html>