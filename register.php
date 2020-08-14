<!DOCTYPE html>

<html>
 <head>
	<link rel="stylesheet" href="register.css">

 <title>Register</title>
 <script>
	// Get the modal
	var modal = document.getElementById('id01');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
	</script>


 </head>
 <style>
h1{
 text-align:center
  }
body{ background-size: 100%
}
 
</style>
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
</style>
 <body>
 <ul>
<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a>
  <li><a href="index.php">Home</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="explore.html">Explore</a></li>
  <li><a href="#About">About</a></li>
  </div>
  <div class="topnav">
  
	<div class="search-container">
	  <form action="/action_page.php">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Submit</button>
	  </form>
	</div>
  </div>
	</div>
</ul>
<form name="myForm" action="" onsubmit="return validateForm()" method="post" style="border:1px solid #ccc">
	<div class="container">
	  <h1>Sign Up</h1>
	  <p>Please fill in this form to create an account.</p>
	  <hr>

	  <label for="name"><b>Name</b></label>
	  <input type="text" placeholder="Enter Name" name="name" required>

	  <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>


	  <label for="phone"><b>Contact</b></label>
	  <input type="text" placeholder="Enter Phone No." name="phone" required>

	  <label for="gender"><b>Gender</b></label>
	  <br>
	  <br>
	  <input type="radio" id="male" name="gender" value="male" required> 
	  <label for="male">Male</label><br>
	  <input type="radio" id="female" name="gender" value="female">
	  <label for="female">Female</label><br>
	  <input type="radio" id="other" name="gender" value="other">
	  <label for="other">Other</label>
	  <br>
	  <br>
  
  	  <label for="psw"><b>Password</b></label>
	  <input type="password" placeholder="Enter Password" name="psw" >
  
	  <label for="psw-repeat"><b>Re-Enter Password</b></label>
	  <input type="password" placeholder="Re-Enter Password" name="psw-repeat" required>
  
	  <label>
		<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
	  </label>
  
	  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
	  <div class="clearfix">
		<button type="button" class="cancelbtn" >Cancel</button>
		<button type="submit" class="signupbtn" name="SignUp">Sign Up</button>
	  </div>
	</div>
  </form>
 
 

 </body>
 </html>
 <?php


// Create connection
$conn = mysqli_connect("localhost","root","","");
$db = mysqli_select_db($connection,'register');
if(isset($_post[SignUp]))
{
	$name = $_post['name'];
	$email = $_post['email'];
	$phone = $_post['phone'];
	$gender = $_post['gender'];
	$password = $_post['psw'];
	$query ="INSERT INTO `register` (`Name`,`Email`, `Contact No.` , `Gender`, `Password`) VALUES('$name','$email ','$phone','$gender','$password');
	$query_run= mysqli_query($connection,$query);
	if($query_run)
	{
		echo 'Data Save';
	}
	else
	{
		echo 'Data Not Saved';
	}
}


?>
