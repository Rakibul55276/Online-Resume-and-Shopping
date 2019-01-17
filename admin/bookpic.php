<?php
    require('../user/conn.php');
    
    $id = $_GET['idbook'];
    $sql = "SELECT * FROM book WHERE idbook = $id";
    $row =mysqli_fetch_assoc(mysqli_query($conn,$sql))or die(mysqli_error($conn));
    
    header('Content-type: image/jpeg');
    echo $row['bookpic'];
    ?>