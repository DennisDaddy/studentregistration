<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
?>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<html><head><title>SearchPage</title></head>
<table width="1000" border="0" align="center" bordercolor="#E4D7AB">
  <tr>
    <td><?php include('header.php');?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2 align="center" class="style1">Search By Name And Registration No. </h2></td>
  </tr>
  <tr>
    <td>
	
<form id="form1" name="form1" method="post" action="">
	      <div align="center"> <br />
	        <input name="search" type="text" value="" size="35" placeholder="Enter Name or Registration No............" />
	        </p>
	        <br />      
  </div>
	        
	          <label>
  </div>
	      <div align="center">
	       <input type="submit" name="submit" value="Search By Name " />
  </div>
	    </label>
</form>	</td>
  </tr>
</table>



	  



<?php
include("connect.php");
$output='';
//collect
if(isset($_POST['search'])) {
                 $searchq=$_POST['search'];
				 $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
 
 $query="SELECT * FROM data WHERE p_y_name LIKE '%$searchq%' or p_reg_id LIKE '%$searchq%'" or die("could not search !");
 mysqli_query($con,$query);
 $count =mysqli_num_rows($query);
 if ($count==0){
 $output = 'There was No Search Result' ;
 }
 else{
       while($row = mysqli_fetch_array($query)) {
	   $no1=$row['0'];
	   $no2=$row['1'];
	   $no3=$row['2'];
	   $no4=$row['3'];
	   $no5=$row['4'];
	   $no6=$row['9'];
	   $no7=$row['12'];
	   $no8=$row['15'];
	   $no9=$row['14'];
	   $output .='<table width="1000" border="1" align="center">
  <tr>
    <td width="3%"><span class="style1">ID</span></td>
    <td width="6%"><span class="style1">Name</span></td>
    <td width="8%"><span class="style1">Gender</span></td>
    <td width="12%"><span class="style1">Date Of Birth</span></td>
    <td width="15%"><span class="style1">Father Name</span></td>
    <td width="13%"><span class="style1">Mobile</span></td>
    <td width="8%"><span class="style1">Reg. No</span></td>
    <td width="8%"><span class="style1">Roll No.</span></td>
    <td width="9%"><span class="style1">Certificate No.</span></td>
   
  </tr>
 
  <tr>
    <td>'.$no1.'</td>
    <td>'.$no2.'</td>
    <td>'.$no3.'</td>
    <td>'.$no4.'</td>
    <td>'.$no5.'</td>
    <td>'.$no6.'</td>
    <td>'.$no7.'</td>
    <td>'.$no8.'</td>
    <td>'.$no9.'</td>
    
  </tr>
 
</table><br><br>';
	   
	   }
 
 }
}

?><br />
<?php echo($output); } ?>
		
		