<?php
  require('user/conn.php');
  
  $id = $_POST['username'];
  $password = $_POST['password'];
  
  if($id=='admin'){
  	$sql = "SELECT * FROM admin";
  	$result = $conn->query($sql);
  	$row = $result->fetch_assoc();
  	if($row['password']==($password)){
          echo $conn->error;
          $_SESSION['id'] = $id;
  		header('location:admin/');
      }else{
          ?>
<script>
  alert('USER ID OR PASSWORD WRONG !!')
  window.location='index.php?menu=login'
</script>

<?php
  }
  }else{
  $sql = "SELECT * FROM user WHERE username = '$id'";
  $result = $conn->query($sql);
  echo $conn->error;
  if($result->num_rows==1){
      $row = $result->fetch_assoc();
      if($row['password']==$password){
          $_SESSION['iduser'] = $row['iduser'];
          header('location:user/');
      }else{
          ?>
<script>
  alert('USER ID OR PASSWORD WRONG !!')
  window.location='index.php?menu=login'
</script>
<?php
  }
  }else{
  ?>
<script>
  alert('USER ID OR PASSWORD WRONG !!')
  window.location='index.php?menu=login'
</script>
<?php
  }
  }
  ?>