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
		  <h1> Teacher student data</h1>
            <input type="text" name="techer_id" placeholder="enter id" /><br>
            <input type="submit"  name="submit" value="Search"/><br>
			
			
	 
			<?php
             include "dbconnect.php";
               if(isset($_POST['submit']))
               {
		         $techer_id=$_POST['techer_id'];
		
		         $query="SELECT * FROM teacher_reg where techer_id='techer_id' ";
		         $query_run=mysqli_query($conn,$query);
		
		     while($row=mysqli_fetch_array($query_run)){
			 ?>
			  <form action="" method="post">

			    <input type="text" name="techer_id" value="<?php echo $row['techer_id']?>"/>
				<input type="text" name="f_name" value="<?php echo $row['f_name']?>"/>
				<input type="text" name="m_name" value="<?php echo $row['m_name']?>"/>
				<input type="text" name="l_name" value="<?php echo $row['l_name']?>"/>
				<input type="text" name="Date" value="<?php echo $row['Date']?>"/>
				<input type="text" name="M_um" value="<?php echo $row['M_um']?>"/>
				<input type="text" name="te_gender" value="<?php echo $row['te_gender']?>"/>
				<input type="text" name="te_address" value="<?php echo $row['te_address']?>"/>
				<input type="text" name="te_state" value="<?php echo $row['te_state']?>"/>
				<input type="text" name="te_city" value="<?php echo $row['te_city']?>"/>
				<input type="text" name="te_country" value="<?php echo $row['te_country']?>"/>
				<input type="text" name="sub" value="<?php echo $row['sub']?>"/>
			  </form>
			<?php
			
		}
	}	
?>

        </form>
	  </center>
   
</body>
</html>
