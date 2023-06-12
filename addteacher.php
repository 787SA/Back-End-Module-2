<html>

	<head><title>School Management System</title></head>

	<style>
        

		h2 {font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center; -webkit-text-stroke: 1.5px; -webkit-text-stroke-color: black; color: aliceblue;}
		p {font-family: 'Times New Roman', Times, serif; text-align: center;}
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
		
		h3 {font-family: 'Times New Roman', Times, serif; font-size: 20px; text-align: center;}
		

		/* registration Form */

		*{
    margin: 0;
    padding: 0;
}

body{
    
}

div.main{
    width: 400px;
    margin: 100px auto 0px auto;
    
    

}
h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;

}
div.register{
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px soid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px 
    rgba(0,0,0,0.3);
    color: #fff;
    padding-bottom: 120px;
}

form#register{
    margin: 40px;
}
label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow: inset 1px 1px 5px 
    rgba(0,0,0,0.3);

}

input#submit{
    width: 200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    border-radius: 10px;
    background-color: rgba(250,100,0,0.8);
    color: #fff;
    cursor: pointer;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
    padding-bottom: 5px;
}

label,span,h2{text-shadow: 1px 1px 5px
     rgba(0,0,0,0.3);
}
		</style>

	











<body>
		
		<h2>Welcome to our School Management System</h2>
		
		<div class="topnav">
		<a href="index.php">Home</a> 
		<a href="addstudent.php">Add a student</a>  
		<a href="addparent.php">Add a parent</a>
    <a href="addteacher.php">Add a teacher</a> 
		<a href="seestudent.php">See all students</a> 
		<a href="seeparent.php">See all parents</a>
		<a href="seeteachers.php">See all teachers</a>
		<a href="seeclass.php">See all classes</a>
				 
	</div>
	</div>
	</div>
			   
  <form action="insertT.php" method="POST">
	<div class ="main">
        <div class = "register">
            <h2>Register Here</h2>
            <form id="register" method="post">
           <center>     <label>First Name : </label>
                <br><br>
                <input type = "text" name="fname"
                id="fname" placeholder="Enter Your First Name">
                <br><br>
                <label> Last Name : </label>
                <br><br>
                <input type ="text" name="lname" id="lname" placeholder="Enter Your Last Name">
                <br><br>
                <label>Email : </label>
                <br><br>
                <input type ="email" name="email" id="email" place holder="Enter Your Vaild Email">
                <br><br>
                <label>Address :</label>
                <br><br>
                <input type ="text" name="address" id="address" placeholder ="Enter Your Address">
                <br><br>
                <label>telephone : </label>
                <br><br>
                <input type ="text" name="telephone" id="telephone" place holder="Enter Your Telephone">
                <br><br>
				<label>Annual Salary : </label>
				<br><br>
				<input type ="text" name="salary" id="salary" place holder="Enter Your annual Salary">
                <br><br>
                
                <input type="submit" value="Submit"
                name="submit" id="submit"></center>

                <br><br>
            </form>





























  
 </form>
</body>
</html>
		