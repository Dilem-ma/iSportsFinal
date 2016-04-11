<!doctype html>
<html>
        <head>
        <meta charset="utf-8">
        <title>isports-球场租借</title>
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
<div id="ser_right">
          <p class="neititle">场馆租借  Services</p>
          <div class="ser_right_title">
    <ul class="sub_cate">
              <li class="depth_1" id="6600" depth="1" p_id="6594"> <a class="sub_cate_on" href="lease.php" target="_self">租借情况</a> </li>
              <li class="depth_1" id="6601" depth="1" p_id="6594"> <a href="lease.php" target="_self">场地预约</a> </li>
            </ul>
  </div>
          <div class="clear"></div>
          <div class="page page_ser"> <a href="?classid=6600&amp;page_event=last_12" class="pageleft pageicon"></a> <span>查看前7天</span> <a href="?classid=6600&amp;page_event=next_12" class="pageright pageicon" style="float:right"></a> <span style="float:right">查看后7天</span> </div>
          <div id="content" class="ser_right_list" style="margin-top: 0;"> 
    <script type="text/javascript">
    
    $().ready(function(){
        $(".sec_div_content ul li").hover(function(){
            $(this).addClass("li_hover");
        },function(){
            $(this).removeClass("li_hover");
        })
    });
    
</script> 
    <script type="text/javascript">
        var event_num1='2';
        
        $().ready(function(){
            $("#ser_select_01").mouseenter(function(){
                $(".sec_div").hide(500);
                $("#sec_div_01").show(500);
            })
			
            $(".closed").click(function(){
                $(".sec_div").hide(500);
            })
            
            var click1 = 0;
            var click_num1 = event_num1-8;
            $("#up1").click(function(){
                if(click1 != 0){
                    $("#sec_div_content1 ul").animate({marginTop: '+=42'}, 800);
                    click1--;
                }
            });
        
            $("#down1").click(function(){
                if(click1 != click_num1){
                    $("#sec_div_content1 ul").animate({marginTop: '-=42'}, 800);
                    click1++;
                }
            });
        });
        
    </script>
    <li class="ser_select" id="ser_select_01"> <img src="images/default_photo.jpg"> <span> 11-03
      <p>星期一</p>
      </span> 
              <!--        <dl>
            <dt>
            <div>
                11-03
                <p>星期一</p>
                <a href="javascript:void(0)"  id="ser_select_01">查看>></a>
            </div>
            </dt>
        </dl>--> 
            </li>
    <div class="sec_div" id="sec_div_01">
              <div class="sec_div_title"> <span> 11-03 <b>星期一</b> </span> <a href="javascript:void(0)" class="closed" id="closed_01" style="float:right"><img src="images/srv_03.jpg"></a> </div>
              <div class="sec_div_content" id="sec_div_content1">
        <ul>
                  <li><a href="?classid=6600&amp;t=show&amp;id=527">20:00-22:00
                    <p>球类1</p>
                    </a></li>
                  <li><a href="?classid=6600&amp;t=show&amp;id=524">20:00-22:00
                    <p>球类2</p>
                    </a></li>
                </ul>
        <div class="clear"></div>
      </div>
            </div>
    <script type="text/javascript">
        var event_num2='1';
        
        $().ready(function(){
            $("#ser_select_02").mouseenter(function(){
                $(".sec_div").hide(500);
                $("#sec_div_02").show(500);
            })
			
            $(".closed").click(function(){
                $(".sec_div").hide(500);
            })
            
            var click2 = 0;
            var click_num2 = event_num2-8;
            $("#up2").click(function(){
                if(click2 != 0){
                    $("#sec_div_content2 ul").animate({marginTop: '+=42'}, 800);
                    click2--;
                }
            });
        
            $("#down2").click(function(){
                if(click2 != click_num2){
                    $("#sec_div_content2 ul").animate({marginTop: '-=42'}, 800);
                    click2++;
                }
            });
        });
        
    </script>
    <li class="ser_select" id="ser_select_02"> <img src="images/default_photo.jpg"> <span> 11-04
      <p>星期二</p>
      </span> 
              <!--        <dl>
            <dt>
            <div>
                11-04
                <p>星期二</p>
                <a href="javascript:void(0)"  id="ser_select_02">查看>></a>
            </div>
            </dt>
        </dl>--> 
            </li>
    <div class="sec_div left_two" id="sec_div_02">
              <div class="sec_div_title"> <span> 11-04 <b>星期二</b> </span> <a href="javascript:void(0)" class="closed" id="closed_02" style="float:right"><img src="themes/222/template/images/srv_03.jpg"></a> </div>
              <div class="sec_div_content" id="sec_div_content2">
        <ul>
                  <li><a href="?classid=6600&amp;t=show&amp;id=526">15:00-17:00
                    <p>球类1</p>
                    </a></li>
                </ul>
        <div class="clear"></div>
      </div>
            </div>
    <li class="ser_select"> <span style="display: block!important;"> 11-05
      <p>星期三</p>
      </span> </li>
    <li class="ser_select"> <span style="display: block!important;"> 11-06
      <p>星期四</p>
      </span> </li>
    <li class="ser_select"> <span style="display: block!important;"> 11-07
      <p>星期五</p>
      </span> </li>
    <li class="ser_select"> <span style="display: block!important;"> 11-08
      <p>星期六</p>
      </span> </li>
    <li class="ser_select"> <span style="display: block!important;"> 11-09
      <p>星期日</p>
      </span> </li>
    <script type="text/javascript">
        var event_num8='1';
        
        $().ready(function(){
            $("#ser_select_08").mouseenter(function(){
                $(".sec_div").hide(500);
                $("#sec_div_08").show(500);
            })
			
            $(".closed").click(function(){
                $(".sec_div").hide(500);
            })
            
            var click8 = 0;
            var click_num8 = event_num8-8;
            $("#up8").click(function(){
                if(click8 != 0){
                    $("#sec_div_content8 ul").animate({marginTop: '+=42'}, 800);
                    click8--;
                }
            });
        
            $("#down8").click(function(){
                if(click8 != click_num8){
                    $("#sec_div_content8 ul").animate({marginTop: '-=42'}, 800);
                    click8++;
                }
            });
        });
        
    </script> 
  </div>
        </div>
<div class="mask"> <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a> <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a> <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a> </div>
<div class="bg"> <img id="bgImg" class="bg" alt="Background image" src="images/lease_bg.jpg" /> </div>
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
