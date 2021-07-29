<html >
<head>
<style>
body{
    background-color:whitesmoke;
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://images.prismic.io/accusonus-blog/8be764fb-485c-43cb-bf5f-3a36d74fbc18_Searching.jpg?auto=compress,format&rect=0,265,3999,2399&w=1000&h=600");
	 height:100%;
	background-size:cover;
    background-position:center;
    font-size:120%; 
}
input{
	width:20%;
	height:5%;
	border:1px;
	border-radius:05px;
	padding:10px 0px 15px 0px;
	margin:10px 0px 15px 0px;
	box-shadow:1px 1px 2px 1px grey;
}

@font-face {
    font-family: 'Segoe UI Light';
    src: url('.././font/segoeuil.ttf');
}

body{
    background-color: #c7c7c7;
}

#center{
text-align:center;	
}

.table_margin{
    background-color: #f9f9f9;
}

.table_margin{
    width: 1400px;
    border: 3px solid #9d9898;
}

.btn_pos {
text-align: center;
}

.input_box_pos{
width: 250px;
border: 1px solid black;
float: left;
}

.btn_pos {
margin-right: 500px;
}

.btn_search_pos{
    
}

.panel {
-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
box-shadow: 0 1px 2px rgba(0,0,0,.05);
-webkit-box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
-moz-box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
}
</style>
</head>

<body>
      <center>
        <form method="post" action="">
		  <h1> Search student data</h1>
            <input type="text" name="st_id" placeholder="enter id" /><br>
            <input type="submit"  name="submit" value="Search"/><br>
			
			
	 
			<?php
             include "dbconnect.php";
               if(isset($_POST['submit']))
               {
		         $st_id=$_POST['st_id'];
		
		         $query="SELECT * FROM registration where st_id='$st_id' ";
		         $query_run=mysqli_query($conn,$query);
		
		     while($row=mysqli_fetch_array($query_run)){
			 ?>
			  <form action="" method="post">

			    <input type="text" name="st_id" value="<?php echo $row['st_id']?>"/>
				<input type="text" name="fname" value="<?php echo $row['fname']?>"/>
				<input type="text" name="mname" value="<?php echo $row['mname']?>"/>
				<input type="text" name="lname" value="<?php echo $row['lname']?>"/>
				<input type="text" name="DOB" value="<?php echo $row['DOB']?>"/>
				<input type="text" name="Mnum" value="<?php echo $row['Mnum']?>"/>
				<input type="text" name="gender" value="<?php echo $row['gender']?>"/>
				<input type="text" name="address" value="<?php echo $row['address']?>"/>
				<input type="text" name="state" value="<?php echo $row['state']?>"/>
				<input type="text" name="city" value="<?php echo $row['city']?>"/>
				<input type="text" name="country" value="<?php echo $row['country']?>"/>
				<input type="text" name="course" value="<?php echo $row['course']?>"/>
			  </form>
			<?php
			
		}
	}	
?>

        </form>
	  </center>
   
</body>
</html>
