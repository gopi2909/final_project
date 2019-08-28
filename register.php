<!DOCTYPE html>
<head>
<title>user login and registration</title>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<center><h1 style="color:coral;font-style:bold;font-family:lucida handwriting">
	Control Management System
</h1></center>
    <div class="container">
	<div class="login-box">
	<div class="row">
	 <div class="col-md-6" login-left>
	 <h2> login here</h2>
      <form action="do_login.php"method="post">
	  <div class="form-group">
	  <label>username</label>
	  <input type="text" name="username" class="form-control" required>
	  </div>
	   <div class="form-group">
	  <label>password</label>
	  <input type="password" name="password" class="form-control" required>
	  </div>
	  <button type="submit" class="btn btn-primary " name="login"> login</button>
</form>
</div>



<div class="col-md-6" login-right>
	 <h2> Register Here</h2>
      <form action="register.php"method="post">
	  
	  
	  
	  <div class="form-group">
	  <fieldset><input type="text" name="name" class="form-control" required placeholder="Name"/></fieldset>
	  </div>
	  
	  <div class="form-group">
	  <label>username</label>
	  <input type="text" name="username" class="form-control" required placeholder="UserName">
	  </div>
	   <div class="form-group">
	  <label>password</label>
	  <input type="password" name="password" class="form-control" required placeholder="password">
	  </div>
	  
	  
	   <div class="form-group">
	  <fieldset><select name="role"><option value="" selected>Select Role</option>
<option value="admin">admin</option>
<option value="General_user">General_user</option></select></fieldset>
</div>
	  
	  
	  
	  <button type="submit" class="btn btn-primary" name="save"> Register</button>

 </form>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL


    $name = $_POST['name'];
	$user_name  =$_POST['username'];
	$pass = $_POST['password'];
	$type = $_POST['role'];
	

if($name !=''||$pass !=''){



$sql = "INSERT INTO multi_user (name,user_name,password,roll)
VALUES ('$name','$user_name','$pass','$type')";

if ($conn->query($sql) === TRUE) {
    echo "Registration created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}}
$conn->close();

?>








</div>
</div>
</div>
</body>
</html>
