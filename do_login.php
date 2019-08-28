<?php
session_start();
$con = mysqli_connect('localhost','root','','blog_db');

if(isset($_POST['login']))
{
	$user_name=$_POST['username'];
	$pass=$_POST['password'];
	$q=mysqli_query($con,"select * from multi_user where user_name='$user_name' AND password='$pass'");
	
	$row=mysqli_fetch_array($q);
	$type=$row['roll'];
	//$isexist=mysql_query($con,"select * from multi_user where user_name='$user_name' AND password='$pass'");
	$check_user=mysqli_num_rows($q);
	
	if($check_user == 1)
	{
		$_SESSION["type"]=$row['roll'];
		$_SESSION["user_name"]=$row['user_name'];
		
		
		if($type == "admin")
		{
			echo"<script>window.open('index.php?add=1','_self')</script>";
		}
		else{
			echo"<script>window.open('general_user.php','_self')</script>";
		}
		
		
	}
	else
		
		{

			header("refresh:2; url=login.php");
	        echo"invalid username or password...";
	   
			//echo "invalid username or password";
			//echo"<script>window.open('login.php','_self')</script>";
		}
}







?>