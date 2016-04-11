<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/3 0003
 * Time: 23:10
 */
require_once'connectvars.php';
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$old_pwd=$_POST['old_pwd'];
$password=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_COOKIE['username'];
mysqli_query($con,"UPDATE user SET u_pwd='$password',u_phoneno='$phone',u_email='$email' WHERE u_pwd='$old_pwd'");
header("Location:user.php");
