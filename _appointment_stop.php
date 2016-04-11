<?php
/**
 * Created by PhpStorm.
 * User: zjn20
 * Date: 2015/11/3 0003
 * Time: 21:42
 */
 require'connectvars.php';
 $id=$_GET['a'];
 $con=mysqli_connect($mysql_servername,$mysql_username,$mysql_password,'isports_db');
 $sql = "UPDATE appointment SET y_isuse = b'1' WHERE y_id = $id";
 echo $sql;
 $res=mysqli_query($con,$sql);
 if(!$res)
 echo '<script>alert("Fail");</script>';
 header("Location:my_start.php");
 ?>