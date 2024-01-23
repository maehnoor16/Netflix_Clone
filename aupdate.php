<?php
include 'connection.php';
 $id=$_GET['id'];
 $select=" SELECT * from signup where id='$id'";
 $data=mysqli_query($conn,$select);
 $row=mysqli_fetch_array($data);
?>

<div>
     <form action="" method="POST">
            
        <input value="<?php echo $row['fname'] ?>"type="text" name="fname"><br><br>
        <input value="<?php echo $row['lname'] ?>"type="text" name="lname"><br><br>
        <input value="<?php echo $row['email'] ?>"type="text" name="email" ><br><br>
        <input value="<?php echo $row['password'] ?>" type="text" name="password" ><br><br>
        <input type="submit" name="update_btn" value="Update">
        <button><a href="display.php">Back</a></button>
    </form>
</div>

    <?php
    if(isset($_POST['update_btn']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $update="UPDATE  signup SET fname='$fname',lname='$lname',email='$email',password='$password' where id='$id'";
        $data=mysqli_query($conn,$update);
if($data)
{
    echo "Updated Succesfully";
}
else{
    echo "Update failed";
}
}
?>