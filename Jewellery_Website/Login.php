<?php
    if(isset($_POST['email'])){ 
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
		
		$email = $_POST['email'];
		
		
		$password = $_POST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql =  "select *from `jewellery`.`registration` where email = '$email' and password = '$password'";  
		$result=mysqli_query($con,$sql);
		$num=mysqli_num_rows($result);
		if($num==1)
		{
			$login=true;
			
			echo "login is successful";
			header("Location: JEWELLERY.HTML");
		}
		else{
			echo "Invalid credentials";
				
		}
		
		// Close connection
		$con->close();
    }
		?>
		<!DOCTYPE html>
<html>
 
<head>
    <title>Login</title>
</head>
<style>
/*style.css*/
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


input {
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
span.psw {
    float: right;
    padding-top: 16px;
}
</style> 
<body>
    <div class="main">
        <h1>Login</h1>
        <h3>Enter your login credentials</h3>
        <form action="Login.php" method="POST">
            <label for="email">
                  Email:
              </label>
            <input type="email"
                   id="email"
                   name="email"
                   placeholder="Enter your Email" required>
 
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Enter your Password" required>
 
            <div class="wrap">
                <button type="submit"
                        onclick="solve()">
                    Submit
                </button>
            </div>
        </form>
        <p><span class="psw">Forgot <a href="ff.html">password?</a></span>

              
<label onclick="myFunction()"><a href="ss.php">Create an account</a>
</label>
           
        </p>
    </div>
</body>
 
</html>