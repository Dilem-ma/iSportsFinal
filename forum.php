<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>isports-球赛论坛</title>
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
    <div class="reg_right_title" style="position:relative"><b>球赛论坛</b><font>Forum</font><a href="new_theme.php">
            <input onClick="new_theme.php" style="position: absolute; right: 0; top: 11px;" type="button" name="new_topic" id="new_topic" value="新建话题" class="top_btn"/></a></div>
        <div class="newslist">
                <div class="news">
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
                    $result=mysqli_query($con,"SELECT * FROM bbs ORDER BY b_id desc");
                    $count=mysqli_num_rows($result);
                    $per_page_num=4;//每页显示的条目数量
                    $page_num=ceil($count/$per_page_num);//总页数
                    $items=0;
                    for($i=0;$i<$count&&$items<$per_page_num;$i++)
                    {
                        //查找示单项资料的内容，
                        $row = mysqli_fetch_array($result);
                        if($i<($page-1)*$per_page_num)continue;
						$news_num = $row['b_id'];
                        $title = $row['b_title'];
                        $content = $row['b_content'];
						?>
                        <dl class="news_nopic">
                            <dd class="title"><a href="<?php echo "bbs.php?a=".$news_num ?>"><?php echo "$title" ?></a></dd>
                            <dd class="content_detail"><?php echo "$content";?><a href="<?php echo "bbs.php?a=".$news_num ?>"></a></dd>
                        </dl>

                        <?php
                        $items++;
                    }
                    ?>

    </div>
        <div class="pager">当前是：<?php echo $page;?>/<?php echo $page_num;?>共<?php echo $count;?>条信息
            <?php
            if($page==1)
                echo '<span class="">首页</span> <span class="">上一页</span>';
            else {
                ?>
                <a href="news.php">首页</a>
                <a href="?classid=6593&amp;page=<?php echo ($page-1);?>">上一页</a>
                <?php
            }
            ?>
            <?php if($page<$page_num){?>
                <a href="?classid=6593&amp;page=<?php echo ($page+1);?>">下一页</a>
                <?php
            }else {?> 
                <span>下一页</span>
            <?php } ?>
            <?php if($page<$page_num){?> 
                <a href="?classid=6593&amp;page=<?php echo ($page_num);?>">尾页</a>
            <?php }else {?> 
                <span>尾页</span>
            <?php } ?>
            第<select name="PB_Page_Select" onchange="location.href='?classid=6593&amp;page='+this.value">
                <?php for($i=1;$i<=$page_num;$i++){
                    if($i==$page){
                        ?>
                        <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?>
                    <?php }
                    else {
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                    }
                }
                ?>
            </select>页
        </div>
        <div class="clear"></div>
    </div>
</div>
    <div class="mask">
        <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a>
        <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a>
        <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a>
    </div>
<div class="bg">
    <img id="bgImg" class="bg" alt="Background image" src="images/bbs.jpg" />
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
  