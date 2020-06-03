<?php

$con = mysqli_connect('localhost','root');
 if($con){
   echo "Connection successful";
 }
 else
  {
   echo "no connection";
 }
 mysqli_select_db($con,'computerworlddata');
  $user=" ";
  $email =" ";
  $mobile=" ";
  $comments=" ";
if( isset($_POST['user'])){
   $user= $_POST['user'];
}
if(isset($_POST['email'])){


   $email= $_POST['email'];
}
 if(isset($_POST['comments'])){
    $comment= $_POST['comments'];
  }
   if(isset($_POST['mobile'])){
     $mobile= $_POST['mobile'];
   }
    $query = "insert into userinfodata (user,email,mobile,comment)
    values('$user','$email','$mobile','$comments')";
    mysqli_query($con,$query);
 ?>
