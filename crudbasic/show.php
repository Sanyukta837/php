<?php

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','stdinfo');

    $conn = mysqli_connect("localhost", "root", "", "stdinfo");

    if($conn->connect_error){
      die("Connection failed". $conn->connect_error);
    }

    $sql = "select* from students";

    $show = mysqli_query($conn, $sql);
    ?>
    <table border ="1">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Action</th>
        <th>Edit</th>
      </tr>
    <?php
    if (mysqli_num_rows($show) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($show)) {
          echo "<tr><td>" . $row["std_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["phone"]. "</td><td><a href='delete.php?std_id=". $row["std_id"]."'>Delete </a></td>".
          "</td><td><a href='update.php?id=". $row["std_id"]."'>Edit </a></td>";
        }
      } else {
        echo "0 results";
      }



?>
</table>