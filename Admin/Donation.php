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
<form action="Donation_add.php" method="post" class="modal-content">
<div class="inputdata">
<h1>Donation Page</h1>
      <hr>
<label for="dname"><b>Donar's Name</b></label>
<input type="text" placeholder="Enter Donar Name" name="dname" required>
<br><br>

<label for="name"><b>Organisation Name</b></label>
 <select id="name" name="name">
<option value="Annal Children's Home">Annal Children's Home</option>
<option value="Sri Arunodayam Charitable Trust">Sri Arunodayam charitable trust</option>
<option value="DazSt">Dazzling Stone Orphanage</option>
<option value="Udhavum Ullangal">UDHAVUM ULLANGAL</option>
<option value="Hope Public Charitable Trust">Hope Public Charitable Trust</option>
<option value="Avvai Home & Orphanage">Avvai Home & Orphanage</option>
</select>

<br><br>
      <label for="number"><b>PhoneNumber</b></label>
      <input type="text" placeholder="Enter Phone number" name="number" required>
<br><br>
<label for="address"><b>Address</b></label>
<textarea rows="3" cols="40" name="address" placeholder="Enter Address" required></textarea>
<br><br>
<label for="date"><b>Date</b></label>
<input type="date" name="today" required>
<br><br><br>
       <div class="clearfix">
       
        <button type="submit" name="btn" class="signupbtn">Add Donation</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Req_up.php'" type="button">Update</button>
<button type="Reset" class="cancelbtn">Cancel</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Admin.html'" type="button">Back</button>
</form>
</div>
</div> 

</div>

<div class="box1" style="background-color:white">
<h1 style="font-style: oblique; color:black" align="center">View Donations</h1>
<br><br>
<?php 
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb"); 
$sel='select * from donation'; 
echo "<table>";  
echo "<tr><th>S.No</th><th>Donars Name</th><th>Organisation Name</th><th>Phone Number</th><th>Address</th><th>Required Date</th></tr>"; 
$sql=mysqli_query($con,$sel); 
while($row=mysqli_fetch_array($sql)) 
{ 
 	echo "<tr><td>".$row['id']."</td><td>".$row['dname']."</td><td>".$row['name']."</td><td> ".$row['phNo']." </td><td>".$row['address'].'</td><td>'.$row['date'].'</td></tr>'; 
} 
echo "</table><br><br>"; 


?>
</div>

<br><br><br><br><br><br>
</body>
</html>