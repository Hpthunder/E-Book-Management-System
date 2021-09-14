

<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{



	$imgpath=$_FILES['file']['name'];
	  $errors= array();
      $fname = $_FILES['file']['name'];
     $file_tmp =$_FILES['file']['tmp_name'];
	 
	 	$imgpat=$_FILES['img']['name'];
	  $error= array();
      $img= $_FILES['img']['name'];
     $img_tmp =$_FILES['img']['tmp_name'];
     

  move_uploaded_file($_FILES['file']['tmp_name'],"books/".$fname);
  move_uploaded_file($_FILES['img']['tmp_name'],"images/".$img);
	
	
	$max_qry = mysql_query("select max(id) from books");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into books  values('$id','$name','$dept','$au','$edi','$sub','$price','$qty','$img','$fname')");
	if($qry)
	{
	
	echo "<script>alert('Entered sucessfully')</script>";
	
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

 
 
 <form id="f1" name="f1" method="post" action="#"  enctype="multipart/form-data">
  <table width="38%" height="372" border="0" align="center">	
	

    <tr>
    
     <td colspan="2"  align="center" ><div class="style5"><h3>Add Book Details</h></div></td>
      
    </tr>
	
    <tr>
    
      <td width="43%" height="48">Book Name</span></td>
      <td width="57%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
	
	
	
	<tr>
     
      <td>Department</td>
      <td>
        <select name="dept">
		<option value="">Select</option>
		<?php
		
		$qt=mysql_query("select * from dept");
		while($rw=mysql_fetch_array($qt))
		{
		?>
		<option value="<?php echo $rw['name'];?>"><?php echo $rw['name'];?></option>
		
		<?php
		
		
		}
		
		
		?></select>
      
	  </td>
     
    </tr>
	
	
     <tr>
     
      <td height="46">Authour</span></td>
      <td><label>
        <input name="au" type="text" id="au" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="47">Edition</td>
      <td><input name="edi" type="text" id="edi" required/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="45">Subject Name </td>
      <td><input name="sub" type="text" id="sub" required/></td>
     
    </tr>
	
	
	
	 <tr>
      
      <td height="49">Price</td>
      <td><input name="price" type="text" id="price" required/></td>
     
    </tr>
	
	
	 <tr>
      
      <td height="47">Quantity</td>
      <td><input name="qty" type="text" id="qty" required/></td>
     
    </tr>
	
	
	
	
	 <tr>
      
      <td height="47">Book Image</td>
      <td><input name="img" type="file" id="img" required/></td>
     
    </tr>
	
	
	
	
	<tr>
      
      <td height="47">Book File</td>
      <td><input name="file" type="file" id="file" required/></td>
     
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
