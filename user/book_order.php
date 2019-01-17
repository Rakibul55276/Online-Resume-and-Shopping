<style>
  h1 {
  font-family:Times New Roman;font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;text-align: center;text-decoration: underline;
  } 
</style>
<title>Book</title>
<body>
  <div id="bekas">
  <h1>Book</h1>
  <form enctype="multipart/form-data" action="simpanbook.php" method="post" onsubmit="return semak()">
  <input type="hidden" name="idbook_order" value="0" />
  <table id="meja">
    <tr>
      <th>No</th>
      <th>Book name</th>
      <th>Type</th>
      <th>Price(RM)</th>
      <th>Delete</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM book_order WHERE iduser = '$_SESSION[iduser]';";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td><?php echo nl2br($row['book_name']); ?></td>
      <td><?php echo nl2br($row['type']); ?></td>
      <td><?php echo $row['price']; ?></td>
      <td>
        <a href="deletebook.php?idbook_order=<?php echo $row['idbook_order']; ?>"
          onclick="return sahkan()"><img src="../clipart/delete1.png"
          style="width:20px;height:20px;" onclick="$('form').submit()" />
      </td>
    </tr>
    <?php
      }
      ?>
  </table>