<style>
  h1 {
  font-family:Times New Roman;font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;text-align: center;text-decoration: underline 
  }
</style>
<title>INFORMATION</title>
<h1>Your Details</h1>
<?php
  $sql = "SELECT * FROM user WHERE iduser = $iduser";
  $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
  $row = mysqli_fetch_assoc($result);
  ?>
<table>
  <tr>
    <td>Name<br><br></td><td>:<br><br></td>
    <td><?php echo $row['first_name'];?><br><br></td>
  </tr>
  <tr>
    <td>NRIC<br><br></td><td>:<br><br></td>    
    <td><?php echo $row['ic'];?><br><br></td>
  </tr>
  <tr>
    <td>Email<br><br></td><td>:<br><br></td>
    <td><?php echo $row['email'];?><br><br></td>
  </tr>
</table>

<h1>Template</h1>
<table id="meja">
  <tr>
    <th>No</th>
    <th>Template name</th>
    <th>Type</th>
    <th>Price(RM)</th>
  </tr>
  <?php
    $overall = 0;
    $templateTotal =0;
     $bil = 1;
     $sql = "SELECT * FROM template_order WHERE iduser = $iduser";
     $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
     while($row = mysqli_fetch_assoc($result)){
     ?>
  <tr>
    <td><?php echo $bil++;?></td>
    <td><?php echo nl2br($row['template_name']); ?></td>
    <td><?php echo nl2br($row['type']); ?></td>
    <td><?php echo $row['price']; ?></td>
 </tr>
   <?php
   $templateTotal += $row['price'];
    $overall = 0;
    $overall += $templateTotal;
    }
    ?>
  <tr>
    <td></td>
    <td></td>
    <td>Total(RM)</td>
    <td><?php echo $templateTotal; ?></td>
  </tr>
</table>
<?php
  //$overall += $row;
  ?>
</div>

<h1>Book</h1>
<table id="meja">
  <tr>
    <th>No</th>
    <th>Book name</th>
    <th>Type</th>
    <th>Price(RM)</th>
  </tr>
  <?php
    $bookTotal = 0;
     $bil = 1;
     $sql = "SELECT * FROM book_order WHERE iduser = $iduser";
     $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
     while($row = mysqli_fetch_assoc($result)){
     ?>
  <tr>
    <td><?php echo $bil++;?></td>
    <td><?php echo nl2br($row['book_name']); ?></td>
    <td><?php echo nl2br($row['type']); ?></td>
    <td><?php echo $row['price']; ?></td>
  </tr>
  <?php
    $bookTotal += $row['price'];
    }
    ?>
  <tr>
    <td></td>
    <td></td>
    <td>Total(RM)</td>
    <td><?php echo $bookTotal; ?></td>
  </tr>
</table>
   <?php
    $overall += $bookTotal;
    ?>
</div>


<h3>Your Overall price : RM <?php echo $overall;?></h3>
<p style = "font-weight:bold">*Please click the button for payment After confirm a linked will be sent.</p>
<button onclick="window.location='index.php?menu=payment'">Payment</button>
<style>
  button {
  border: 0;
  background: #CC0066;
  border-radius: 4px;
  box-shadow: 0 5px 0 #006599;
  color: white;
  cursor: pointer;
  font: inherit;
  margin: 10px;
  outline: 0;
  padding: 10px 10px;
  transition: all .1s linear;
  }
  button:active {
  box-shadow: 0 2px 0 pink;
  transform: translateY(3px);
  }
</style>