<style>
  h1 {
  font-family:Times New Roman;
  font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink;
  text-align: center; 
  }
</style>

<h1> User Information</h1>

    <table id="meja">
		<tr>
            <th><strong>Bil</strong></th>
            <th><strong>First Name</strong></th>
            <th><strong>Surname</strong></th>
            <th><strong>NRIC</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Gender</strong></th>
            <th><strong>View Full Information</strong></th>
            <th><strong>Editing</strong></th>
		</tr>
            <?php
            $bill=1;
            $sql = "SELECT * FROM user where iduser";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $bill++;?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['ic']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a href="index.php?menu=overall&view=<?php echo $row['iduser']; ?>"><img src="../clipart/view2.png" style="width:20px;height:20px;" /></a></td>
                    <td><a href="deleteuser.php?iduser=<?php echo $row['iduser']; ?>" onclick="return sahkan()"><img src="../clipart/delete1.png"style="width:20px;height:20px;" onclick="$('form').submit()"/> 
                    </td>
               </tr>
               <?php
               }
               ?>
    </table>
