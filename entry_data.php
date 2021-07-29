<?php
 include "dbconnect.php";
$result= mysqli_query($conn,"SELECT *FROM entry");
?>
<!DOCTYPE html>
<html>
<head>
<title> Display all record</title>
</head>
<style>
body{
    background-color:whitesmoke;
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwQvpcqlUy74Mr2ZGGkdPiZ9_xJm7Nu8H5-4lccRMG2iU1tRJQap4VcH7Of6YlrpRM85o&usqp=CAU");
	 height:90%;
	background-size:cover;
    background-position:center;
    font-size:120%;
    font-color:white;	
}
</style>
<body>
<?php
 if(mysqli_num_rows($result)>0)
 {
?>
<table border="solid" align="center">
<caption><h3> Display all record</h3></caption>
<tr>
<th>Id</th>
<th>Date</th>
<th>First Name</th>
<th>Last Name</th>
<th>Incoming time</th>
<th>Outgoing time</th>
</tr>
<?php 
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	 <td><?php echo $row["entry_id"];?></td>
	 <td><?php echo $row["date"];?></td>
	 <td><?php echo $row["firstname"];?></td>
	 <td><?php echo $row["lastname"];?></td>
    <td><?php echo $row["Intime"];?></td>
	 <td><?php echo $row["outtime"];?></td>
	 
 	 </tr>
 <?php
 }
 ?>
 </table>
 <?php
 }
 else
 {
	 echo"No result found";
 }
 ?>
</body>
</html>