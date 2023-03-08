<html>
<style>

body {
  //background-image: url("https://images.edexlive.com/uploads/user/imagelibrary/2018/7/1/original/needy.jpg?w=700&dpr=1.5");
background-image: url("https://iskcondwarka.org/backend/editorFileUploads/images/Feeding-the-Poor---Is-this-Charity-worthy.jpg");
    opacity: 0.8;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
 
.inputdata label{
  position:absolute;
}

 .inputdata input{
    margin-left: 9em;
}

.box {
margin: auto;
float:left;
  width: 46%;
height: 90%;
  padding: 5px;
  border: 5px solid gray;
}

.box1 {
float:right;
display: inline;
  width: 50%;
height: 90%;
  padding: 5px;
  border: 5px solid gray;
}

table,tr,td{  	 	 	border: 1px solid black;  	 	 	border-collapse:collapse;  
 	 	 	width: 575px;  	 	 	height: 25px; 
            text-align: center; 
 	 	} 
 	 	th{ 
          background-color: #dcdcdc; 
 	 	} 



</style>
<body>
<br><br><br><br><br>
<div class="box" style="background-color:white">
<form action="Forgot_Org.php" method="post">
<div class="inputdata">
<h3> New Organization</h3>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <button type="submit" name="btn">Retrieve</button>
<?php
$con=mysqli_connect("localhost","root","");
if(isset($_POST['btn']))
{
$name = $_POST['name'];
mysqli_select_db($con,"orphandb");

$result=mysqli_query($con,"Select * from organization where name='$name'");
while($row=mysqli_fetch_array($result))
{ 
?>
<br><br>
      <label for="number"><b>PhoneNumber</b></label>
      <input type="text" placeholder="Enter Phone number" name="number"  value="<?php echo $row['phNo']; ?>">
<br><br>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email"  value="<?php echo $row['email']; ?>">

      
<?php
//echo $row['name'].$row['phNo'].$row['email'];
}
}
?>
<br><br>
  <button type="Reset" class="cancelbtn">Cancel</button>
        <button type="submit" name="btn1" class="signupbtn">Update</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Organisation.php'" type="button">Back</button>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb"); 
if(isset($_POST['btn1']))
{
$name = $_POST['name'];	
$phNo = $_POST['number'];	
$email = $_POST['email'];	
//$result=mysqli_query($con,"Select * from organization where name='$name'");
$result=mysqli_query($con,"UPDATE organization SET phNo='$phNo' ,email='$email' WHERE name='$name'");
}
?>
</form>
</div> 
</div>

<div class="box1" style="background-color:white">
<h1 style="font-style: oblique; color:black" align="center">View Request</h1>
<br><br>
<?php 
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb"); 
$sel='select * from organization';
echo "<table>";  
echo "<tr><th>S.No</th><th>Organisation Name</th><th>Phone Number</th><th>Email</th></tr>"; 
$sql=mysqli_query($con,$sel); 
while($row=mysqli_fetch_array($sql)) 
{ 
echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td> ".$row['phNo']."</td><td>".$row['email']."</td></tr>"; 
} 
echo "</table><br><br>"; 

?>
</div>

123
<br><br><br><br><br><br>
</body>
</html>