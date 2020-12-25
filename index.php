<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" href="main.css">

 <title>MAIN</title>
 <script>
 function openCity(cityName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(cityName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
 </head>
 <style>
h1{
 text-align:center
  }
body{ background-size: 100%
}
 
</style>
 <body background="car.jpg">
 <style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


li a:hover {
  background-color: #111;
}
.active {
  background-color: #ff0000 ;
}
a{
  color:black;
}
</style>

</head>
<body>

<ul>
<div class="icon-bar">
  <li><a class="active" href="#Home">Home</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="explore.html">Explore</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="#About">About</a></li>
 <div class="topnav">
  
  
</ul>


<div id="Buy" class="tabcontent">
  <h1>Buy</h1>
  <p>Used Cars for sale. Find the best Second Hand Cars.</p>
</div>

<div id="Sell" class="tabcontent">

  <h1><a href="sell.php" style="color:white" class="btn">Click here to Sell your Car</a></h1>
  <p>We Buy All Cars. Sell in 1 Visit. Free RC Transfer & Instant Payment. </p>
</div>

<div id="Rent" class="tabcontent">
  <h1><a href="rent.html" style="color:white" class="btn">Rent a wide variety of cars from all the major cites</a></h1>
  <p>Now Pick a Car From Any City & Drop in Another City </p>
</div>



<button class="tablink" onclick="openCity('Buy', this, 'red')" id="defaultOpen"><a href="Buy.html" >Buy</a></button>
<button class="tablink" onclick="openCity('Sell', this, 'red')"><a href="sell.php" >Sell</a></button>
<button class="tablink" onclick="openCity('Rent', this, 'red')"><a href="rent.html" >Rent</a></button>



</body>

</html>
