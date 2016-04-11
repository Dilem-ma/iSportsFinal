<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isport-关于我们</title>
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
        </div>            <div class="clear"></div>
        </div>
    
    <div id="contact_right">
    <p class="neititle">关于我们  About US</p>
    <div class="contact_right_top">
        <div class="contact_right_top_list">
    <ul>
                <li>
            <img src="images/xie.jpg">
            <span><p>谢斌         开心果，页面设计与前端开发</p> 
<!--                15216717719 <br />-->
                1542752218@qq.com </span>
        </li>
                <li>
            <img src="images/zhang.jpg">
            <span><p>张健宁        代码大神，后台开发与代码重构</p> 
<!--                 <br />-->
                775004030@qq.com </span>
        </li>
                <li>
            <img src="images/zhu.jpg">
            <span><p>朱远青        小黑，数据库的架构</p> 
<!--                 <br />-->
                982348557@qq.com </span>
        </li>
                <li>
            <img src="images/cui.jpg">
            <span><p>崔宇璇        女神，协助数据库的架构</p> 
<!--                 <br />-->
                437209901@qq.com </span>
        </li>
                <li>
            <img src="images/wang.jpg">
            <span><p>王承         认真负责，前端开发</p> 
<!--                 <br />-->
                308170166@qq.com </span>
        </li>
         <li>
            <img src="images/who.jpg">
            <span><p>期待你们的加入</p> 
<!--                 <br />-->
                我们需要你们的联系方式 </span>
        </li>
            </ul>
</div>
<div class="clear"></div>

    <div class="contactrightbottom" id="content">
                <p>我们的iSports有许多功能，仍然需要继续完善和改进，期待更多的人愿意加入我们，一起完成我们校园的iSports！！！</p>
                <p>&nbsp;</p>
                <p>联系人：谢斌  13917829004</p>
                <p><br>
                </p>
<p>这就是我们团队白雪公主和四个小黑银的iSports网页~ </p>
            </div>
    
<!--    <div style="width:600px;height:400px;border:#ccc solid 1px; margin:20px 0;" id="dituContent"></div>-->
</div>

<script  type="text/javascript">
    
    
    function setTab(name,cursel,n){
        for(i=1;i<=n;i++){
            var menu=document.getElementById(name+i);
            var con=document.getElementById("con_"+name+"_"+i);
            menu.className=i==cursel?"hover":"";
            con.style.display=i==cursel?"block":"none";
        }
    }
    
    $().ready(function(){
        $(".right_bottom_right_list li").hover(function(){
            $(this).addClass("xmhd_hover");
        },function(){
            $(this).removeClass("xmhd_hover");
        })
        
        $("#xwhd1").mouseover(
        function(){
            $(this).addClass('hover');
            $("#xwhd2").removeClass('hover');
            $("#con_xwhd_1").show();
            $("#con_xwhd_2").hide();
            $("#con_xwhd_1 right1").show();
            $("#con_xwhd_1 left1").show();
            $("#con_xwhd_2 right1").hide();
            $("#con_xwhd_2 left1").hide();
                
        }
    )
        $("#xwhd2").mouseover(
        function(){
            $(this).addClass('hover');
            $("#xwhd1").removeClass('hover');
            $("#con_xwhd_2").show();
            $("#con_xwhd_1").hide();
            $("#con_xwhd_1 right1").hide();
            $("#con_xwhd_1 left1").hide();
            $("#con_xwhd_2 right1").show();
            $("#con_xwhd_2 left1").show();
        }
    )

            
        
        
    })
    
</script>

    <div class="mask">
        <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a>
        <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a>
        <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a>
    </div>
<div class="bg">
    <img id="bgImg" class="bg" alt="Background image" src="images/about.jpg" />
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
  