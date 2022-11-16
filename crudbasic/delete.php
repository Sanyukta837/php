<?php

    $conn = mysqli_connect("localhost","root","","stdinfo");
    $id = $_GET["std_id"];

        $sql = "delete from students where std_id = $id";
        mysqli_query($conn,$sql);

?>
<h2>Delete Succesfull</h2>
<a href="http://localhost/projects/web tech/show.php">Go Back</a>