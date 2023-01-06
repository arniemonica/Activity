<?php
	require'config.php';
	if(!empty($_SESSION["id"])){
	  header("Location: try.php");
	}
	if(isset($_POST["submit"])){
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];
		$result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$Username'");
		$row = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0){
			if($Password == $row['Password']){
				$_SESSION["login"] = true;
				$_SESSION["id"] = $row["User_ID"];
				header("Location: try.php");
			}
			else{
				echo "<script> alert('Wrong Password'); </script>";
			}
		}
		else{
			echo "<script> alert('User Not Registered'); </script>";
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
            <a href="#"><img src="logo.png"></a>
            <a href="#" class="logo">Starbucks</a>
            </nav>
        </header>
        <div class="center">
            <h1>Log In</h1>
             <form class="" action="" method="post" autocomplete="off">
                <div class="txt_field">
                    <input type="text" name="Username" id="Username" required>
                    <label>Username:</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="Password" id="Password" required>
                    <label>Password:</label>
                </div>
                <input type="submit" name="submit" value = "Login">
                <div class="signup_link"><a href="SignUp.php">Register</a></div>   
            </form>
        </div>
        <script src ="LogIn.js"></script>
</body>
</html>