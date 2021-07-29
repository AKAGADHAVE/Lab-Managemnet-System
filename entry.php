<?php
    session_start();
	include "dbconnect.php";
	
	if(isset($_POST['save']))
    {
	$date=$_POST['date'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
	$Intime=$_POST['Intime'];
	$outtime=$_POST['outtime'];
	
	
	$query = mysqli_query($conn,"insert into entry(date, firstname, lastname, Intime,outtime) values('".$date."','".$firstname."','".$lastname."','".$Intime."','".$outtime."')");
   
   $run=mysqli_query($conn,$query);
   if($run){
	   echo"record submited";
   }
   else{
	   echo"";
   }
 }
?>

<!DOCTYPE html>
<html>
<style>
body{
    background-color:whitesmoke;
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrgogx9kXzknUJxDbHNJxZCc1LIkG8YL2hLA&usqp=CAU");
	 height:90%;
	background-size:cover;
    background-position:center;
    font-size:120%;
    font-color:white;	
}

</style>
<body>
<form align="center" method="post" action="" border="solid" position="center">
<table border="solid" align="center" width="40%" >
<marquee><h1> Student Entry</h1></marquee><br>

<tr>
<td><label>Date:<label></td>
<td><input type="date" name="date"></td>
</tr>

<tr>
<td><label> Firstname:<label></td>
<td><input type="text" name="firstname"></td>
</tr>

<tr>
<td> <label>Lastname:<label></td>
<td><input type="text" name="lastname"></td>
</tr>

<tr>
<td> <label>Incoming time:<label></td>
<td><input type="time" name="Intime" maxlength="10"></td>
</tr>

<tr>
<td> <label>Outgoing time:<label></td>
<td><input type="time" name="outtime"></td>
</tr>

</table>

<td><input type="submit" name="save" value="Submit">
<input type="reset" name="rest" value="Rest"></a>




</form>
 </body>
 </html>
