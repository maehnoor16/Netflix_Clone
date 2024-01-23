<?php
require 'connection.php';
if(isset($_POST["submit"])){
$email = $_POST["email"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email' ");
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)>0){
	if ($password == $row["password"]) {
        session_start();
		$_SESSION['login']=true;
		$_SESSION['id']=$row['id'];
		header("location: netflix.php");
	}
	else{
		echo
    "<script> alert('Wrong Password'); </script>";
	}

}
else{
     echo
    "<script> alert('User Not Registered!!'); </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Sign in Page</title>
    <link rel="stylesheet" href="LogIn-Style.css">
</head>
<body>
   <img src="background.jpg" alt="">
        <div class="left">
                <img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
            </div>
        <div class="container">
        <div class="form"><br>
            <h1>Sign In</h1>
        <form action="" method="post">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password" >
            <input type="checkbox">
            <label>Remember Me</label>
            <a href="#">Need Help?</a>
            <input type="submit" name="submit" class="btn btn-primary" required value="Sign In"></a><br><br>
            <br><label class="forget">Forgot Your Password?</label><br><br>
            <h3>New to Netflix?<a href="signup.php" style="text-decoration:none;color: blue;margin:0px;margin-right:130px;padding: 0px;">Sign up now</a></h3>
            <br><br>
            <p>This page is protected by Google reCAPTCHA to ensure you're not a bot. Learn more.</p>
        </div>
    </div>
    </form>
</body>
</html>