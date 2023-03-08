<?php
$con=mysqli_connect("localhost","root","");
session_start();
if(isset($_POST['btn']))
{
$email = $_POST['email'];
$psw = $_POST['psw'];
mysqli_select_db($con,"orphandb");

$result=mysqli_query($con,"Select email,psw from donarinfo where email='$email' and psw='$psw'");

$row = mysqli_fetch_row($result);

if($email==$row[0] && $psw==$row[1])
{
echo "<script>
alert('Login suceess'); 
</script>";

$_SESSION['email']= $email;
header("Location: http://localhost/FoodForNeedy/donor.php");

}
else{
echo "<script>
alert('Login failed'); 
window.history.go(-1);
</script>";
}
}