<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/3 0003
 * Time: 21:42
 */
require'connectvars.php';
$title=$_POST['title'];
$name=$_POST['name'];
$id=$_POST['id'];
$phone=$_POST['phone'];
$type=$_POST['project_type'];
$ptime=$_POST['time'];
$place=$_POST['place'];
$people=$_POST['people'];
$slogen=$_POST['slogen'];
$time=date("Y-m-d H:i:s");
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
if($people == '')
{
    $people = null;
}
if($ptime == '')
{
    $ptime = null;
}
$sql ="INSERT INTO appointment (u_id,y_title,y_label,y_content,y_place,y_num,y_play_time,y_time,y_nownum) VALUES ('$id','$title','$type','$slogen','$place','$people','$ptime','$time',1)";
echo $sql;
$res=mysqli_query($con,$sql);
if(!$res)
echo '<script>alert("Fail");</script>';
$result=mysqli_query($con,"SELECT * FROM appointment WHERE y_title='$title' order by y_id desc");
$row = mysqli_fetch_array($result);
$y_id = $row['y_id'];
$sql ="INSERT INTO yue (y_id,u_id) VALUES ('y_id','$id')";
header("Location:appointment_detail.php?a=$y_id");