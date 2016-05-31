<?php
include("connect.php");

$delete_page=$_GET['del_page'];

$query="delete from data where id='$delete_page'";

if(mysqli_query($con,$query))

{

echo "<script>window.open('displaypage.php?deleted=A Page has been deleted.....!','_self')</script>";


}
else
{
echo "not deleted this page";

}
?>

