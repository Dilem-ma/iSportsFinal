<html>
<head>
    <title>login</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    require_once'connectvars.php';
    $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');

    $username=$_POST['stu_id'];
    $password=$_POST['login_password'];
	if(!$username){
	    echo "<script>alert('请输入学号');location.href='login.php';</script>";
	}
	if(!$password){
	    echo "<script>alert('请输入密码');location.href='login.php';</script>";
	}

    $result = mysqli_query($con,"SELECT u_id,u_pwd,u_name FROM user WHERE u_id='$username' AND u_pwd='$password'");
    $rows=mysqli_fetch_array($result);
    if($rows)
    {
        //echo $rows['u_id'].$rows['u_pwd'];
        //echo "success";
		setcookie('username',$username);
        setcookie('password',$password);
        setcookie('user_name',$rows['u_name']);
		header("Location:index.php");
    }
	else
	{
		echo "<script>alert('学号或密码错误，请重新输入');location.href='login.php';</script>";
		//header("Location:login.php");
	}
?>
</body>
</html>
