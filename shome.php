<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$reg=$_SESSION['reg'];
	
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
  
  <tr>
  
  <?php 
  $qry=mysql_query("select * from dept");
  while($row=mysql_fetch_array($qry))
  {
  
  ?>
  
    
     <td width="21%" rowspan="2" scope="col"><a href="studhome.php?name=<?php echo $row['name'];?>"><strong><?php echo $row['name'];?></a></strong></td>
   
   
   
    
	 <?php
	 
	 
	 }
	 
	 ?>
	 
	 
	 </tr>
	 
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
