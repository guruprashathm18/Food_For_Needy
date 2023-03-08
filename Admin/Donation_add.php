<?php
if(isset($_POST['btn']))
{
$dname = $_POST['dname'];
$name = $_POST['name'];
$phNo = $_POST['number'];
$address=$_POST['address'];
$date=$_POST['today'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb");
$conn = new mysqli('localhost','root','','orphandb');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into donation(dname,name,phNo,address,date) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$dname,$name,$phNo,$address,$date);
	$stmt->execute();
        $sel="DELETE FROM requestfood WHERE name='$name'and date='$date'";
        $sql=mysqli_query($con,$sel); 

	echo "<script>
             alert(' Donate successfully !!'); 
 window.history.go(-1);           
     </script>";
	$stmt->close();
	$conn->close();
}
}