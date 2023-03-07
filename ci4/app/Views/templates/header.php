<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="ccs/mystyle.css">
    <title>Belle's Webpage</title>
<style>
ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #E79597;
}


li {
  float: left;
  display: inline;
}

a b1 {
  display: block;
  padding: 8px;
  background-color: #E79597;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #C76669;
}


.active {
  background-color: #04AA6D;
}

#Introduction {
background:#E1C4C4;
padding:15px;
}

#Interests {
background:#E1C4C4;
padding:15px;
}

#Socials {
background:#E1C4C4;
padding:15px;
}

h1 {
  font-family: Arial, Helvetica, sans-serif;
  text-align: left;
  color:#C72C30;
}

.row {
  display: flex;
}

.column {
  flex: 50%;
}

.column2 {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}

.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4EA3A1;
}

.button1:hover {
  background-color: #4EA3A1;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #E9B54E;
}

.button2:hover {
  background-color: #E9B54E;
  color: white;
}

.button3 {
  background-color: white;
  color: black;
  border: 2px solid #40D3CC;
}

.button3:hover {
  background-color: #40D3CC;
  color: white;
}

.column2 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}

</style>

</head>
<body>

<!-- NAVBAR -->
<ul>
  <li><a name="b1" href="#Introduction">Introduction</a></li>
  <li><a name="b1"href="#Interests">Interests</a></li>
  <li><a name="b1"href="#Socials">Socials</a></li>
  <li><a name="b1"href="#Socials">Form Validation</a></li>
  <li><a name="b1"href="#Socials">Guest Registration</a></li>
  <li><a name="b1"href="#Socials">News</a></li>
</ul>

<!-- INTRODUCTION Page -->

<section class="main-section" id="Introduction">

<div class="row">
  <div class="column">
    <h1 style= "text-align: center">Hey there, I'm Belle!</h1>
	<p style="font-size: 22px" >I'm a 19 year old student who studies computer sciences, 
	wondering what kind of things life will bring.
	</p>
  </div>

  <div class="column">

	
	</div>
	
	</div>
</section>

<!-- INTERESTS Page -->

<section class="main-section" id="Interests">

<div class="row">
  <div class="column">
    <h1 style= "text-align: center">So what have I been up to?</h1>
	<p style="font-size: 22px" >For the past few years, I've been interested in gaming that started
	in the long months of quarantine. VALORANT is my first FPS game that I
	have played and thoroughly enjoying spending time with friends. 
	</p>
  </div>

  <div class="column">

	<img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3f072336e3f3ade4/63096d7be4a8c30e088e7720/Valorant_2022_E5A2_PlayVALORANT_ContentStackThumbnail_1200x625_MB01.png" 
	alt="Valorant" style = "position: static; width: 675px; height: 350px;">
	</div>
	
	</div>

</section>

<!-- SOCIALS Page -->

<section class="main-section" id="Socials">
    <h1 style= "text-align: center">Where else can you find me?</h1>
	
<div class="row2">

  <div class="column2">
  	<img src="https://www.facebook.com/images/fb_icon_325x325.png" 
	alt="FB Logo" style = "position: static; padding: 10px; 
	width: 100px; height: 100px;">
	
  <button class="button button1"> 
  <a href="https://www.facebook.com/belle.yogawin/"> See me on Facebook! </a> </button>
  </div>
  
  <div class="column2">
  <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" 
	alt="IG Logo" style = "position: static; padding: 10px; 
	width: 100px; height: 100px;">
  <button class="button button2">
   <a href="https://www.instagram.com/brielle_ann_27/">See me on Instagram!</a> </button>
  </div>
  
  <div class="column2">
  <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" 
	alt="FB Logo" style = "position: static; padding: 10px; 
	width: 100px; height: 100px;">
  <button class="button button3" >
  <a href="https://www.linkedin.com/in/gabrielle-ann-yogawin-94445118b/">Contact me through LinkedIn!</a> </button>
  </div>
  
  
</div>
</section>

</body>
</html>