<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * from signup WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
        <div class="left">
                <img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
         </div>
        <div class="container">
        <div class="form"><br>
            <h1>Update your data</h1>
            <form action="" method="post" autocomplete="off">
                <label>First Name</label>
                <input type="text" value="<?php echo $row['fname'] ?>" name="fname" class="form-control" required>

                <label>Last Name</label>
                <input type="text" value="<?php echo $row['lname'] ?>"  name="lname" class="form-control" required>

                <label>Email</label>
                <input type="text" value="<?php echo $row['email'] ?>"  name="email" class="form-control" required>

                <label>Password</label>
                <input type="password" value="<?php echo $row['password'] ?>"  name="password" class="form-control" required>

                <input type="submit" name="update_btn" class="btn btn-primary" value="Update" required>

            </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST["update_btn"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
 $update = "UPDATE signup SET fname='$fname', lname='$lname', email='$email', password='$password' WHERE id='$id'";

    $data=mysqli_query($conn,$update);
    if ($data) {
        echo
    "alert('Update Successfully!!'); ";
        header('location: login.php');
    }
    else{
        echo "alert('Update Failed')";
    }
}
?>