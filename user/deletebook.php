<?php
  require('conn.php');
  
  $idbook_order = $_GET['idbook_order'];
  $sql = "DELETE FROM book_order WHERE idbook_order = $idbook_order";
  mysqli_query($conn,$sql) or die (mysqli_error($conn));
  header('location:index.php?menu=book_order');
  ?>