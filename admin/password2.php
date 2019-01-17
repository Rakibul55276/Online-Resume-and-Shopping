<?php
  require('conn.php');
  
  $currentPassword = $_POST['currentPassword'];
  $newPassword = $_POST['newPassword'];
  
  $sql = "SELECT * FROM admin";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if($row['password']==$currentPassword){
      $sql = "UPDATE admin SET password = '$newPassword'";
      $conn ->query($sql);
      ?>
<script>
  alert('YOUR PASSWORD CHNAGED SUCCESSFULLY!')
  window.location='index.php?menu=password'
</script>
<?php   
  }else{
      ?>
<script>
  alert('SORRY YOUR CURRENT PASSWORD IS WRONG!')
  window.location='index.php?menu=password'
</script>
<?php
  }
  ?>