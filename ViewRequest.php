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

h3::first-letter {
  color: #ff0000;
  font-size: xxx-large;
}
.title {
  border: 5px solid white; 
//text-align: center;
}

.navbar {
  overflow: hidden;
 background-color: #333;
}

.navbar a {
 // float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar button {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .navbar button:hover{
  background-color: red;
}
 button.right {
        float: right;
      }
 a.right {
        float: right;
      }
.box {
margin: auto;
  width: 80%;
//height: 90%;
 height: 100%;
  padding: 15px;
  border: 5px solid gray;
}

table,tr,td{  	 	 	border: 1px solid black;  	 	 	border-collapse:collapse;  
 	 	 	width: 900px;  	 	 	height: 25px; 
            text-align: center; 
 	 	} 
 	 	th{ 
          background-color: #dcdcdc; 
 	 	} 
</style>
<body>
<div class="title">
<div class="navbar">
<br>&nbsp&nbsp&nbsp
<img src="logo.jpg" width="50" align="top"/>
<h3 style="display:inline; color:white;">guru</h3>
<a href="home.html" target="_self">Home</a>
<a href="http://localhost/FoodForNeedy/Organisation.html" target="_self">Organisation</a>
<a href="http://localhost/FoodForNeedy/Reqblood.html" target="_self">Send Request</a>
<a href="http://localhost/FoodForNeedy/ViewRequest.php" target="_self">View Request</a>
<button onclick='window.location.reload(true);'>Refresh</button>
<a href="http://localhost/FoodForNeedy/ContactUS.html" target="_self">Contact US</a>
<br><br>
</div>
</div>
<br><br><br><br>
<div class="box" style="background-color:white">
<h1 style="font-style: oblique; color:black" align="center">View Request</h1>
<br><br>
<center> 
<?php echo "<table>"; 
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"orphandb"); 
$sel='select * from requestfood'; 
echo "<tr><th>S.No</th><th>Organisation Name</th><th>Phone Number</th><th>Address</th><th>Email</th><th>Required Date</th></tr>"; 
$sql=mysqli_query($con,$sel); 
while($row=mysqli_fetch_array($sql)) 
{ 
 	echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td> ".$row['phNo']." </td><td>".$row['address'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td></tr>'; 
} 
echo "</table><br><br>"; 

?>
</div>
</body>
</html>