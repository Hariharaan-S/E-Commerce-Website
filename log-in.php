<?php 
$a = $_POST["username"];
$e = $_POST["password"];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"hariharaan");
if(!empty($a) && !empty($e)){
    $sql = ("select * from register where username = '$a' and password = '$e'");
    $result = mysqli_query($con,$sql);
    if($result){
        if($result && mysqli_num_rows($result)>0){
            $userdata = mysqli_fetch_assoc($result);
            if($userdata['password'] === $e){
                $_SESSION['user_id'] = $userdata['user_id'];
                header("location:home.php");
                die;
            }
        }
    }
    echo "wrong username or password";
}
else{
    echo "Wrong username or password";
}
include("register.php");
mysqli_close($con);
?>