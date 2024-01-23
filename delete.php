<?php
include 'connection.php';
$id=$_GET['id'];

$query=" DELETE from signup where id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "Data Deleted";
}
else{
    echo "Data Deletion Error";

}
?>
<button><a href="display.php">Back</a></button>