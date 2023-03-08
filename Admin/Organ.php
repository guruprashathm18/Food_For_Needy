<?php
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
$email = $_POST['email'];

$conn = new mysqli('localhost','root','','orphandb');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into organization(name,phNo,email) values(?,?,?)");
	$stmt->bind_param("sss",$name,$phNo,$email);
	$stmt->execute();
	echo "<script>
             alert('Signup completed successfully'); 
             window.history.go(-1);
     </script>";
	$stmt->close();
	$conn->close();
}
}