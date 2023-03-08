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
<button onclick="location.href='http://localhost/FoodForNeedy/Admin/Login.html'" type="button">Back</button>
<br>
<?php
$con=mysqli_connect("localhost","root","");
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$phNo = $_POST['number'];
mysqli_select_db($con,"orphandb");

$result=mysqli_query($con,"Select psw from admininfo where name='$name' and phNo='$phNo'");
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
