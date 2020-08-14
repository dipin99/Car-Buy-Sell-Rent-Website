<!DOCTYPE html>

<html>
 <head>
 

 <title>MAIN</title>
 
 </head>
 <style>
h1{
 text-align:center
  }
body{ background-size: 100%
}
 

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

<style>
body {font-family: Arial, Helvetica, sans-serif;
color: blanchedalmond;
background-color: black}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  
  resize: vertical;
}

input[type=submit] {
  background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: maroon;
}

.container {
  
  border-radius: 50px;
  background-color: black;
  padding: 60px;
}
</style>

</head>
<body background-color= black>

<ul>
<div class="icon-bar">
  <li><a href="index.php">Home</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="explore.html">Explore</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="#About">About</a></li>
 
  </div>
</ul>
<div class="container">
  <h1> Just Fill in the details and get a quote for your car in less than 5 minutes </h1>
  <form action="/action_page.php" >

    <label for="fname">Full Name</label>
    <br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <br>
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your email.."><br>
    <label for="make">Select Year Make Model & Variant</label><br>
    <br> 

    <script type="text/javascript" src="//use.typekit.net/uvs8amk.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <select data-placeholder="&nbsp;Year" class="chzn-select year" style="width:70px;" tabindex="1" id="year">
<option value=""></option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select><select data-placeholder="Make" class="chzn-select" style="width:115px;" tabindex="2" id="make">
<option value=""></option>
<option value="ACURA">ACURA</option>
<option value="ASTON MARTIN">ASTON MARTIN</option>
<option value="AUDI">AUDI</option>
<option value="BENTLEY">BENTLEY</option>
<option value="BMW">BMW</option>
<option value="BUICK">BUICK</option>
<option value="CADILLAC">CADILLAC</option>
<option value="CHEVROLET">CHEVROLET</option>
<option value="CHRYSLER">CHRYSLER</option>
<option value="DODGE">DODGE</option>
<option value="FERRARI">FERRARI</option>
<option value="FORD">FORD</option>
<option value="GMC">GMC</option>
<option value="HONDA">HONDA</option>
<option value="HUMMER">HUMMER</option>
<option value="HYUNDAI">HYUNDAI</option>
<option value="INFINITI">INFINITI</option>
<option value="ISUZU">ISUZU</option>
<option value="JAGUAR">JAGUAR</option>
<option value="JEEP">JEEP</option>
<option value="KIA">KIA</option>
<option value="LAMBORGHINI">LAMBORGHINI</option>
<option value="LAND ROVER">LAND ROVER</option>
<option value="LEXUS">LEXUS</option>
<option value="LINCOLN">LINCOLN</option>
<option value="LOTUS">LOTUS</option>
<option value="MASERATI">MASERATI</option>
<option value="MAYBACH">MAYBACH</option>
<option value="MAZDA">MAZDA</option>
<option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
<option value="MERCURY">MERCURY</option>
<option value="MINI">MINI</option>
<option value="MITSUBISHI">MITSUBISHI</option>
<option value="NISSAN">NISSAN</option>
<option value="PONTIAC">PONTIAC</option>
<option value="PORSCHE">PORSCHE</option>
<option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
<option value="SAAB">SAAB</option>
<option value="SATURN">SATURN</option>
<option value="SUBARU">SUBARU</option>
<option value="SUZUKI">SUZUKI</option>
<option value="TOYOTA">TOYOTA</option>
<option value="VOLKSWAGEN">VOLKSWAGEN</option>
<option value="VOLVO">VOLVO</option>
</select><select data-placeholder="Model" class="chzn-select" style="width:115px;" tabindex="3" id="model">
<option value=""></option>
<option value="COMMANDER">COMMANDER</option>
<option value="COMPASS">COMPASS</option>
<option value="GRAND CHEROKEE">GRAND CHEROKEE</option>
<option value="LIBERTY">LIBERTY</option>
<option value="PATRIOT">PATRIOT</option>
<option value="WRANGLER">WRANGLER</option>
</select><select data-placeholder="Trim" class="chzn-select" style="width:100px;" tabindex="4" id="trim">
<option value=""></option>
<option value="LIMITED">LIMITED</option>
<option value="UNLIMITED">UNLIMITED</option>
<option value="SPORT">SPORT</option>
<option value="RENEGADE">RENEGADE</option>
</select>
<br>
    
    <label for="kms">Kilometers Driven</label><br>
    <input type="text" id="kms" name="Kilometers" placeholder=""><br>

    
    <input type="submit" value="Submit" >
  </form>
  <p>
 Youll recieve a quote soon on your email , after your car is evaluated by our certified experts<p>
</div>




 </body>
 </html>