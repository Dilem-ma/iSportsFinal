<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>isports-����</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/17
 * Time: 22:24
 */
require_once"connectvars.php";
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$y_id=$_POST['y_id'];
$u_id=$_POST['u_id'];
$result=mysqli_query($con,"INSERT INTO yue(y_id,u_id) VALUES ('$y_id','$u_id')");

if(!$result)
{
    echo '<script>
           alert("你已经报名");
</script>';
}
else {
    $result=mysqli_query($con,"SELECT * FROM appointment WHERE y_id='$y_id'");
    $row=mysqli_fetch_array($result);
    $nownum=$row['y_nownum'];
    $num=$row['y_num'];
    if($nownum>=$num)echo '<script>alert("当前人数已满")</script>';
    else
        $update = mysqli_query($con, "UPDATE appointment SET y_nownum=y_nownum+1 WHERE y_id='$y_id'");
}
echo '<script>self.location="my_sign_up.php"</script>';
//header("Location:my_sign_up.php");
?>
</body>
</html>
