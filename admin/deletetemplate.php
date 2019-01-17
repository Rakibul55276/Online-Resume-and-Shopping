<?php
    require('conn.php');
    
    $id = $_GET['idtemplate'];
    $sql = "DELETE FROM template WHERE idtemplate = $id";
    $conn->query($sql);
    header('location:index.php?menu=template');
    ?>