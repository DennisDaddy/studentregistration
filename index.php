<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
?>
<?php //echo $dataofpage ; ?>
<html>

<body bgcolor="" >
<form name="iksk" method="post" action="" enctype="multipart/form-data">
  

    <tr>
      
          <td width="74%" valign="top"><table width="739" height="895" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000033" bgcolor="#FFFFFF">
            <tr height="">
              <td height="auto" colspan="6" align="center" bordercolor="#CC0000" bgcolor=""><?php include('header.php');?></td>
            </tr>
            <tr>
              <td align="right" height="44">
			  <div align="center" class="style5 style15"><strong>Name</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="y_name" type="text" size="50" placeholder="Enter Name......" />
		          <br>
                </div></td>
            </tr>
			
            <tr>
              <td height="39" align="right">
			  <div align="center" class="style5 style15"><strong>Gender </strong></div></td>
              <td>
			    
		        <div align="left">
		          <label>
		          <select name="gender">
		            <option>Male</option>
		            <option>Female</option>
	              </select>
		          </label>
		        </div></td>
            </tr>
            
            <tr>
              <td height="33" align="right">
			  <div align="center" class="style5 style15"><strong>Date of Birth </strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="dob" type="date" size="50" placeholder="Enter date of birth ......" />
                </div></td>
            </tr>
            <tr>
              <td height="32" align="right">
			  <div align="center" class="style5 style15"><strong>Father's Name</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="f_name" type="text" size="50" placeholder="Enter Father's Name......" />
                </div></td>
            </tr>
            <tr>
              <td height="33" align="right">
			  <div align="center" class="style5 style15"><strong>Nationality</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="nationality" type="text" size="50" placeholder="Enter the Nationality......" />
                </div></td>
            </tr>
			<tr>
              <td height="34" align="right">
			  <div align="center" class="style5 style15"><strong>Marital status</strong></div></td>
              <td>
			    
		        <div align="left">
		          <label>
		          <select name="m_satus">
		            <option>Married</option>
		            <option>Unmarried</option>
	              </select>
		          </label>
		        </div></td>
            </tr>
			<tr>
              <td height="35" align="right">
			  <div align="center" class="style5 style15"><strong>Address</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="address" type="text" size="50" placeholder="Enter Address......" />
                </div></td>
            </tr>
			<tr>
              <td height="31" align="right">
			  <div align="center" class="style5 style15"><strong>E-mail</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="e_mail" type="text" size="50" placeholder="Enter e_mail......" />
                </div></td>
            </tr>
			<tr>
              <td height="35" align="right">
			  <div align="center" class="style5 style15"><strong>Mobile Number </strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="a_r_claimed" type="text" size="50" placeholder="Enter Mobile Number......" />
                </div></td>
            </tr>
			<tr>
              <td height="32" align="right">
			  <div align="center" class="style5 style15"><strong>Educational Qualification</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="edu_quali" type="text" size="50" placeholder="Enter Education qualification....." />
                </div></td>
            </tr>
			<tr>
              <td height="32" align="right">
			  <div align="center" class="style5 style15"><strong>Upload Image</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="image" type="file" size="50"/>
                </div></td>
            </tr>
			<tr>
              <td height="30" align="right">
			  <div align="center" class="style5 style15"><strong>Registraation-id</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="reg_id" type="text" size="50" placeholder="Enter regstration-id......" />
                </div></td>
            </tr>
			<tr>
              <td height="34" align="right">
			  <div align="center" class="style5 style15"><strong>Registration Date</strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="tra_date" type="date" size="50" placeholder="Enter Registration Date......" />
                </div></td>
            </tr>
			<tr>
              <td height="30" align="right">
			  <div align="center" class="style5 style15"><strong>Certificate Number </strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="fee_paid" type="text" size="50" placeholder="Enter Certificate Number......" />
                </div></td>
            </tr>
			<tr>
              <td height="32" align="right">
			  <div align="center" class="style5 style15"><strong>Roll Number </strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="agency" type="text" size="50" placeholder="Enter Roll Number......" />
                </div></td>
            </tr>
			<tr>
              <td height="34" align="right">
			  <div align="center" class="style5 style15"><strong>Deate of issue </strong></div></td>
              <td>
			    
		        <div align="left">
		          <input name="m_payment" type="date" size="50" placeholder="Enter Date of issue......" />
                </div></td>
            </tr>
			
			<tr>
              <td align="center" colspan="6"><input type="submit" name="submit"  value="Published Now"></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  
</form>



</body>
</html>


<?php
include("connect.php");
if(isset($_POST['submit']))
{
$post_y_name=$_POST['y_name'];
$post_gender=$_POST['gender'];
$post_dob=$_POST['dob'];
$post_f_name=$_POST['f_name'];
$post_nationality=$_POST['nationality'];
$post_m_satus=$_POST['m_satus'];
$post_address=$_POST['address'];
$post_e_mail=$_POST['e_mail'];
$post_a_r_claimed=$_POST['a_r_claimed'];
$post_edu_quali=$_POST['edu_quali'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];

$post_reg_id=$_POST['reg_id'];
$post_tra_date=$_POST['tra_date'];
$post_fee_paid=$_POST['fee_paid'];
$post_agency=$_POST['agency'];
$post_m_payment=$_POST['m_payment'];

if($post_y_name=='' or $post_gender=='' or $post_dob=='' or $post_f_name=='' )
{
 echo "<script>alert('Any of the fields is Empty ')</script>";
 
}
else
{
if($image_type=="image/jpeg" or $image_type=="image/png"
 or $image_type="image/gif")
 {
	if($image_size<=500000)
	{
		move_uploaded_file($image_tmp,"images/$image_name");
	}
	else
	{
	echo "<script>alert('Image is larger, only 50kb size is allowed')</script>";
	
	}
 }
 else
 {
 echo "<script>alert('image type is invalid')</script>";
 }

$query= "insert into data
(p_y_name,p_gender,p_dob,p_f_name,p_nationality,p_m_satus,p_address,p_e_mail,p_a_r_claimed,p_edu_quali,p_img,p_reg_id,p_tra_date,p_fee_paid,p_agency,p_m_payment)
values('$post_y_name','$post_gender','$post_dob','$post_f_name','$post_nationality','$post_m_satus','$post_address','$post_e_mail','$post_a_r_claimed','$post_edu_quali','$image_name','$post_reg_id','$post_tra_date','$post_fee_paid','$post_agency','$post_m_payment')";
if(mysql_query($query))
 {
echo  "<script>alert('All Post And Image has been send in database')</script>";
 }
 else
 {
 echo "<script>alert('All Post And Image has Not been send in database')</script>";
 }
}


}
}
?>