<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
?>
<?php 
include("connect.php");
$sql="SELECT * FROM data";

$query=mysqli_query($con,$sql)or die(mysql_error());

?>
<html>
<style type="text/css">
<!--
.style1 {
	color: #333399;
	font-weight: bold;
}
a:link {
	color: #009900;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #FFFF00;
}
a {
	font-weight: bold;
}
-->
</style>
<body>
<h2 align='center'><?php echo @$_GET['deleted']; ?></h2>
<form method="" action="displaypage.php">
<table width="1000" border="1" align="center">

  <tr>
    <td><?php include('header.php');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" bgcolor="#FFFFFF">
      <tr>
        <td bgcolor="#9966CC"><span class="style1">ID</span></td>
        <td bgcolor="#9966CC"><span class="style1">Name</span></td>
        <td bgcolor="#9966CC"><span class="style1">Gender</span></td>
        <td bgcolor="#9966CC"><span class="style1">Date Of Birth</span></td>
        <td bgcolor="#9966CC"><span class="style1">Father Name</span></td>
        <td bgcolor="#9966CC"><span class="style1">Reg. No</span></td>
        <td bgcolor="#9966CC"><span class="style1">Roll No.</span></td>
        <td bgcolor="#9966CC"><span class="style1">Print</span></td>
        <td bgcolor="#9966CC"><span class="style1">Delete</span></td>
      </tr>
	    <?php while($row=mysqli_fetch_array($query)){?>
      <tr bgcolor="#FFCCFF">
        <td><?php echo $row['0']?></td>
        <td><?php echo $row['1']?></td>
        <td><?php echo $row['2']?></td>
        <td><?php echo $row['3']?></td>
        <td><?php echo $row['4']?></td>
        <td><?php echo $row['14']?></td>
        <td><?php echo $row['15']?></td>
        <td><a href="printpage.php?print=<?php echo$row['0'];?>";>Print Now</a></td>
        <td><a href='delete_page.php?del_page=<?php echo $row['0']; ?>'>Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
<?php } ?>