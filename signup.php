        <?php
        require 'connection.php';
        if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $card_number = $_POST["card_number"];
        $cvv = $_POST["cvv"];
        $edate = $_POST["edate"];
        $mydate = date('Y-m-d');  
        if ($edate < $mydate)
        {
            echo
            "<script> alert('Your card is expired, Please update it!!'); </script>"; }
        else{
            $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email'");
            if (mysqli_num_rows($duplicate) > 0){
                echo
            "<script> alert('This Email has already registered'); </script>";
            } 
            else{
            $query = "INSERT INTO signup VALUES('','$fname','$lname','$email','$password','$card_number','$cvv','$edate')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Successfull!!'); </script>"; } } }
        ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
            <div class="left">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
                </div>
            <div class="container">
            <div class="form"><br>
                <h1>Sign Up</h1>
                <p>Please fill this form to create an account.</p>
                <form action="" method="post" autocomplete="off">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" required>
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" required>
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <label>Card Number</label>
                    <input type="number" name="card_number" class="form-control" required>
                    <label>CVV
                    <input type="password" name="cvv" class="form-control" required></label>&nbsp;&nbsp;&nbsp;&nbsp;<label>Expiry Date<input type="date" name="edate" class="form-control" required></label>
                    <input type="submit" name="submit" class="btn btn-primary" required>
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </form>
            </div>
        </div>
    </body>
    </html>