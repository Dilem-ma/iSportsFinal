<!doctype html>
<html>
        <head>
        <meta charset="utf-8">
        <title>isports-个人中心</title>
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
<div id="usercontent_right">
    <div class="reg_right_title">
        <b>个人中心</b> <font>User Center</font>
    </div>
         <div class="ser_right_title usetitle">
            <ul>
              <li><a style="color:#000000" href="user.php">个人资料</a></li>
              <li><a style="color:#000000" href="my_sign_up.php">我报名的约球</a></li>
              <li><a class="act" href="my_start.php">我发起的约球</a></li>
              <li><a style="color:#000000" href="appointment_child.php">申请约球</a></li>
              <li><a style="color:#000000" href="appointment.php">场地预约</a></li>
            </ul>
          </div>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="usr_table2" style="background:none">
    <thead>
              <tr>
        <td height="35">约球细目</td>
        <td align="right" style="padding-right: 30px;">发起时间</td>
      </tr>
            </thead>
    <tbody>
              <?php
    require_once"connectvars.php";
    $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    ?>
    <?php
        $page;//当前页面
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
        }//当前页数
        else
        {
            $page=1;
        }
		$u_id = $_COOKIE['username'];
        $result=mysqli_query($con,"SELECT * FROM appointment where u_id = '$u_id' order by y_id desc ");
		
        $count=mysqli_num_rows($result);
        $per_page_num=6;//每页显示的条目数量
        $page_num=ceil($count/$per_page_num);//总页数
        $items=0;
        for($i=0;$i<$count&&$items<$per_page_num;$i++)
        {
            //查找示单项资料的内容，
            $row = mysqli_fetch_array($result);
            if($i<($page-1)*$per_page_num)continue;

            $id=$row['y_id'];
            $uid=$row['u_id'];
            $title=$row['y_title'];
            $label=$row['y_label'];
            $content=$row['y_content'];
            $place=$row['y_place'];
            $num=$row['y_num'];
            $playtime=$row['y_play_time'];
            $time=$row['y_time'];
            $isuse=$row['y_isuse'];


            if($i%$per_page_num==0)
                echo '<tr class="tr_project_name project_name_first">';
            else
                echo '<tr class="tr_project_name">';
            ?>
            <td width="80%" align="left" class="case_name"><span>No.<?php echo $id;?></span><a href="<?php echo "appointment_detail.php?a=".$id ?>"><?php echo $title;?></a></td>
            <td align="right"><?php echo date('Y/m/d',strtotime($time)); ?></td>
            </tr>
    <tr class="proj_cont" style="display: table-row;">
              <td colspan="3"><table class="tab_cont">
                <tbody>
                  <tr class="tr_hidden tr355">
                      <td class="color999"><?php echo $label;?> <br>
                      球类：<?php echo $label?>&nbsp;&nbsp;| 发起时间：<?php echo date('Y/m/d',strtotime($time)); ?> &nbsp;&nbsp;|&nbsp;&nbsp;地点：<?php echo $place;?>&nbsp;&nbsp;|总人数：<?php echo $num;?></td>
                      <td align="right"><a href="<?php echo "appointment_detail.php?a=".$id ?>" class="xmdj sc_no" style="left: -50px; background:#ed6f1b;">详情</a></td>
                    </tr>
                  <tr class="tr_hidden tr355">
                      <td class="case_info"><?php echo $content;?></td>
                      <?php if($isuse!=1){?>
                      <td align="right" valign="top"><a href="<?php echo "_appointment_stop.php?a=".$id ?>" class="xmdj sc_no" style="left: -50px; background: #ed6f1b">停止报名</a></td>
                      <?php }else{?>
                      <td align="right" valign="top"><a class="xmdj sc_no" style="left: -50px; background: #CCCCCC">报名已截止</a></td>
                      <?php }?>
                    </tr>
                </tbody>
                </table></td>
            </tr>
    <?php
            $items++;
        }
        ?>
      </tbody>
    
  </table>
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
<div class="bg"> <img id="bgImg" class="bg" alt="Background image" src="images/reg_bg.jpg" /> </div>
<div id="right_bottom"> </div>
<ul class="bottom">
          <img src="images/closed_03.jpg" id="close_img" />
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
