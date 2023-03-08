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

 .inputdata input,textarea,select{
    margin-left: 11em;
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
<form action="Req_up.php" method="post">
<div class="inputdata">
<h3> New Request Food</h3>

      <label for="name"><b>Organisation Name</b></label>
      <select id="name" name="name">
<option value="Annal Children's Home">Annal Children's Home</option>
<option value="Sri Arunodayam Charitable Trust">Sri Arunodayam charitable trust</option>
<option value="DazSt">Dazzling Stone Orphanage</option>
<option value="Udhavum Ullangal">UDHAVUM ULLANGAL</option>
<option value="Hope Public Charitable Trust">Hope Public Charitable Trust</option>
<option value="Avvai Home & Orphanage">Avvai Home & Orphanage</option>
</select>

      <button type="submit" name="btn">Retrieve</button>
<?php
$con=mysqli_connect("localhost","root","");
if(isset($_POST['btn']))
{
$name = $_POST['name'];
mysqli_select_db($con,"orphandb");

$result=mysqli_query($con,"Select * from requestfood where name='$name'");
while($row=mysqli_fetch_array($result))
{ 
?>
<br><br>
      <label for="number"><b>PhoneNumber</b></label>
      <input type="text" placeholder="Enter Phone number" name="number" value="<?php echo $row['phNo']; ?>">
<br><br>
<label for="address"><b>Address</b></label>
<textarea rows="3" cols="40" name="address" placeholder="Enter Address" value="<?php echo $row['address']; ?>"></textarea>
<br><br>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" value="<?php echo $row['email']; ?>">
<br><br>
      <label for="date"><b>Till Required Date</b></label>
    <input type="date" name="today" value="<?php echo $row['date']; ?>">
<br><br><br>

<?php
//echo $row['name'].$row['phNo'].$row['email'];
}
}
?>
<br><br>
        <button type="submit" name="btn1" class="signupbtn">Update</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/RequestFood.php'" type="button">Back</button>
<button type="Reset" class="cancelbtn">Cancel</button>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb"); 
if(isset($_POST['btn1']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$date=$_POST['today'];	
//$result=mysqli_query($con,"Select * from requestfood where name='$name'");
$result=mysqli_query($con,"UPDATE requestfood SET phNo='$phNo' ,address='$address',email='$email',date='$date' WHERE name='$name'");
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
$sel='select * from requestfood'; 
echo "<table>";  
echo "<tr><th>S.No</th><th>Organisation Name</th><th>Phone Number</th><th>Address</th><th>Email</th><th>Required Date</th></tr>"; 
$sql=mysqli_query($con,$sel); 
while($row=mysqli_fetch_array($sql)) 
{ 
 	echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td> ".$row['phNo']." </td><td>".$row['address'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td></tr>'; 
} 
echo "</table><br><br>"; 


?>
</div>

123
<br><br><br><br><br><br>
</body>
</html>