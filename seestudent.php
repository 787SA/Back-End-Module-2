<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>		h2 {font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center; -webkit-text-stroke: 1.5px; -webkit-text-stroke-color: black; color: aliceblue;}
		p {font-family: 'Times New Roman', Times, serif; text-align: center;}
		body {background-color: white;}
		
		
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
    font-family: Impact;

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

<body style = "margin: 50px;">
	
	<br>
	<table class = "table">
		<thread>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Telephone</th>
</tr>
</thread>

<tbody>

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
				 



	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "student44-353031375b36";

	// Create Connection 
	
	$connection = new mysqli($servername, $username, $password, $database);

	// Cheack Connection 
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

	// read all row from database

	$sql = "SELECT * FROM students";
	$result = $connection->query($sql);

	if (!$result) {
		die("Invalid query: " . $connection->error);
	}

	//read data of each row 

	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td>" . $row["ID"] . "</td>
		<td>" . $row["fname"] . "</td>
		<td>" . $row["lname"] . "</td>
		<td>" . $row["email"] . "</td>
		<td>" . $row["age"] . "</td>
		<td>" . $row["class"] . "</td>
		<td>
		<a href='update'>Update</a>
		<a href='delete'>Delete</a>
		</td>
		</tr>";


	}

?>

</tbody>
</table>
</body>
</html>




