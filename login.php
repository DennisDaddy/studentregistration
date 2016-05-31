<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Admin Panel</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style media="all" type="text/css">
@import "css/all.css";
.style3 {font-size: 24px; font-weight: bold; color: #FFFFFF; }
.style4 {color: #FFFFFF}
.style5 {
	font-family: "Comic Sans MS";
	font-size: 36px;
}
</style>
</head>
<body>

	
<form method="post" action="login.php">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="603" height="202" align="center" background="2.jpg" bgcolor="#9966FF">
<tr>
<td width="209" align="right"><div align="center"><img src="admin.png" width="96" height="77"></div></td>
<td width="382" align="center"><h2 align="left" class="style4"> 
<span class="style5">Admin Login</span>

</h2></td>
</tr>
<tr>
<td><div align="center"><span class="style3">User Name</span></div></td>
<td><input type="text" name="user_name" size="30"/></td>
</tr>

<tr>
<td><div align="center"><span class="style3">Password</span></div></td>
<td><input type="password" name="user_pass" size="30"></td>
</tr>
<tr>

<td align="center" colspan="4"><input type="submit" name="login" value="Login"></td>
</tr>
<tr>
</table>


</form>
	
    
</body>
</html>

<?php

include("connect.php");

if(isset($_POST['login'])){



$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];

$login_query="select * from admin_login where
			user_name='$user_name' AND password='$user_pass'";
			
$run = mysqli_query($con,$login_query);

if(mysqli_num_rows($run)>0){


$_SESSION['user_name']= $user_name;

echo "<script>window.open('index.php','_self')</script>";


}

else{
echo "<script>alert('User Name or Password Incorrect')</script>";

}

}
?>
