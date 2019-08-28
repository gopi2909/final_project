<html lang="en-US">
<head>
<meta charset="utf-8">
<title> multi_login page design</title>
<link rel="stylesheet" href="fontawesome.min.css">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/multi_login.css">

    <script src="bootstrap.min.js"></script>
</head>

<body style="background-color:lightgray">
      

      <hr>  
  <center><h1 style="color:blue;font-family:lucida handwriting;font-size:70px;height: 150px">Content Managemant System</h1><br><h3 style="color: orange;font-size:40px;">Infiniti Travel Teachnology</h3> </center>
  <hr>
    <!--<i class="fa fa-user-md" style="font-size:150px;color:red"></i> --> 
    <div class="container text-left">
        	<div class="row content">
    <div class="col-sm-5 sidenav">

    <img src="image/infiniti.png" class="infi_img" width="600px" height="300px">   
  </div>


	 
     <div id="login">
	 <form name='form-login' action="do_login.php" method="POST">
	 <h3 style="background-color:rosybrown;color:white;font-size:33px;border-radius: 20px; font-style:bold"><i> Login</i></h3>
	 <input type="text" id="user" name="username" placeholder="username">
	 <input type="password" id="pass" name="password" placeholder="password">
	 <input class="btn btn-primary" type="submit" value="Signin" name="login">
	 
	<!-- <h6>forget password ?</h6>-->
	 </form>
	 </body>
	 </html>