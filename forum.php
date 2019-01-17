<style>
  h1 {
  font-family:Times New Roman;
  font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink;
  text-align: center; 
  }
</style>

<h1> Forum Information</h1>

    <table id="meja">
		<tr>
            <th><strong>Bil</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Message</strong></th>
            <th><strong>Date</strong></th>
		</tr>
            <?php
            $bill=1;
            $sql = "SELECT * FROM forum where idForum";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $bill++;?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
               <?php
               }
               ?>
    </table>
