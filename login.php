<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-登陆</title>
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
<div class="logo"> <a href=""><img src="images/ddd.png" /></a> </div>
<div class="share"> <a href="http://user.qzone.qq.com/1526499023?ptlang=2052" class="re" target="_blank"></a> <a href="http://weibo.com/u/2378541440 " class="we" target="_blank"></a> <a class="wa" target="_blank"></a> <img src="images/weixin.jpg" class="ewm" /> </div>
<div id="left"> </div>
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

<div id="reg_right" >
  <div class="reg_right_title"><b>用户登录</b> <font>Login</font> <a href="javascript:history.back();"></a> </div>
    <div class="reg_right_content" id="content"> 
    <form id="formLogin" name="formLogin" method="post" action="_login.php">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="reg_right_content_table">
        <tr>
                  <td width="85" height="50" align="right">学号：</td>
                  <td colspan="2"><input maxlength="11" name="stu_id" id="stu_id" type="text"  class="reg_text" /></td>
        </tr>
        <tr>
                  <td width="85" height="50" align="right">密码：</td>
                  <td colspan="2"><input name="login_password" id="login_password" type="password"  class="reg_text" /></td>
        </tr>
        <tr>
                  <td height="50">&nbsp;</td>
                  <td width="128"><input type="submit" name="sub_login" id="sub_login" value="登 录" class="reg_but"/></td>
                  <td width="391" class="tk">还未注册，请<a href="regist.php">注册</a></td>
                </tr>
      </table>
    </form>
    </div>
</div>
    <div class="mask">
        <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a>
        <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a>
        <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a>
    </div>
<div class="bg"> <img id="bgImg" class="bg" alt="Background image" src="images/reg_log_bg.jpg" /> </div>
    <div id="right_bottom"> </div>
      <ul class="bottom"><img src="images/closed_03.jpg" id="close_img" />
        <p>友情链接</p>
          <div class="friendlylink_list">
            <ul>
              <li><a href="http://www.ecnu.edu.cn/" target="_blank">学校主页</a></li>
              <li><a href="https://portal1.ecnu.edu.cn/cas/login?service=http%3A%2F%2Fportal.ecnu.edu.cn%2Fneusoftcas.jsp" target="_blank"> 公共数据库</a></li>
              <li><a href="http://sports.sina.com.cn/" target="_blank"> 新浪竞技风暴</a></li>
            </ul>
          </div>
      </ul>
</body>
</html>
