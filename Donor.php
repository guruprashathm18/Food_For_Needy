<?php
include("donar_session.php");
?>


<html>
<style>
body {
//background-image: url("https://www.bookeventz.com/blog/wp-content/uploads/2021/02/FI-1.jpg");
background-image: url("https://iskcondwarka.org/backend/editorFileUploads/images/Feeding-the-Poor---Is-this-Charity-worthy.jpg");
    opacity: 0.9;
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
</style>
<script>
function logout() {
  location.replace("http://localhost/FoodForNeedy/home.html")
}
</script>

<body>
<div class="title">
<div class="navbar">
<br>&nbsp&nbsp&nbsp
<img src="logo.jpg" width="50" align="top"/>
<h3 style="display:inline; color:white;">guru</h3>
<a href="home.html" target="_self">Home</a>
<a href="http://localhost/FoodForNeedy/ContactUS.html" target="_self">Contact US</a>
<a href="http://localhost/FoodForNeedy/ViewRequest.php" target="_self">View Request</a>
<a href="http://localhost/FoodForNeedy/Donation.html" target="_self">Donations</a>
<button onclick="logout()" >Logout</button>
<h3  align="right" style="display:inline; color:white;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp Hey,&nbsp&nbsp<?php echo $_SESSION['email']; ?>!</h3>

<br><br>
</div>
</div>
<br><br><br><br><br><br>
<div style="background-color:white; height:300px;">
<br>&nbsp&nbsp&nbsp
<img src="https://tonsofthanks.com/wp-content/uploads/2018/02/Thank-you-for-the-donation-heart-300x200.jpg"
 width="400" align="center"/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<p style="font-size:3vw; display:inline;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&#10075&#10075</p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<h3 style="display:inline;">The people who give their food give you their heart &#10084;&#65039;</h3>
<p style="font-size:2vw; display:inline;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&#10076&#10076</p>
<br>
</div>