<?php
    if(isset($_POST['name'])){ 
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
        $server="localhost";
        $username="root";
        $password="";
       
		$con = mysqli_connect($server, $username, $password);
		
		// Check connection
		if(!$con){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        
		//echo "success";
		// Taking all 5 values from the form data(input)
		$name = $_POST['name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		
		$password = $_POST['password'];
		$mobile=$_POST['mobile'];
		$gender=$_POST['gender'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `jewellery`.`registration` (`name`,`email`,`dob`,`password`,`mobile`,`gender`) VALUES ('$name','$email','$dob','$password','$mobile','$gender');";
		
		if($con->query($sql)==true){
			echo "Registration is successful"; 

			
		} else{
			echo "ERROR: Hush! Sorry $sql <br> $con->error ";
				
		}
		
		// Close connection
		$con->close();
    }
		?>
<!DOCTYPE html> 
<html> 

<head> 
	<title>Registration Form</title>  
</head> 
<style>
/* style.css */
body { 
	display: flex; 
	align-items: center; 
	justify-content: center; 
	font-family: sans-serif; 
	line-height: 1.5; 
	min-height: 100vh; 
	background: #f3f3f3; 
	flex-direction: column; 
	margin: 0; 
} 

.main { 
	background-color: #fff; 
	border-radius: 15px; 
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
	padding: 10px 20px; 
	transition: transform 0.2s; 
	width: 500px; 
	text-align: center; 
} 

h1 { 
	color: #4CAF50; 
} 

label { 
	display: block; 
	width: 100%; 
	margin-top: 10px; 
	margin-bottom: 5px; 
	text-align: left; 
	color: #555; 
	font-weight: bold; 
} 

#pass { 
	color: red; 
	font-size: 12px; 
} 

input { 
	display: block; 
	width: 100%; 
	margin-bottom: 15px; 
	padding: 10px; 
	box-sizing: border-box; 
	border: 1px solid #ddd; 
	border-radius: 5px; 
} 

select { 
	display: block; 
	width: 100%; 
	margin-bottom: 15px; 
	padding: 10px; 
	box-sizing: border-box; 
	border: 1px solid #ddd; 
	border-radius: 5px; 
} 

button { 
	padding: 15px; 
	border-radius: 10px; 
	margin-top: 15px; 
	margin-bottom: 15px; 
	border: none; 
	color: white; 
	cursor: pointer; 
	background-color: #4CAF50; 
	width: 100%; 
	font-size: 16px; 
} 

.wrap { 
	display: flex; 
	justify-content: center; 
	align-items: center; 
}
</style>
<body> 
	<div class="main"> 
		<h1>SignUp</h1> 
		<form action="ss.php" method="POST"> 
			<label for="first">Name:</label> 
			<input type="text" id="name"
				name="name"
				placeholder="Enter your name" required> 


			<label for="email">Email:</label> 
			<input type="email" id="email"
				name="email"
				placeholder="Enter your email" required> 

			<label for="dob">Date of Birth:</label> 
			<input type="date"
				id="dob" name="dob"
				placeholder="Enter your DOB" required> 

			<label for="password">Password:</label> 
			<input type="password" id="password"
				name="password"
				placeholder="Enter your password"
				pattern= 
				"^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required				 
				title="Password must contain at least one number, 
					one alphabet, one symbol, and be at 
					least 8 characters long"> 


			<label for="mobile">Contact:</label> 
			<input type="text" id="mobile"
				name="mobile"
				placeholder="Enter your Mobile Number" required 
				maxlength="10"> 

			<label for="gender">Gender:</label> 
			<select id="gender" name="gender" required> 
				<option value="male">Male</option> 
				<option value="female">Female</option> 
				<option value="other">Other</option> 
			</select> 

			<div class="wrap"> 
				<button type="submit"> 
				Submit 
				</button> 
	</div> 
<p>
              <a href="ll.html">Already have an account? Login here</a>
           
        </p>
			</div> 
		</form> 

	<script src="script.js"></script> 
</body> 

</html>
