<html>
<head>
    <title>login</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
require_once'connectvars.php';
$con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$STU_ID=$_POST['stu_id'];
$NAME=$_POST['name'];
$INSTITUTE=$_POST['institute'];
$NICK_NAME=$_POST['nick_name'];
$PASSWORD=$_POST['password'];
$PHONE=$_POST['phone'];
$EMAIL=$_POST['email'];
$_HOBBYS=(array)$_POST["intention"];
$HOBBY="";
$HOBBY=implode(',',$_HOBBYS);

$insert = mysqli_query($con,"INSERT INTO user(u_id, u_pwd,u_name, u_nick, u_hobby, u_email, u_phoneno, u_location) VALUES ('$STU_ID','$PASSWORD','$NAME','$NICK_NAME','$HOBBY','$EMAIL','$PHONE','$INSTITUTE')");
if(!$insert)echo "<script>alert('该学号已经被注册，请重新输入你的学号');location.href='regist.php';</script>";
else {
    echo 'success';
    $result = mysqli_query($con,"SELECT * FROM user WHERE u_id='$STU_ID'");
    $row = mysqli_fetch_array($result);
    echo $row['u_id'] . $row['u_pwd'] . $row['u_hobby'].$row['u_nick'].$row['u_email'].$row['u_phoneno'];
    setcookie('username',$STU_ID);
	setcookie('user_name',$NAME);
    setcookie('password',$PASSWORD);
    header("Location:index.php");
}
?>
</body>
</html>