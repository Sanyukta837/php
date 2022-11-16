<?php

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','stdinfo');

    $conn = mysqli_connect("localhost", "root", "", "stdinfo");

    $fullname = $_POST['name'];
    $phone = $_POST['phone'];

    if($fullname=="" || empty($fullname) || $phone == "" || empty($phone)){
        echo "Something went wrong";
    }
    else{
    $sql = "insert into students(name, phone)values('$fullname','$phone')";

    mysqli_query($conn, $sql);
    }



?>
<a href="http://localhost/projects/web tech/studentform.php">Go Back </a>