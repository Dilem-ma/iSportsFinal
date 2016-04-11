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
          <div class="reg_right_title"> <b>相约球场</b> <font>Court</font> <a href="appointment_child.php">
            <input onClick="appointment_child.php" style="position: absolute; right: 400px; top: 134px;" type="button" name="new_appointment" id="new_appointment" value="新建约球" class="top_btn"/>
            </a> </div>
          <div class="ser_right_title usetitle">
    <div id="filter">
              <dl>
        <dt>球类：</dt>
        <dd>
                  <div><a <?php if(!isset($_GET['balltype'])||$_GET['balltype']=="")echo 'class="seled"'?> href="?balltype=&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">全部</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='basketball')echo 'class="seled"'?> href="?balltype=basketball&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">篮球</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='soccer')echo 'class="seled"'?> href="?balltype=soccer&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">足球</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='badminton')echo 'class="seled"'?> href="?balltype=badminton&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">羽毛球</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='tabletennis')echo 'class="seled"'?> href="?balltype=tabletennis&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">乒乓球</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='tennis')echo 'class="seled"'?> href="?balltype=tennis&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">网球</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['balltype'])&&$_GET['balltype']=='volleyball')echo 'class="seled"'?> href="?balltype=volleyball&week=<?php if(isset($_GET['week']))echo $_GET['week'];?>">排球</a></div>
                </dd>
      </dl>
              <dl>
        <dt>时间：</dt>
        <dd>
                  <div style="height:24px;"><a <?php if(!isset($_GET['week'])||$_GET['week']=="")echo 'class="seled"'?>  href="?week=&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">全部</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==1)echo 'class="seled"'?>  href="?week=1&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周一</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==2)echo 'class="seled"'?> href="?week=2&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周二</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==3)echo 'class="seled"'?> href="?week=3&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周三</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==4)echo 'class="seled"'?> href="?week=4&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周四</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==5)echo 'class="seled"'?> href="?week=5&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周五</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==6)echo 'class="seled"'?> href="?week=6&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周六</a></div>
                </dd>
        <dd>
                  <div><a <?php if(isset($_GET['week'])&&$_GET['week']==7)echo 'class="seled"'?> href="?week=7&balltype=<?php if(isset($_GET['balltype']))echo $_GET['balltype']; ?>">周日</a></div>
                </dd>
      </dl>
            </div>
  </div>
          <div class="clear"></div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="usr_table2" style="background:none">
    <thead>
              <tr>
        <td height="35">约球细目</td>
        <td align="right" style="padding-right: 30px;">更新时间</td>
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
        $result;
        if(isset($_GET['balltype'])&&isset($_GET['week'])&&$_GET['balltype']!=""&&$_GET['week']!="")
        {
            $balltype=$_GET['balltype'];
            $week=$_GET['week']+1;
            $result=mysqli_query($con,"SELECT * FROM appointment WHERE y_label='$balltype'AND DAYOFWEEK(y_play_time)='$week' order by y_id desc");
        }
        else if(isset($_GET['balltype'])&&$_GET['balltype']!="")
        {
            $balltype=$_GET['balltype'];
            $result=mysqli_query($con,"SELECT * FROM appointment WHERE y_label='$balltype' order by y_id desc");
        }
        else if (isset($_GET['week'])&&$_GET['week']!="")
        {
            $week=$_GET['week']+1;
            $result=mysqli_query($con,"SELECT * FROM appointment WHERE DAYOFWEEK(y_play_time)='$week' order by y_id desc");
        }
        else
        {
            $result=mysqli_query($con,"SELECT * FROM appointment order by y_id desc ");
        }

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
            <td align="right"><?php echo $time;?></td>
            </tr>
    <tr class="proj_cont" style="display: table-row;">
              <td colspan="3"><table class="tab_cont">
                <tbody>
                  <tr class="tr_hidden tr355">
                      <td class="color999"><?php echo $label;?> <br>
                      球类：<?php echo $label?>&nbsp;&nbsp;| 时间：<?php echo $playtime;?> &nbsp;&nbsp;|&nbsp;&nbsp;地点：<?php echo $place;?>&nbsp;&nbsp;|人数：<?php echo $num;?></td>
                      <?php if($isuse!=1){?>
                      <td align="right"><a href="<?php echo "appointment_detail.php?a=".$id ?>" class="xmdj sc_no" style="left: -50px; background:#ed6f1b">详情</a></td>
                      <?php }else{?>
                      <td align="right" valign="top"><a class="xmdj sc_no" style="left: -50px; background: #CCCCCC">报名已截止</a></td>
                      <?php }?>
                    </tr>
                  <tr class="tr_hidden tr355">
                      <td class="case_info"><?php echo $content;?></td>
                      <td align="center" valign="top">&nbsp;</td>
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
          <div class="pager">当前是：<?php echo $page;?>/<?php echo $page_num;?>共<?php echo $count;?>条信息
    <?php
                if($page==1)
                    echo '<span class="">首页</span> <span class="">上一页</span>';
                else {
                    ?>
    <a href="news.php">首页</a> <a href="?classid=6593&amp;page=<?php echo ($page-1);?>">上一页</a>
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
    第
    <select name="PB_Page_Select" onchange="location.href='?classid=6593&amp;page='+this.value">
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
            </select>
    页 </div>
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
<div class="mask"> <a href="appointment_child.php" class="xmsq" style="left: 0px; background-position: 0px 0px;"></a> <a href="appointment.php" class="xmdj" style="left: -50px; background-position: 0px -59px;"></a> <a href="lease.php" class="hdyy" style="left: 0px; background-position: 0px -118px;"></a> </div>
<div class="copyright"> 
          <script>

    $(function(){
        $("#formSearch").submit(function(){
            var keyword = $(".search_text").val();
            $(this).attr("action","?classid="+6889+"&action=search&keyword="+keyword);
        });
    })

</script>
          <form id="formSearch" name="formSearch" method="post" action="?classid=6889&action=search">
  </form>
          <!--    <div class="search">
        <script language="javascript">

            //搜索功能
            function baidusearch() {
                var word=document.getElementsByName("word")[0].value;
                var link="http://www.baidu.com/s?wd="+word+"+site%3A";
                window.open(link);
            }

        </script>
        <form method="GET" action="http://www.baidu.com/baidu"  target="_blank">
            <input type="hidden" name="q6" value="" id="site_name"/>
            <input name="word" type="text" id="textfield" placeholder="输入搜索内容" class="search_text" />
            <input name="button" type="submit" id="button" value="" class="search_button" />
        </form>
                <input name="" type="text" class="search_text" value="输入搜索内容" /><input name="" type="button" class="search_button" />
    </div>-->
          <div class="clear"></div>
          <p></p>
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
<script type="text/javascript">

var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F63d643d03f1742a92dfcecb4e10aa467' type='text/javascript'%3E%3C/script%3E"));

</script>
</body>
</html>
