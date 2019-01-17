<style>
  h1 {
  font-family:Times New Roman;font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;text-align: center;text-decoration: underline;
  } 
</style>
<title>Template</title>
<body>
  <div id="bekas">
  <h1>Template</h1>
  <form enctype="multipart/form-data" action="simpanTemplate.php" method="post" onsubmit="return semak()">
  <input type="hidden" name="idtemplate_order" value="0" />
  <table id="meja">
    <tr>
      <th>No</th>
      <th>Template name</th>
      <th>Type</th>
      <th>Price(RM)</th>
      <th>Delete</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM template_order WHERE iduser = '$_SESSION[iduser]';";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td><?php echo nl2br($row['template_name']); ?></td>
      <td><?php echo nl2br($row['type']); ?></td>
      <td><?php echo $row['price']; ?></td>
      <td>
        <a href="deletetemplate.php?idtemplate_order=<?php echo $row['idtemplate_order']; ?>"onclick="return sahkan()"><img src="../clipart/delete1.png"style="width:20px;height:20px;" onclick="$('form').submit()" />
      </td>
    </tr>
    <?php
      }
      ?>
  </table>