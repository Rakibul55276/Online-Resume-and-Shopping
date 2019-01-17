<?php
    require('conn.php');
    
    $id = $_GET['iduser'];
    $sql = "DELETE FROM user WHERE idUser= $id";
    $conn->query($sql);
    header('location:index.php?menu=user');
    ?>