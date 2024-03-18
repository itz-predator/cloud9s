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

* {box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.bg-image {
  /* Full height */
  height: auto%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("img/1.jpg"); }
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
   position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: gold;
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
  </div>
</div>
<span style="font-size:40px;cursor:pointer; color:black" onclick="openNav()">&#9776;Menu</span>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<center><h2 style="font-size:40px; color:orangered">Team Cloud9</h2></center>
<br>
<div class="bg-image img1">
    <div class="row">
  <div class="column">
    <div class="card">
      <center><img src="img/Rohit P.jpg"  style="width:100px; height:100px"></center>
      <div class="container">
      <center><h2 style="color:snow">Rohit Kumar Singh</h2></center>
        <p class="title">Founder <br> Trainee @WIPRO</p>
        
        <p style="color:snow "> Hello I am Rohit Kumar Singh ,Currently I am Persuing <br>Bachelor of Technology , From <br>Shambhunath Institute Of Engineering And Technology, Prayagraj</p>
             <p><button class="button" ><a href="rohitks.vns@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><img src="img/Abhi.jpg"  style="width:100px; height:100px"></center>
      <div class="container">
      <center><h2 style="color:snow">Abhishek Kumar</h2></center>
        <p class="title">Founder <br>Full Stack Developer</p>
        <p style="color:snow">Hello I am Abhishek Kumar ,Currently I am Persuing <br>Bachelor of Technology ,From <br>Shambhunath Institute Of Engineering And Technology, Prayagraj</p>
               <p><button class="button" ><a href="mailto:kumarabhishek2172001@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <center> <img src="img/Shahzeb.jpeg"  style="width:100px; height:100px" ></center> 
      <div class="container">
      <center> <h2 style="color:snow">Shahzeb Khan</h2></center>
        <p class="title">Founder</p>
        <p style="color:snow">Hello I am Shahzeb Khan ,Currently I am Persuing <br>Bachelor of Technology ,From <br>Shambhunath Institute Of Engineering And Technology, Prayagraj</p>
             <p><button class="button" ><a href="mailto:coolrazor26@gmail.com">Contact</a></button></p>
      </div>      
    </div>
  </div>
  <div class="column">
    <div class="card">
    <center>  <img src="img/Shashank.jpeg" style="width:100px; height:100px"> </center> 
      <div class="container">
        <center><h2 style="color:snow">Shashank Pandey</h2></center>
        <p class="title">Support Engineer</p>
        <p style="color:snow">Hello I am Shashank Pandey ,Currently I am Persuing <br>Bachelor of Technology , From <br>Shambhunath Institute Of Engineering And Technology, Prayagraj</p>
              <p><button class="button" ><a href="mailto:shashankpandey9981@gmail.com">Contact</a></button></p>
      </div>
</div>
</div>
</div>
<div></div>
<br>
<br>
<br>

<div class="footer">
  <p>© 2022 All rights reserved | Designed by Cloud9</p>
</div>
</body>
</html>