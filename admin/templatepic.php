<?php
    require('../user/conn.php');
    
    $id = $_GET['idtemplate'];
    $sql = "SELECT * FROM template WHERE idtemplate = $id";
    $row =mysqli_fetch_assoc(mysqli_query($conn,$sql))or die(mysqli_error($conn));
    
    header('Content-type: image/jpeg');
    echo $row['templatepic'];
    ?>