<?php
$con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'blog_db');
  
  $sql="update comments set name='$_POST[name]',comment='$_POST[comment]',logs='$_POST[logs]',title='$_POST[title]',image='$_POST[image]' where name='$_POST[name]'";
  
     if(mysqli_query($con,$sql))
     {
     header("refresh:1; url=update_comment.php");
     echo"one comment updated";
     
    
     }
     else
     echo" not update";
     
  ?>