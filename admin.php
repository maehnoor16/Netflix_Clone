<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'netflix');

 
  $name = "";
  $description = "";
  $genre= "";
  $image="";
  $id = 0;
  $update = false;


  if (isset($_POST['save'])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $genre = $_POST["genre"];
        $image=$_POST["image"];

    mysqli_query($db, "INSERT INTO movie (name, description,genre,image) VALUES ('$name', '$description','$genre','$image')"); 
    $_SESSION['message'] = "Info saved"; 
    header('location: admin.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>

<div class="container" style="width: 20%;">
  <h1>Table</h1>
  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="name">FName:</label>
    <input type="text" class="form-control m-2" id="name" name="fname">
    <label for="name">FName:</label>
    <input type="text" class="form-control m-2" id="name" name="lname">
    <label for="name">Email:</label>
    <input type="text" class="form-control m-2" id="name" name="email">
    

    <button type="submit" name="submit" class="btn btn-primary">Add</button>&nbsp;
    <button type="submit" name="submit" class="btn btn-info"><a href="display.php" style="text-decoration:none;color: white;">Display</a></button>
  </form>
</div>
</body>
</html>