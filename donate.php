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
 //window.history.go(-1);           
     </script>";
	$stmt->close();
	$conn->close();
?>

<button onclick="location.href='http://localhost/FoodForNeedy/Donor.html'" type="button">Back</button>
<div style="width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo $dname; ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the donation </i></span> <br/><br/>
       <span style="font-size:30px">Successfully</span> <br/><br/><br/><br/>
       
       <span style="font-size:25px"><i>dated</i></span><br>
     <br><br>
      <span style="font-size:30px"><?php echo date("Y/m/d"); ?></span>
</div>
</div>
<?php
}
}
?>