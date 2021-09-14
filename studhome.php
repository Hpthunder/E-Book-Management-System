<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$reg=$_SESSION['reg'];
	$name=$_REQUEST['name'];
	
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
  </table>  <table width="100%" border="0">
   <tr>
   	<th scope="col"><a href="shome.php">Student Home</a></th>
      <th scope="col"><a href="view.php">Books</a></th>
       <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
  <img src="images\1.png" width="1420" height="400">

 <marquee scrollamount="10"><h1><font color="red">Web Portal For Student Book Store</h1></marquee>








 <table width="56%" height="159" border="0">
  
  
  
  <?php 
  $qry=mysql_query("select * from books where dept='$name'");
  while($row=mysql_fetch_array($qry))
  {
  
  ?>
  
    <tr>
     <td width="21%" rowspan="2" scope="col"><img src="images\<?php echo $row['img'];?>" width="100" height="100"></td>
     <td width="23%" height="57" scope="col">Book Name</td>
     <td width="21%" scope="col"><?php echo $row['name'];?></td>
	<td width="20%"><strong>Authour</strong></td>
     <td width="15%"><?php echo $row['author'];?></td>
     
   
   </tr>
   
   
    <tr>
	   <td height="41"><strong>Edition</strong></td>
     <td><?php echo $row['edition'];?></td>
		<td><strong>Subject</strong></td>
     <td><?php echo $row['sub'];?></td>
	
	
   </tr>
   
   
   
   <tr>
   <td>&nbsp;</td>
     <td><strong>Price</strong></td>
     <td><?php echo $row['price'];?></td>
      <td><strong>Download Book</strong></td>
     <td><a href="download.php?file=<?php echo $row['file'];?>">Download</a></td>
   </tr>
	 
	 
	 <?php
	 
	 
	 }
	 
	 ?>
	 
</table>
<br />
<br />
<br />
<br />
<br />


<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#66004d" scope="col"><p>copyrights & designedby@E-book Store</p>
      </th>
    </tr>
</table>


</body>
</html>
