<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "stdinfo");

    if($conn->connect_error){
      die("Connection failed". $conn->connect_error);
    }

    $id= $_GET['id'];
    $sql = "SELECT * FROM students where std_id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        $row = $result->fetch_assoc();

        ?>

    <form action="update.php" method="POST" >
        <input type="hidden" name="id" value="<?php  echo $id;?>">
        Name : <input type ="text" name="uname" value="<?php  echo $row['name']?>">
        <br>
        Phone : <input type ="text" name="uphone" value="<?php  echo $row['phone']?>">
        <br>
        <input type="submit">
    </form>
<?php
    }

    if (isset($_POST) & !empty($_POST)) {

    $name = $_POST['uname'];
    $phone = $_POST['uphone'];
    $id = $_POST['id'];
    $sql2= "UPDATE students set name='$name',phone = '$phone' where std_id = $id";
    mysqli_query($conn,$sql2);
    if($sql2){
        header('Location: show.php');
    }
}
?>

    
    
</body>
</html>