<?php
   require('conn.php');
   $iduser = $_SESSION['iduser'];
   
   $currentPassword = $_POST['currentPassword'];
   $newPassword = $_POST['newPassword'];
   
   $sql = "SELECT * FROM user WHERE iduser = $iduser";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   if($row['password']==$currentPassword){
       $sql = "UPDATE user SET password = '$newPassword' WHERE iduser = $iduser";
       $conn ->query($sql);
       ?>
<script>
   alert('YOUR PASSWORD CHNAGED SUCCESSFULLY!')
   window.location='index.php?menu=passwordchange'
</script>
<?php   
   }else{
       ?>
<script>
   alert('SORRY YOUR CURRENT PASSWORD IS WRONG!')
   window.location='index.php?menu=passwordchange'
</script>
<?php
   }
   ?>