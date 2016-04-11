<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/3 0003
 * Time: 20:43
 */
require_once"connectvars.php";
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
$username=$_COOKIE['username'];
$time=date("Y-m-d H:i:s");
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$title= $_POST['title'];
$content=$_POST['content'];
$result=mysqli_query($con,"INSERT INTO bbs (u_id,b_title,b_content,b_time) VALUES ('$username','$title','$content','$time')");
if(!$result)
    echo '<script> alert("Fail");</script>';
header("Location:forum.php");