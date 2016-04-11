<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/3 0003
 * Time: 18:46
 */
require_once'connectvars.php';
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$reply=$_POST['reply'];
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
$b_id=$_GET['a'];
$result = mysqli_query($con,"SELECT u_id,u_pwd FROM user WHERE u_id='$username' AND u_pwd='$password'");
$row=mysqli_fetch_array($result);
$time=date("Y-m-d H:i:s");
if(!$row)
{
    echo '<script>alert("用户名或密码错误，请重新登录");</script>';
   setcookie('username',time()-3600);
   setcookie('password',time()-3600);
  header("Location:login.php");
}
//向数据库中插入数据
$bbs_num=$_GET['a'];
$sql = "INSERT INTO commentary (b_id,u_id,c_content,c_time) VALUES('$b_id','$username','$reply','$time')";
$result=mysqli_query($con,$sql);
echo $sql;
if(!$result)
    echo '<script>alert("插入失败")</script>';
else
    header("Location:bbs.php?a=$b_id");
//跳转回原页面