

<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

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

 
 				<h3 align="center"> Student Details</h3>

		<table width="100%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="6%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Student Reg</strong> </div></td>
		    <td width="12%"><div align="center" class="style6"><strong>Student Name</strong> </div></td>
			 <td width="11%"><div align="center" class="style6"><strong>Department</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Year</strong> </div></td>
		    <td width="14%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			 <td width="16%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
	        </tr>
		<tr>
		<td colspan="7">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from sregister");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
	
	      <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['reg'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
			 <td><div align="center"><?php echo $row['dept'];?></div></td>
			   <td><div align="center"><?php echo $row['year'];?></div></td>
			    <td><div align="center"><?php echo $row['email'];?></div></td>
			  <td><div align="center"><?php echo $row['phone'];?></div></td>
			  	 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				
				
				<tr>
		<td colspan="7" align="center">&nbsp;</td>
		</tr>
		
</table>







<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#66004d" scope="col"><p>copyrights & designedby@E-book Store</p>
      </th>
    </tr>
</table>


</body>
</html>
