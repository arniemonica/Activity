<?php
	require'config.php';
	if(!empty($_SESSION["id"])){
	  header("Location: try.php");
	}
	if(isset($_POST["submit"])){
		$Name = $_POST["Name"];
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];
		$RePassword = $_POST["RePassword"];
		$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$Username'");
		
		$upper = preg_match('@[A-Z]@', $Password);
		$lower = preg_match('@[a-z]@', $Password);
		$num    = preg_match('@[0-9]@', $Password);
		$special = preg_match('@[^\w]@', $Password);

		
		if(mysqli_num_rows($duplicate)>0){
			echo "<script> alert('duplicate') </script>";
		}
		else{
			if(!$upper || !$lower || !$num || !$special || strlen($Password) < 8) {
				echo "<script> alert('Password should have a minimum of 8 Characters, have at least 1 Special characters, have at least 1 Number, and have at least 1 Letter $Password')</script>";
			}
			else{
				if($Password == $RePassword){
				  $query = "INSERT INTO users (Name, Username, Password) values('$Name','$Username','$Password')";
				  mysqli_query($conn, $query);
				  echo "<script> alert('Registration Successful'); </script>";
				}
				else{
				  echo "<script> alert('Password Does Not Match'); </script>";
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="LogIn.css">
    <title>Starbucks</title>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="LogIn.html"><img src="logo.png"></a>
            <a href="LogIn.html" class="logo">Starbucks</a>
            </nav>
        </header>
        <div class="center">
            <h1>Sign Up</h1>
            <form class="" action="" method="post" autocomplete="off">
                <div class="txt_field">
                    <input type="text" name="Name" id="Name" required>
                    <label>Name:</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="Username" id="Username" required>
                    <label>Username:</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="Password" id="Password" required>
                    <label>Password:</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="RePassword" id="RePassword" required>
                    <label>Re-Enter Password:</label>
                </div>
                <input type="submit" name="submit" value="Sign Up" onclick="getInfo()">
                <br>
                <br>
				<div class="login_link"><a href = "LogIn.php">Log In</a></div>
            </form>
        </div>
		
</body>
</html>