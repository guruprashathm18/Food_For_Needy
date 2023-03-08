<?php
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$date=$_POST['today'];

echo $name;
echo $phNo;
echo $address;
echo $email;
echo $date;
$conn = new mysqli('localhost','root','','orphandb');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into requestfood(name,phNo,address,email,date) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$name,$phNo,$address,$email,$date);
	$stmt->execute();
	echo "<script>
             alert(' Request successfully !!'); 
 window.history.go(-1);           
     </script>";
	$stmt->close();
	$conn->close();
}
}