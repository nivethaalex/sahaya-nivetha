<?php
 Include config.php");
$link=$db;
//check connection 
if ($link===false){
die(ERROR:could not connect.".mysqli_connect_error());
}
$ name=$_post['user name'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$lang=$_post['language'];
$eml=$_post['email'];
$pwd=$_post['password'];
$rpwd=$_post['repeat password'];
// Attempt insert query execution
$sql="INSERT INTO REGISTER('user name','college name','degree','language','email','password','repeat password');
values($user name,$college name,$degree,$language,$email,$Password,$repeat password);
if(mysqli_query($db.$sql)){
echo"Records added successfully";
}else{
echo"ERROR:could not able to execute $squ.".mysqli_error($link);
}
//close connection
mysqli_close($link);
?>

 
