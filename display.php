<?php
include 'connection.php';

?>
<table border='1px' cellpadding="10" cellspacing="0"> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan='2'>Action </th>
    </tr>
    <?php
    $query= "SELECT * FROM signup";
    $data=mysqli_query($conn,$query);
    $result=mysqli_num_rows($data);
    if($result)
    {
        while($row=mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php 
                echo $row['fname'];
                ?></td>
                <td><?php 
                echo $row['lname'];
                ?></td>
                <td><?php 
                echo $row['email'];
                ?></td>
                <td><?php 
                echo $row['password'];
                ?></td>
                <td>
                    <button type="submit" name="submit" class="btn btn-info"><a style="color: white;" href="aupdate.php?id=<?php echo $row['id'];?>">EDIT</a></button>
                </td>
                <td>
                    <button type="submit" name="submit" class="btn btn-danger"><a style="color: white;" onclick=" return confirm('Are You Sure,You Want to Delete?')"href="delete.php?id=<?php echo $row['id'];?>">Delete</a></button>
                </td>
            </tr>
            <?php   
        }
    }
    else
    {
        ?>
        <tr>
            <td>NO RECORD FOUND</td>
        </tr>
        <?php
    }
    ?>
</table>