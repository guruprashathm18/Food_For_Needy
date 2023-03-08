<?php
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
$email = $_POST['email'];
$psw = $_POST['psw'];

$conn = new mysqli('localhost','root','','orphandb');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into donarinfo(name,phNo,email,psw) values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$phNo,$email,$psw);
	$stmt->execute();
	echo "<script>
             alert('Signup completed successfully'); 
             window.history.go(-1);
     </script>";
	$stmt->close();
	$conn->close();
}
}