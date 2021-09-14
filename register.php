<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysql_query("insert into sregister(name,gender,dob,email,phone,dept,year,reg) values('$name','$gender','$dob','$email','$phone','$dept','$year','$reg')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
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







 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" height="541" border="0" align="center">	
	

    <tr>
    
     <td height="40" colspan="2"  align="center" ><div class="style5"><h3>New Student Registation</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="46"><span class="style6">Student Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="40"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="39"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="44">Email Id</td>
      <td><input name="email" type="text" id="email" required/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="42">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required/></td>
     
    </tr>
	
	  <tr>
      
      <td height="41">College Name </td>
      <td><input name="college" type="text" id="college" required/></td>
     
    </tr>
	
	<tr>
     
      <td height="43">Department</td>
      <td><input type="text" name="dept" id="dept" required></td>
     
    </tr>
	
	   <tr>
    
      <td height="42">Year</td>
      <td><input type="text" name="year" id="year" required></td>
      
    </tr>
	
    <tr>
    
      <td height="39">Register Number</td>
      <td><input name="reg" type="text" id="reg" required></td>
     
    </tr>



		 <tr>
    
      <td height="55">Student Address</td>
      <td><textarea name="address"></textarea></td>
     
    </tr>



	<tr>
     
     <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
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
