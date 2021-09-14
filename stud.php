<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysql_query("select * from sregister where name='$uname' && reg='$password'");
$num=mysql_num_rows($qry);
if($num==1)
{
$qry1=mysql_query("select * from sregister where name='$uname' && reg='$password'");
$row=mysql_fetch_assoc($qry1);
$_SESSION['reg']=$row['reg'];
?>
<script>alert('welcome to Student home page');
</script>
<?php

header("location:shome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?> 

<!DOCTYPE HTML>
<html>
<head>
  <title>E-book Store</title>
  <meta name="description" content="website description" />

</head>
<body>
  <table width="100%" border="0">
    <tr>
     <th height="73" bgcolor="#66004d" scope="col"><h1>Student E-Book Store Management System</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
   <tr>
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
      <th scope="col"><a href="stud.php">Student Login</a></th>
           <th scope="col"><a href="#">About Us </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
  <img src="images\1.png" width="1420" height="400">

 <marquee scrollamount="10"><h1><font color="red">Web Portal For Student Book Store</h1></marquee>




<form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Student Login</font> </div></td>
		 </tr>
			<tr>
		<td width="41%">&nbsp;</td>
		    <td width="38%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>Student Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Register Number</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		 <tr>
           <td>&nbsp;</td>
           <td width="21%" rowspan="2" align="center"> <a href="register.php">Student Register</a>
             <label>
            
           </label></td>
         </tr>
		 
  </table>
</form>



<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#66004d" scope="col"><p>copyrights & designedby@E-book Store</p>
      </th>
    </tr>
</table>


</body>
</html>
