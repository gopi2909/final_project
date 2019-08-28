<?php 

include("do_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>add </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="bootstrap/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/add_style.css">

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
        <li class="active"><a class="active" href="#">Add</a></li>
        <li><a href="view_comment.php">View</a></li>
        <li><a href="update_comment.php">Update</a></li>
		<li><a href="delete_record.php">Delete</a></li>
      </ul><br>
      <div class="input-group">
        <button class="btn btn-danger" style="border-radius: 10px;width: 150px;"><a href="login.php">logout</a></button>
      </div>
    </div>


    <div class="col-sm-10">
      <center><h1 style="color: orange;">welcome Infiniti Travel Teachnology</h1></center>

<div>
  <center>
<fieldset id="user_login" >
  <legend>Publish About Infiniti</legend>
  <form method="post" action="add.php" autocomplete="off" enctype="multipart/form-data">
    <table id="user_table">
      <tr>
        <td>user name</td>
        <td><input type="text" name="name" required></td>
          
      
      </tr>
      <tr>
        <td>Comment</td>
        <td><textarea name="comment" required></textarea></td>
      </tr>
      <tr>
        <td>Title</td>
        <td><input type="text" name="title" required></td>
      </tr>
      
      <tr>
        <br>
        <td>product Upload</td>
        <td><input type="file" name="image"></td>
      </tr>

<tr>
        <br>
        <td>product Description</td>
        <td><textarea name="product_description" ></textarea></td>
      </tr>

      <tr>
        <td colspan="2"><input type="submit" class="btn btn-info" name="submit" id="sbtn" value="post comment"></td>
      </tr>
    </table>
  </form>
</fieldset></center>

<hr><hr>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $comment=$_POST["comment"];
    $title=$_POST["title"];
    $product_description=$_POST["product_description"];
    $image=$_POST["image"];

    //if(getimagesize($_FILES['image']['tmp_name'])==true)
    //{
      //$image=$_FILES['image']['tmp_name'];
      
     // $image=file_get_contents($image);
      //$image=base64_encode($image);
    
    

    
    $sql="insert into comments(name,comment,logs,title,product_description,image)values('$name','$comment',NOW(),'$title','$product_description','$image')";
    $conn->query($sql);
}

$sql="select * from comments ORDER BY logs DESC";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while ($row=$result->fetch_assoc()) {
    echo"<p><h5>Upload by :<b style='color:lime;'>{$row["name"]}</b> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <i style='color:orange;'>{$row["logs"]}</i></p>
     <p><h5>Title :<b style='color:solid;'>{$row["title"]}</b></p>
    <p><h5>comment :<b style='color:solid;'>{$row["comment"]}</b></p>
     
    <p><h5>About product :<b style='color:solid;'>{$row["product_description"]}</b>
      <hr>";
  }

}
else
{
  echo " <p> no comments yet";
}
?>
</div>
</div>

 <!-- <footer class="container-fluid">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
