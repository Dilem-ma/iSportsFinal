<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-BBS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=9" >
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="js/jQuery.js"></script>
        <script src="js/common.js"></script>
        <script type="text/javascript">
            var current_classid = '6515';
            var show_main_id = '';
            
            $(document).ready(function(){
                $("#nav a").each(function(i){
                    if(location.href.indexOf($(this).attr("href")) >-1){
                        $(this).addClass("slt");
                    }
                });
            })
            
        </script>
    </head>
    <body>
        <div style="width:1024px; margin:0 auto; height:1px"></div>
        <div class="logo">
            <a href=""><img src="images/ddd.png" /></a>
        </div>
        <div class="share">
            <a href="http://user.qzone.qq.com/1526499023?ptlang=2052" class="re" target="_blank"></a>
            <a href="http://weibo.com/u/2378541440 " class="we" target="_blank"></a>
            <a class="wa" target="_blank"></a>
            <img src="images/weixin.jpg" class="ewm" />
        </div>
        <div id="left">

        </div>
        <div id="nav">
            <div class="left">
                <ul>
                    <li><a href="index.php" class="home">首页 </a></li>
                    <li><a href="news.php">校园新闻</a></li>
                    <li><a href="forum.php">球赛论坛</a></li>
                    <li><a href="appointment.php">相约球场</a></li>
                    <li><a href="lease.php">场馆租借</a></li>
                    <li><a href="download.php">资料下载</a></li>
                    <li><a href="about.php">关于我们</a></li>
                </ul>
            </div>
            <div class="right usercenter">
                <script type="text/javascript">
                    var site_theme_path_rl='themes/222/template/';

                    $().ready(function(){
                        $(".usercenter").hover(function(){
                            $(this).addClass("usercenter_on");
                            $(this).children("ul").show();
                            $(this).find("img").attr("src",site_theme_path_rl+"images/se_Add_06.jpg");
                        },function(){
                            $(this).removeClass("usercenter_on");
                            $(this).children("ul").hide();
                            $(this).find("img").attr("src",site_theme_path_rl+"images/se_Add_07.jpg");
                        })
                    });

                </script>
            <?php
            if(isset($_COOKIE['username'])) {
                ?>

    <span>
        <h2>欢迎，<?php echo $_COOKIE['user_name'];?></h2>
    </span>
                    <div class="clear"></div>
                    <ul>
                        <li><a href="user.php">个人资料</a></li>
                        <li><a href="my_sign_up.php">我报名的约球</a></li>
                        <li><a href="my_start.php">我发起的约球</a></li>
                        <li><a href="lease.php">场地预约</a></li>
                        <li><a href="logout.php">退出</a></li>
                    </ul>
                <?php
            }
            else
                echo ('<a href="login.php">登录</a><a href="regist.php">注册</a>');
            ?>
        </div>
    <div class="clear"></div>
     </div>
<div id="news_right">
    <div class="reg_right_title">
        <b>球赛论坛</b> <font>Forum</font>
    </div>
    <div class="newslist">
    <?php
        require_once"connectvars.php";
        $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $bbs_num=$_GET['a'];
        $result=mysqli_query($con,"SELECT * FROM bbs WHERE b_id='$bbs_num'");
        $row = mysqli_fetch_array($result);
        $title = $row['b_title'];
		$id = $row['u_id'];
        $time = $row['b_time'];
        $img = $row['b_img'];
        $describe = $row['b_content'];
    ?>
<script type="text/javascript" src="news/js/jquery.fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="news/js/jquery.fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="news/js/jquery.fancybox/jquery.fancybox-1.3.1.css" media="screen">

<script>
function goBottom() {
window.scrollTo(0, document.documentElement.scrollHeight-document.documentElement.clientHeight);
}
 </script>
 <div class="bbs" style="position:relative;text-align:left">
     <font size="+3" ><?php echo $title ?></font>
     <hr style=":10px" />
 </div>

 <div class="bbs" >
 <br>
 <div class="news_content" style="font-size:16px;position:relative;text-align:left"><?php echo $id; ?> : <?php echo $describe  ?></div>
 <br>
 <hr />
     <?php
     $result1=mysqli_query($con,"SELECT * FROM commentary WHERE b_id='$bbs_num'");
     $row1=mysqli_fetch_array($result1);
     while($row1)
     {
         ?>
     <div class="bbs" >
         <br>
         <div class="news_content" style="font-size:16px;position:relative;text-align:left"><p><?php echo $row1['u_id'];?> : <?php echo $row1['c_content']; ?></p></div>
         <br>
         <hr />
         <?php
         $row1=mysqli_fetch_array($result1);
     }
     ?>
 </div>
 <form method="post" action="_bbs.php?a=<?php echo $bbs_num;?>">
 <div>
     <br>

     <b style="font-size:18px">发表回复</b><br>
     <textarea id="reply" name="reply" type="text" style="width:600px; height:200px;z-index:0"></textarea><br>
     <p class="return"><a href="javascript:history.go(-1);">返回</a></p>
     <input style="width:60px;height:30px; position:absolute; left:550px" name="btn_reply" type="submit" id="btn_reply" value="回  复" />
 </div>
     </form>

</div>
</div>
</div>
    <div class="mask">
        <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a>
        <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a>
        <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a>
    </div>
<div class="bg">
    <img id="bgImg" class="bg" alt="Background image" src="images/reg_bg.jpg" />
</div>
<div id="right_bottom">
</div>
 <ul class="bottom">
        <img src="images/closed_03.jpg" id="close_img" />
        <p>友情链接</p>
        <div class="friendlylink_list">
    <ul>
                        <li><a href="http://www.ecnu.edu.cn/" target="_blank">学校主页</a></li>
                                <li><a href="https://portal1.ecnu.edu.cn/cas/login?service=http%3A%2F%2Fportal.ecnu.edu.cn%2Fneusoftcas.jsp" target="_blank"> 公共数据库</a></li>
                                <li><a href="http://sports.sina.com.cn/" target="_blank"> 新浪竞技风暴</a></li>
                    </ul>
</div>    </ul>
</body>
</html>
