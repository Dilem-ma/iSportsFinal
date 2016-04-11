<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-修改信息</title>
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
<div id="usercontent_right">
    <div class="reg_right_title">
        <b>个人中心</b> <font>User Center</font>
    </div>
        <div class="ser_right_title usetitle">

</div>
<div class="clear"></div>
    <?php
    require_once'connectvars.php';
    $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username=$_COOKIE['username'];
    $result=mysqli_query($con,"SELECT * FROM user WHERE u_id='$username'");
    $row=mysqli_fetch_array($result);
    $id=$row['u_id'];
    $name=$row['u_name'];
    $phone=$row['u_phoneno'];
    $email=$row['u_email'];
?>

<form id="formUpdate" name="formUpdate" method="post" action="_user_change.php">
<script type="text/javascript">
	
	function change(){
		var password=document.getElementById("password").value;
		var password2=document.getElementById("password2").value;
		var phone=document.getElementById("phone").value;
		var email=document.getElementById("email").value;
		var old_pwd=document.getElementById("old_pwd").value;
		var len_pwd = password.length;
		var a = '0';
		if(old_pwd==""){
		    alert("请输入旧的密码");
			a='1';
		}
		if(password==""&&a=='0'){
			alert("请输入新密码");
            a='1';
		}
		if(old_pwd==password&&a=='0'){
		    alert("新旧密码相同，请重新输入");
			a='1';
		}
		if(len_pwd<6){
		    alert("密码至少为6字符");
			a='1';
		}
		if(password!=password2&&a=='0'){
		    alert("两次输入的密码不同，请重新输入密码");
			a='1';
		}
		if(phone==""&&a=='0'){
		    alert("请输入电话");
			a='1';
		}
		if(email==""&&a=='0'){
		    alert("请输入电子邮箱");
			a='1';
		}
		if(a=='0'){
			document.formUpdate.action="_user_change.php";
            document.formUpdate.submit();
        }

	}
    </script>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="user_center_table">
        <tbody>
        <tr>
            <td width="85" height="50" align="right">学号：</td>
            <td colspan="2"><?php echo $id;?></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">姓名：</td>
            <td colspan="2"><?php echo $name;?></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">旧密码：</td>
            <td colspan="2"><input name="old_pwd" id="old_pwd" type="password" class="reg_text"></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">登录密码：</td>
            <td colspan="2"><input name="password" id="password" type="password" class="reg_text"></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">确认密码：</td>
            <td colspan="2"><input name="password2" id="password2" type="password" class="reg_text"></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">联系电话：</td>
            <td colspan="2"><input name="phone" id="phone" type="text" value="" class="reg_text valid"></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">电子邮箱：</td>
            <td colspan="2"><input name="email" id="email" type="text" value="" class="reg_text valid"></td>
        </tr>

        <tr>
            <td height="50">&nbsp;</td>
            <td width="128"><input type="button" onClick="change()" name="sub_update" id="sub_update" value="确 认" class="reg_but"></td>
            <td width="391" class="tk"><a href="javascript:history.back();">返回</a></td>
        </tr>
        </tbody>
      </table>
</form>
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
  