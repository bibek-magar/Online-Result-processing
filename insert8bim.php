<?php
	$con=mysqli_connect("localhost","root","","result");
	if(!$con)
	{
		die('Sorry!connection failed'.mysqli_error());
	}
	$roll=$_POST['roll'];
	$name=$_POST['Name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	
	$sql="INSERT INTO BIM8(roll,Name,sub1,sub2,sub3,sub4) VALUES 		('$roll','$name','$sub1','$sub2','$sub3','$sub4')";
	if(mysqli_query($con,$sql))
	{
		echo"<font color='green'>New record created successfully in Bim 8th semester </font>";
	}
	else{
		echo"Error:".$sql."<br>".mysql_error($con);
	}
	mysqli_close($con);
	include("insert8bim.html");
?>