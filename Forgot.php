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
.title {
  border: 5px solid white; 
//text-align: center;
}
.navbar {
  overflow: hidden;
 background-color: #333;
}
.navbar img{
 // float: left;
 // padding: 0px 15px;
}
.navbar h3{
  display:inline;
  color:white;  
// float: left;  
 // padding: 0px 15px;
}

.navbar a {
 // float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  background-color: inherit;
  text-decoration: none;
  font-family: inherit;
  margin: 0;
}
.navbar button {
//float: left;
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

a.left {
        float: left;
      }
 
.inputdata label{
  position:absolute;
}

 .inputdata input{
    margin-left: 9em;
}

.box {
margin: auto;
  width: 35%;
height: 40%;
  padding: 40px;
  border: 5px solid gray;
}

</style>
<script>
var modal1 = document.getElementById('id02');
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
function validateform(){  
var password=document.myform.psw.value; 

if (password==null || password==""){  
  alert("Password can't be blank");  
  return false;  
}

}  

</script>
<body>
<div class="title">
<div class="navbar">
<br>&nbsp&nbsp&nbsp
<img src="logo.jpg" width="50" align="top"/>
<h3>guru</h3>
<a href="home.html" target="_self">Home</a>
<a href="http://localhost/FoodForNeedy/Organisation.html" target="_self">Organisation</a>
<a href="http://localhost/FoodForNeedy/Reqblood.html" target="_self">Send Request</a>
<a href="http://localhost/FoodForNeedy/ViewRequest.php" target="_self">View Request</a>
<button onclick='window.location.reload(true);'>Refresh</button>
<a href="http://localhost/FoodForNeedy/ContactUS.html" target="_self">Contact US</a>
<a href="http://localhost/FoodForNeedy/Signup.html" class="right" target="_self">Signup</a>
<a href="http://localhost/FoodForNeedy/Login.html" class="right" target="_self">Login</a>
<br>
<br>
</div>
</div>
<br><br><br>
<div class="box" style="background-color:white">
<form class="modal-content" name="myform" action="Forgot.php" method="post">
<h1 align="center">Log In</h1>
<hr>
<div class="inputdata">
<label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
<br><br>
      <label for="number"><b>PhoneNumber</b></label>
      <input type="text" placeholder="Enter Phone number" name="number" required>
<br><br>
<br><br>
<div class="clearfix">
<button type="Reset" class="cancelbtn">Cancel</button>
<button type="submit" name="btn" class="loginbtn">Retreive</button>
<button onclick="location.href='http://localhost/FoodForNeedy/Login.html'" type="button">Back</button>
<br>
<?php
$con=mysqli_connect("localhost","root","");
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
mysqli_select_db($con,"orphandb");

$result=mysqli_query($con,"Select psw from donarinfo where name='$name' and phNo='$phNo'");
while($row=mysqli_fetch_array($result))
{
echo $row['psw'];
}
}
?>
</form>
</div>
</div> 
</div>
</body>
</html>
