<html>

	<head><title>School Management System</title></head>
	<style>
        

        h2{
    text-align: center;
    padding: 20px;
    font-family: Impact;
  color: white}
		body {background-color: grey;}
		
		
		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}
		
		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}
		
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}
		
		.topnav a.active {
		  background-color: #04AA6D;
		  color: white;
		}

		/* Fotoer */


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333 ;
   color: white;
   text-align: center;
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
		
		</style>
		
			<body>
				
				<h2>Rishton Academy Manegment System</h2>
				
		
		
			
		
				<div class="topnav">
				<a href="index.php">Home</a> 
		<a href="addstudent.php">Add a student</a>  
		<a href="addparent.php">Add a parent</a>
        <a href="addteacher.php">Add a teacher</a> 
		<a href="seestudent.php">See all students</a> 
		<a href="seeparent.php">See all parents</a>
    <a href="seeteachers.php">See all teachers</a>
    <a href="seeclass.php">See all classes</a>
					
				  
			   
				  
					<div class="footer">
  <p>--------------</p>
</div>

			</body>
		
		</html>