<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
	
	
	
	$max_qry = mysql_query("select max(id) from dept");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	$qry=mysql_query("insert into dept values('$id','$name')");
	if($qry)
	{
	echo "<script>alert('insert sucessfully')</script>";
	
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
       <th scope="col"><a href="adminhome.php">Admin Home</a></th>
	   <th scope="col"><a href="add.php">Add Categry</a></th>
      <th scope="col"><a href="books.php">View Books</a></th>
      <th scope="col"><a href="views.php">View Students</a></th>
	  <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
  <img src="images\1.png" width="1420" height="400">

 




<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" height="183" border="0" align="center">	
	

    <tr>
    
     <td height="38" colspan="2"  align="center" ><div class="style5"><h3>Add Department</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="51"><span class="style6">Department Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
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
