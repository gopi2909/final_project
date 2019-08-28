<?php
$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'blog_db');
	
	$sql="delete from comments where name='$_GET[name]'";
	
	   if(mysqli_query($con,$sql))
	   {
	   header("refresh:1; url=delete_record.php");
	   echo"one record deleted";
	   }
	   else
	   echo" not deleted";
	   
	?> 