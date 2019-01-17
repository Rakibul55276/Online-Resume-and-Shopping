<?php
    require('conn.php');
    
    $id = $_GET['idForum'];
    $sql = "DELETE FROM forum WHERE idForum= $id";
    $conn->query($sql);
    header('location:index.php?menu=forum');
    ?>