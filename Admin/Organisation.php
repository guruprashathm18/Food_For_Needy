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
  width: 40%;
height: 90%;
  padding: 40px;
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
<form action="Organ.php" method="post" class="modal-content">
<div class="inputdata">
<h3> New Organization</h3>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
<br><br>
      <label for="number"><b>PhoneNumber</b></label>
      <input type="text" placeholder="Enter Phone number" name="number" required>
<br><br>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
<br><br>
       <div class="clearfix">
        <button type="submit" name="btn" class="signupbtn">Add Organisation</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Forgot_Org.php'" type="button">Update</button>
<button type="Reset" class="cancelbtn">Cancel</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Admin.html'" type="button">Back</button>
</form>
</div>
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

<br><br><br><br><br><br>
</body>
</html>