<?php
  require('conn.php');
  
  $idtemplate_order = $_GET['idtemplate_order'];
  $sql = "DELETE FROM template_order WHERE idtemplate_order = $idtemplate_order";
  mysqli_query($conn,$sql) or die (mysqli_error($conn));
  header('location:index.php?menu=template_order');
  ?>