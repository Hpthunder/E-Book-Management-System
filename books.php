

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

 
 

	<table width="106%" align="center">
<tr>
		<td colspan="13" align="center"><strong>Book  Details</strong></td>
  </tr>
	
	
		    <tr>
          <td width="16" height="21">&nbsp;</td>
          <td width="131"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="154"><div align="center" class="style6"><strong>Book Name</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Authour</strong> </div></td>
		    <td width="153"><div align="center" class="style6"><strong>Eddtion</strong> </div></td>
			 <td width="142"><div align="center" class="style6"><strong>Ssubject</strong> </div></td>
			  <td width="142"><div align="center" class="style6"><strong>Price</strong> </div></td>
			  <td width="142" ><div align="center" class="style6"><strong>Qty</strong> </div></td>
			    <td width="142" ><div align="center" class="style6"><strong>Book</strong> </div></td>
			
            
	    </tr>
		<tr>
		<td height="21" colspan="10">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from books");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>

        <tr>
		 <td height="21">&nbsp;</td>
		  <td><div align="center"><?php echo $row['id'];?></div></td>
		    <td><div align="center"><?php echo $row['name'];?></div></td>
			 <td><div align="center"><?php echo $row['author'];?></div></td>
			  <td><div align="center"><?php echo $row['edition'];?></div></td>
				 <td><div align="center"><?php echo $row['sub'];?></div></td>
				  <td><div align="center"><?php echo $row['price'];?></div></td>
             <td><div align="center"><?php echo $row['qty'];?></div></td>
			  <td><a href="download.php?file=<?php echo $row['file'];?>">Download</a></td>
			 
	
			
        </tr>
		
		
				
        <?php
		$i++;
		}
		
		
		?>
</table>







<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#66004d" scope="col"><p>copyrights & designedby@E-book Store</p>
      </th>
    </tr>
</table>


</body>
</html>
