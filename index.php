<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("img/1.jpg"); }
.img2 { background-image: url("img/Cloudd1.jpg"); }
.img3 { background-image: url("img/Data Protection.jpg"); }


/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 50px;
  border: 5px solid #f1f1f1;
  position: fixed;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width:auto;
  padding: 20px;
  text-align: center;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 10%;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 0;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 45px;
  color: cyan;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: red;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="Registration_Login/index.php">Registration/Login</a>
    <a href="login.php">Admin Login</a>
	<a href="contact.php">Contact Us</a>
  </div>
</div>
<span style="font-size:40px;cursor:pointer; color:darkorange" onclick="openNav()">&#9776;Menu</span>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<div class="bg-image img2"></div>
<div class="bg-image img1">
<center><p style="font-size:35px; color:gold;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><u>How To Start</u></center></p>
<p style="font-size:25px; color:#f1f1f1;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> 1.Register Yourself<br>
For accessing the services, the user must first register theirselves.<br> During the registration process
various data like Name, username, password, email id, the phone number will be requested to enter.
</p>
<p style="font-size:25px; color:#f1f1f1;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">2. Uploading a File on Cloud<br>
User Must Login with their credential i.e Email and Password Used at the time of Registration.<br>
To Upload a file user have to just select a file and give encryption key of his/her choice and thats it.
</p>
</div>
</div>
<div class="bg-image img3">
<p style="font-size:25px; color:#f1f1f1;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">3. View Uploaded Files<br>
User Have Option to view their uploaded files .
<br>
It will be enabled to them only after they click on decrypt button .
</p>  
<p style="font-size:25px; color:#f1f1f1;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">4. Downloading File From The Cloud<br>
To download the file user has option to choose the file he/she wants to download.
<br>
First he/she have to click on the decrypt button and then download button will be available to them only.
</p>

<div class="bg-text" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:primary">Secure File Storage on Cloud Using Cryptography</div>
<div class="bg-text" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:primary">Secure File Storage on Cloud Using Cryptography</div>
<div class="footer">
<p>© 2022 All rights reserved | Designed by Cloud9</p>
</div>
</body>
</html>