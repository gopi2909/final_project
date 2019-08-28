<!DOCTYPE html>
<html lang="en">
<head>
  <title>delete record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/update_style.css">

</head>
<body>


<div class="jumbotron" >
  <img style="float: left;border-radius: 5px;height:100px; border-top: 0px;" src="image/infiniti_logo.jpg">
  <div class="container text-center">
  <h1 style="color:blue;font-family:lucida handwriting;font-size:50px">Content Management System</h1> 
    <!--<i class="fa fa-user-md" style="font-size:150px;color:red"></i>-->      
  </div>
</div>



<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
      <ul class="vertical-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="view_comment.php">View</a></li>
        <li><a href="update_comment.php">Update</a></li>
		<li class="active"><a class="active" href="">Delete</a></li>
      </ul><br>
      <div class="input-group">
        <button class="btn btn-danger" style="border-radius: 10px;width: 150px;"><a href="login.php">logout</a></button>
      </div>
    </div>


    <div class="col-sm-10">
      

<table border=1 cellpadding=1 cellspacing=1>
<tr><td id="header" align="center" colspan="7"><h1>Delete Comments</h1></td></tr>

    <tr>
    <th>name</th>
    <th>comment</th>
    <th>logs</th>
    <th>Title</th>
    <th>image</th>
    <th>pro_des</th>
    <th>DROP</th>
    </tr>
    <?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'blog_db');
  
  $sql="select * from comments ORDER BY logs DESC";
     $records = mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records))
     {
       echo"<tr>";
       echo"<td>".$row['name']."</td>";
       echo"<td>".$row['comment']."</td>";
       echo"<td>".$row['logs']."</td>";
      echo"<td>".$row['title']."</td>";

       echo"<td>".$row['image']."</td>";
      echo"<td>".$row['product_description']."</td>";

       
       echo"<td><a href=delete.php?name=".$row['name']." >Delete</a></td>";
     }
     ?>



</div>

<!--<footer class="container-fluid">
  <p>Footer Text</p>
</footer>-->

</body>
</html>
