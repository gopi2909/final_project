<!DOCTYPE html>
<html lang="en">
<head>
  <title>view comment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    
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
        <li><a class="active" href="#">View</a></li>
        <li ><a  href="update_comment.php">Update</a></li>
		<li><a href="delete_record.php">Delete</a></li>
      </ul><br>
      <div class="input-group">
        <button class="btn btn-danger" style="border-radius: 10px;width: 150px;"><a href="login.php">logout</a></button>
      </div>
    </div>


    <div class="col-sm-10">
      <center><h1 style="color: orange;">welcome Infiniti Travel Teachnology</h1></center>


<table width="700"  border=1 cellpadding=1 cellspacing=1 id="example">
  <tr align="center">
  <td id="header" colspan="6"><h1>User's Comments</h1></td>
  </tr>
    <tr>
    <th>USER_NAME</th>
    <th>COMMENTS</th>
    <th>LOGS</th>
    <th>TITLE</th>
    <th>PRODUCT(Image)</th>
    <th>PRO_DES</th>
    </tr>
    <?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'blog_db');
  
  $sql="select name,comment,logs,title,image,product_description from comments ORDER BY logs DESC";
  
  if($result=$con->query($sql))
  {
    if($result->num_rows)
    {
      while($row=$result->fetch_object())
      { 
       echo"<tr>";
             echo"<td>". $row->name."</td>";
         echo' ';
         echo"<td>". $row->comment."</td>";
         echo' ';
         echo "<td>".$row->logs."</td>";
         echo ' ';
         echo "<td>".$row->title."</td>";
         echo ' ';
         echo "<td>".$row->image."</td>";
         echo' ';
         echo "<td>".$row->product_description."</td>";
         echo' ';
         echo'<br>';
         
      }
    }
  }
  
    
     ?>
       </table>
     


</div>

 <!-- <footer class="container-fluid">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
