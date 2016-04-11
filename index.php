<!doctype html>
<html>
    <head>
        <meta name=”viewport” content=”width=device-width, initial-scale=1″ />
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

            <div class="right">
            <?php
			//$_COOKIE['password'];
            if(isset($_COOKIE['username'])) {
                echo '<a href="user.php">' . $_COOKIE["username"] . '</a>';
                ?>
                <a href="logout.php">退出</a>
                <?php
            }
            else echo ('<a href="login.php">登录</a><a href="regist.php">注册</a>');
            ?>
            </div>            
            <div class="clear"></div>
        </div>

        <div id="right">
            <div class="news_index">
                <div class="news_flash">
                    <ul>
                        <li class="hover" id="xwhd1"><a href="news.php">校园新闻</a></li>
                    </ul>
                </div>
                <div class="news_list" id="con_xwhd_1" style="display: block;">
				<script type="text/javascript">
				    var w_event='6';              //总数
				    var num_event='2';                  //一栏显示个数
                    var show_width_event='250';         //单框宽度 
                    var roll_time = '5000';               //滚动间隔时间
				
				    $().ready(function (){
					    setInterval(click_right,roll_time);
					    function click_right(){
						    $(".rightbutton6593").click();
					    }
					    var a=Math.ceil(w_event*show_width_event)+'px';
                        $('.event_list6593 #movers-row6593').width(a);
                        var page = 1;
                        var i = num_event;
                        var max_page = parseInt(w_event / num_event);
                        var max_width = -(max_page-1)*show_width_event*num_event;
                        $(".leftbutton6593").click(function(){//            var v_width = $(".event_list6593").width();
					    var v_width = num_event * show_width_event;
                        var len = $("#movers-row6593").find("li").length;
                        var page_count = Math.ceil(len / i);
                        if (page != 1) {
						    $(".event_list6593 #movers-row6593").animate({marginLeft: '+='+v_width}, 1000);
                            page--; 
                        }else{
						    $(".event_list6593 #movers-row6593").animate({marginLeft: max_width }, 1000);
                            page = max_page;
                        }
				    });
				
				    $(".rightbutton6593").click(function(){//            var v_width = $(".event_list6593").width();
                        var v_width = num_event * show_width_event;
                        var len = $("#movers-row6593").find("li").length;
                        var page_count = Math.ceil(len / i);
                        if (page != page_count) {
                            $(".event_list6593 #movers-row6593").animate({marginLeft: '-='+v_width}, 1000);
                            page++;
                        }else{
                            $(".event_list6593 #movers-row6593").animate({marginLeft: 0}, 1000);
                            page = 1;
                        }
                    });
			    })
            </script>
            
            <a class="leftbutton6593 left" id="leftbutton"></a>
            <a class="rightbutton6593 right" id="rightbutton"></a>
            <div class="event_list6593">
                <div id="movers-row6593">
                    <ul id="count1_6593" class="count clearfix">
			        <?php
                        require_once"connectvars.php";

						$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

						if (mysqli_connect_errno($con)){
				            echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$result=mysqli_query($con,"SELECT * FROM announcement WHERE a_id < 7");
			            
						for($i=0;$i<6;$i++){
							
				            $row = mysqli_fetch_array($result);
				            $news_num = $row['a_id'];
				            $title = $row['a_title'];
				            $intro = $row['a_brief_intro'];
				            $img = $row['a_img']; ?>
			                
                            <li>
                                <a class="news_img" href="<?php echo "detail.php?a=".$news_num ?>"><img src="<?php echo "$img" ?>" /></a>
                                <a href="<?php echo "detail.php?a=".$news_num ?>"><?php echo "$title" ?></a>
                                <span><?php  $intro_=str_replace("\n","<br/>",$intro); echo "$intro" ?></span>
                                <a href="<?php echo "detail.php?a=".$news_num ?>" class="more">阅读全文</a>
                            </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>        
        </div>
    </div>
    
    <div class="clear"></div>
        <div class="right_bottom">
            <div class="right_bottom_right left">
                <div class="news_flash notice_title">
                    <ul>
                        <li class="hover" id="xmhd1"><a href="forum.php">球赛论坛</a></li>
                    </ul>
                </div>
                <div class="right_bottom_right_list_two" id="con_xmhd_1">
                    <ul>
                    <?php
					    $result=mysqli_query($con,"SELECT * FROM bbs ORDER BY b_id desc"); 
						$count=mysqli_num_rows($result);
						for($i=0;$i<3;$i++){
							$row = mysqli_fetch_array($result);
							$news_num = $row['b_id'];
							$title = $row['b_title'];
							$content = $row['b_content'];?>
                            
                            <li><a href="<?php echo "bbs.php?a=".$news_num ?>"><p><?php echo "$title" ?></p><?php echo "$content" ?></a></li>
						<?php } ?>
                    </ul>
                    <a href="forum.php" class="more" style="margin-top:30px">查看更多</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mask">
        <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a>
        <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a>
        <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a>
    </div>
    <div class="bg">
        <img id="bgImg" width="100%" height="100%" class="bg" alt="Background image" src="images/index_bg.jpg" />
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
        </div>
    </ul>
</body>
</html>
  