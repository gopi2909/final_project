<!DOCTYPE html>
<html lang="en">
<head>
  <title>update comment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
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
      <!--<h4>Content Management System( Blog )</h4>-->
      <ul class="vertical-menu">
        <li ><a href="index.php">Home</a></li>
        <li ><a  href="add.php">Add</a></li>
        <li><a href="view_comment.php">View</a></li>
        <li ><a class="active" href="#">Update</a></li>
		<li><a href="delete_record.php">Delete</a></li>
      </ul><br>
      <div class="input-group">
        <button class="btn btn-danger" style="border-radius: 10px;width: 150px;"><a href="login.php">logout</a></button>
      </div>
    </div>

    <div class="col-sm-10">
      <center><h1 style="color: orange;">welcome Infiniti Travel Teachnology</h1></center>


<table width="300" class="update_table" border=1 cellpadding=1 cellspacing=1>
<tr><td id="header" align="center" colspan="7"><h1>Update User Comments</h1></td></tr>
    <tr>
    <th>User_Name</th>
    <th>Comments</th>
    <th>Logs</th>
    <th>Title</th>
    <th>Product(Image)</th>
    <th>Pro_des</th>
  <th>Update</th>
    
    </tr>
    <?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'blog_db');
  
  $sql="select * from comments ORDER BY logs DESC";
     $records = mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records))
     {
       echo"<tr><form action= update.php method=post>";
       
       echo"<td><input type=text name=name value='".$row['name']."'></td>";
        echo"<td><input type=text name=comment value='".$row['comment']."'></td>";
       echo"<td><input type=text name=logs value='".$row['logs']."'></td>";
       echo"<td><input type=text name=title value='".$row['title']."'></td>";
        echo"<td><input type=text name=image value='".$row['image']."'></td>";
         echo"<td><input type=text name=product_description value='".$row['product_description']."'></td>";
         echo"<input type=hidden name=name value='".$row['name']."'>";
         
         echo"<td><input type=submit value=Update >";
         echo"</form></td>";
     }
         
    
     ?>

     


</div>

 <!-- <footer class="container-fluid">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
