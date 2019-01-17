<?php
require('user/conn.php');

$first_name = (get_magic_quotes_gpc())? $_POST['first_name'] : addslashes($_POST['first_name']);
$last_name = (get_magic_quotes_gpc())? $_POST['last_name'] : addslashes($_POST['last_name']);
$ic = (get_magic_quotes_gpc())? $_POST['ic'] : addslashes($_POST['ic']);
$email = (get_magic_quotes_gpc())? $_POST['email'] : addslashes($_POST['email']);
$gender = (get_magic_quotes_gpc())? $_POST['gender '] : addslashes($_POST['gender']);
$username = (get_magic_quotes_gpc())? $_POST['username'] : addslashes($_POST['username']);
$password = (get_magic_quotes_gpc())? $_POST['password'] : addslashes($_POST['password']);

if(unik($username)){
  	 $sql = "INSERT INTO user VALUES (null, '$first_name','$last_name','$ic','$email','$gender','$username','$password')";
  	#echo $sql;exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	$id = mysqli_insert_id($conn);
  	header('location:index.php?menu=form3simpan&id='.$id);
  }else{
  	?>
<script>
  alert('This name already exists')
  window.location='index.php?menu=new_user'
</script>
<?php
  }
  
  function unik($username){
  	global $conn;
  	 $sql = "SELECT * FROM user WHERE username = '$username'";
  	$result =mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	if(mysqli_num_rows($result)==0) return true; else return false;
  }
  ?>