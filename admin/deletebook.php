<?php
    require('conn.php');
    
    $id = $_GET['idbook'];
    $sql = "DELETE FROM book WHERE idbook= $id";
    $conn->query($sql);
    header('location:index.php?menu=book');
    ?>