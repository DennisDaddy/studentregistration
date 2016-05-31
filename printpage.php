
<html>
<head>
     
	 <style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {font-size: 12px; font-weight: bold; }
-->
     </style>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
        <body >
               <center><h2>For Printing This Page click This Print Button</h2>
            
                <input type="button" value="     Print Button     " onClick="PrintDiv();" />
            </center><br><br><hr>
			<div id="divToPrint" >
               <div>
         
<?php 
include("connect.php");
$print_page=$_REQUEST['print'];
$query ="SELECT * FROM `data` where `id`='$print_page'";
$data=mysqli_query($con,$query);
while($res=mysqli_fetch_assoc($data))
{
//echo $res['p_y_name'];
//}
//$query=mysql_query($sql)or die(mysql_error());
 //while($res=mysql_fetch_array($query)){
 //if ()
 //{
?>

<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=900,height=600');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
<body>
<table width="1342" height="900" border="0" align="center">
  <tr>
    <td width="1336"><img src="images/logo.png" width="1334" height="129"></td>
  </tr>
  <tr>
    <td><div align="center">Registration Number : <?php echo $res['p_reg_id'];?>&nbsp; &nbsp;</div></td>
  </tr>
  <tr>
    <td height="373"><div align="center">
      <table width="900px" height="" border-top="1" bordercolor="#006633">
        <tr>
          <td width="58%" height="365" valign="top">
              
              <div align="center">
                <table width="800" height="700" border="0" align="left">
                  <tr>
                    <td width="36%" height="20"><blockquote class="style3">
	                    <p>Name :-</p>
                    </blockquote></td>
                    <td width="32%"><span class="style3"><?php echo $res['p_y_name'];?></span></td>
                    <td width="32%" rowspan="9" valign="top"><p><img src="images/<?php echo $res['p_img']?>" width="120" height="128"></p>
                    <p>Student Image </p></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Gender :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_gender'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Date of Birth :- </p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_dob'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Father's Name :- </p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_f_name'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Nationality :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_nationality'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Marital Status :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_m_satus'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="0"><blockquote class="style3">
	                    <p>Address :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_address'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>E-Mail :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_e_mail'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Educational Qualification :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_edu_quali'];?></span></td>
                  </tr>
                </table>
            </div></td>
          </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
<?php } ?>