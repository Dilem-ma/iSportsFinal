<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/10/31 0031
 * Time: 20:48
 */
setcookie('username',$username,time()-3600);
setcookie('password',$password,time()-3600);
setcookie('user_name',$user_name,time()-3600);
header("Location:index.php");