<?php 

include("do_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
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
        <li ><a class="active" href="index.php">Home</a></li>
        <li class="active"><a  href="add.php">Add</a></li>
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
        <h1 style="height: 45px;background-color: orange;color: white;">About Us</h1>
        <marquee onMouseOver="this.stop()" onMouseOut="this.start()"  behavior="scroll" direction="up">
        <p>"Never doubt that a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has." - Margaret Meade<br><br>

Our endeavor has been to create world class travel and aviation technology solutions. We believe in building strong partnerships with our customers to ensure that we are able to deliver a robust and cost efficient solution to them.<br><br>

Our journey has been an exciting and rewarding one. We pride ourselves in developing innovative travel technology products, from building India`s first retail travel portal Ghumo.com to India`s first web based business travel solution Atyouprice.net, our mission has remained unchanged.<br><br>

We are fortunate to have an opportunity to serve over 230 corporates, travel agencies and airlines across the globe. Today Team Infiniti is spread across four locations in India with over 250 highly motivated and experienced travel technology specialists supporting our vision and customers.<br><br>
</p>
</marquee>
<hr>
<h3 style="color: blue;">Our products</h3><img style="width: 200px;" src="image/bussiness.jpg"> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<img style="height: 150px;" src="image/group_revenue.jpg"><img style="float: right;width: 200px;" src="image/travel_agency_logo.png">
<ul>
  <li>Travel agency automation solution</li>
  <li>Bussiness Travel Management Solution</li>
  <li>Group Revenue Management Solution</li>
  <li>Expense Management Solution</li>
  <li>Airline Forecasting solution</li>
  <li>Airline SME solution</li>
  <li>Airline CRM solution</li>
</ul>

      </div>

</div>

 <!-- <footer class="container-fluid">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
