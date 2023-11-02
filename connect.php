<?php 
$a = $_POST["username"];
$b = $_POST["fullname"];
$c = $_POST["address"];
$d = $_POST["email"];
$e = $_POST["password"];
$f = $_POST["confirmPassword"];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"hariharaan");
if($e === $f){
$sql = ("insert into register(username,fullname,address,email,password) values('$a','$b','$c','$d','$e');");
mysqli_query($con,$sql);
echo "Registered Successfully!";
}
else{
    echo "Please check the password!";
}
include("register.php");
mysqli_close($con);
?>