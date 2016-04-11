<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-注册</title>
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
<div id="reg_right">
    <div class="reg_right_title">
        <b>新用户注册</b> <font>Registration</font><a href="javascript:history.back();"></a>
    </div>
    <div class="reg_right_content" id="content">
    <script type="text/javascript" language="javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
	
	function regist(){
		var stu_id=document.getElementById("stu_id").value;
	    var name=document.getElementById("name").value;
		var institute=document.getElementById("institute").value;
		var nick_name=document.getElementById("nick_name").value;
		var password=document.getElementById("password").value;
		var password2=document.getElementById("password2").value;
		var phone=document.getElementById("phone").value;
		var len_stu_id = stu_id.length;
		var len_pwd = password.length;
		var a = '0';
		if(stu_id==""){
		    alert("请输入学号");
			a='1';
		} 
		if(len_stu_id>11||len_stu_id<11){
		    alert("学号长度为11字符，请重新输入");
			a='1';
		}
		if(name==""&&a=='0'){
		    alert("请输入姓名");
			a='1';
		}
		if(institute==""&&a=='0'){
		    alert("请输入学院");
			a='1';
		}
		if(nick_name==""&&a=='0'){
		    alert("请输入昵称");
		    a='1';
		}
		if(password==""&&a=='0'){
			alert("请输入密码");
            a='1';
		}
		if(len_pwd<6){
		    alert("密码至少为6字符");
			a='1';
		}
		if(password!=password2){
		    alert("两次输入的密码不同，请重新输入密码");
			a='1';
		}
		if(phone==""&&a=='0'){
		    alert("请输入电话");
			a='1';
		}
		if(a=='0'){
			document.formRegist.action="_regist.php";
            document.formRegist.submit();
        }

	}
    </script>
    
<form id="formRegist" name="formRegist" method="post" action="_regist.php">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="reg_right_content_table">
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">学号：</td>
            <td colspan="2"><input name="stu_id" id="stu_id" type="text" class="reg_text" /> <font style="color:#FF0004">*</font><font>(带*为必填项)</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">姓名：</td>
            <td colspan="2"><input name="name" id="name" type="text" class="reg_text"  /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">学院：</td>
            <td colspan="2"><input name="institute" id="institute" type="text" class="reg_text"  /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">昵称：</td>
            <td colspan="2"><input name="nick_name" id="nick_name" type="text"  class="reg_text" /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">登录密码：</td>
            <td colspan="2"><input minlength="6" name="password" id="password" type="password"  class="reg_text" /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">确认密码：</td>
            <td colspan="2"><input name="password2" id="password2" type="password"  class="reg_text" /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">联系电话：</td>
            <td colspan="2"><input name="phone" id="phone" type="text" class="reg_text"  /><font style="color:#FF0004"> *</font></td>
        </tr>
        <tr class="personal" style="display: table-row;">
            <td width="85" height="50" align="right">电子邮箱：</td>
            <td colspan="2"><input name="email" id="email" type="text" class="reg_text"  /></td>
        </tr>
        <tr>
            <td width="85" height="50" align="right">您的爱好：</td>
            <td colspan="2">
                <input name="intention[]" type="checkbox" class="reg_radio" id="basketball" value="篮球" /><label for="investment_projects">&nbsp;篮球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="football" value="足球" /><label for="understand">&nbsp;足球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="badminton" value="羽毛球" /><label for="collect_ideas">&nbsp;羽毛球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="table_tennis" value="乒乓球" /><label for="docking_project">&nbsp;乒乓球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="tennis" value="网球" /><label for="release_subject">&nbsp;网球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="valleyball" value="排球" /><label for="into_valley">&nbsp;排球</label>
                <input name="intention[]" type="checkbox" class="reg_radio" id="other_sports" value="其他运动" /><label for="other_cooperation">&nbsp;其他运动</label>
                <font>(至少选择一项)</font><br/>
            </td>
        </tr>
        <tr>
            <td height="50">&nbsp;</td>
            <td width="128"><input type="button" onClick="regist()" name="sub_reg" id="sub_reg" value="注 册" class="reg_but"/></td>
            <td width="391" class="tk">已注册，请<a href="login.php">登录</a></td>
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
<div class="bg">
    <img id="bgImg" class="bg" alt="Background image" src="images/reg_log_bg.jpg" />
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
    <script type="text/javascript">
</script>
</body>
</html>
  