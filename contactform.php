        <?php
        require 'connection.php';
        if(isset($_POST["submit"]))
        {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $message= $_POST["message"];
        
            $duplicate = mysqli_query($conn, "SELECT * FROM form WHERE email='$email'");
            $data = "INSERT INTO form VALUES('','$fname','$lname','$email','$message')";
           mysqli_query($conn,$data);
            echo
            "<script> alert('Your message has sent Successfully!!'); </script>";
        }
 ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
            <div class="left">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
                </div>
            <div class="container">
            <div class="form"><br>
                <h1>Contact Form</h1>
                <p>Please fill this form</p>
                <form action="" method="post" autocomplete="off">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" required>

                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" required>

                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>

                    <label>Message</label>
                    <input type="message" name="message" class="form-control" required>

                    <input type="submit" name="submit" class="btn btn-primary" required>
                </form>
            </div>
        </div>
    </body>
    </html>