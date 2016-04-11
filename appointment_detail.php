<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-主页</title>
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
        <?php
		    require_once"connectvars.php";
            $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
            if (mysqli_connect_errno($con))
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
			$id=$_GET['a'];
			$result=mysqli_query($con,"SELECT * FROM appointment WHERE y_id = $id ");
			$row = mysqli_fetch_array($result);
            $y_id=$row['y_id'];
			$title = $row['y_title'];
			$ball = $row['y_label'];
			$u_id = $row['u_id'];
			$place = $row['y_place'];
			$time = $row['y_play_time'];
			$current = $row['y_nownum'];
			$content = $row['y_content'];
			$isuse = $row['y_isuse'];
			$res = mysqli_query($con,"SELECT * FROM user WHERE u_id = $u_id ");
			$row2 = mysqli_fetch_array($res);
			$name = $row2['u_name'];
			$phone = $row2['u_phoneno'];
		?>
    <div class="reg_right_title"> <b>相约球场</b> <font>Court</font><a style="background:" href="javascript:history.back();"></a></div>
        <form action="_sign_up.php" method="post">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="user_center_table">
    <tbody>
      <tr>
        <td width="85" height="50" align="right">约球标题：</td>
        <td colspan="2"><?php echo $title;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">约球人姓名：</td>
        <td colspan="2"><?php echo $name;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">学号：</td>
        <td colspan="2"><?php echo $u_id;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">联系电话：</td>
        <td colspan="2"><?php echo $phone;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">球类：</td>
        <td colspan="2"><?php echo $ball;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">日期：</td>
        <td colspan="2"><?php echo date('Y/m/d',strtotime($time)); ?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">地点：</td>
        <td colspan="2"><?php echo $place;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">当前人数：</td>
        <td colspan="2"><?php echo $current;?></td>
      </tr>
      <tr>
        <td width="85" height="50" align="right">个性宣传：</td>
        <td colspan="2"><?php echo $content;?></td>
      </tr>
      <tr>
        <td height="50">&nbsp;</td>

        <td width="128"><input type="submit" name="sign_up" id="sign_up" value="报名" class="reg_but" >
        <input type="hidden" name="u_id" value="<?php echo $u_id;?>"></td>
          <input type="hidden" name="y_id" value="<?php echo $y_id;?>">

        <td width="391">&nbsp;</td>
      </tr>
      <tr>
        <td height="50">&nbsp;</td>

           <?php if($isuse!=1) {?>
            <td width="128"><input type="submit" name="sign_up" id="sign_up" value="报名" class="reg_but" >
        <input type="hidden" name="u_id" value="<?php echo $u_id;?>"></td>
          <input type="hidden" name="y_id" value="<?php echo $y_id;?>">
            <?php }else {?>
            <td width="128">
            <input type="text" name="sign_up_stop" id="sign_up_stop" value="报名截止" class="reg_but" style=" background-color:#CCCCCC">
            </td>
            <?php } ?>
                    
            <input type="hidden" name="u_id" value="<?php echo $u_id;?>"></td>
          <input type="hidden" name="y_id" value="<?php echo $y_id;?>">

        <td width="391">&nbsp;</td>
      </tr>
      </tbody>
  </table>
        </form>
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


        }
    )
        $("#xwhd2").mouseover(
        function(){
            $(this).addClass('hover');
            $("#xwhd1").removeClass('hover');
            $("#con_xwhd_2").show();
            $("#con_xwhd_1").hide();

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
  