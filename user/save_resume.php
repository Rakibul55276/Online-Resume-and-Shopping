<?php
require('conn.php');

$objective = (get_magic_quotes_gpc())? $_POST['objective'] : addslashes($_POST['objective']);
$name= (get_magic_quotes_gpc())? $_POST['name'] : addslashes($_POST['name']);
$address = (get_magic_quotes_gpc())? $_POST['address'] : addslashes($_POST['address']);
$contact = (get_magic_quotes_gpc())? $_POST['contact '] : addslashes($_POST['contact']);
$email = (get_magic_quotes_gpc())? $_POST['email'] : addslashes($_POST['email']);
$education = (get_magic_quotes_gpc())? $_POST['education'] : addslashes($_POST['education']);
$skill = (get_magic_quotes_gpc())? $_POST['skill'] : addslashes($_POST['skill']);
$work = (get_magic_quotes_gpc())? $_POST['work'] : addslashes($_POST['work']);
$language = (get_magic_quotes_gpc())? $_POST['language'] : addslashes($_POST['language']);
$interest = (get_magic_quotes_gpc())? $_POST['interest'] : addslashes($_POST['interest']);
$reference = (get_magic_quotes_gpc())? $_POST['reference'] : addslashes($_POST['reference']);


if(unik($username)){
  	 $sql = "INSERT INTO resume VALUES (null, '$objective','$name','$address','$contact','$email','$education','$skill','$work','$language','$interest','$reference')";
  	#echo $sql;exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	$id = mysqli_insert_id($conn);
  	header('location:index.php?menu=trial_resume_form&id='.$id);
  }else{
  	?>
<script>
  alert('Your information have been saved')
  window.location='index.php?menu=trial_resume_form';
</script>
<?php
  }
  
  function unik($idresume){
  	global $conn;
  	 $sql = "SELECT * FROM resume WHERE idresume= '$idresume'";
  	$result =mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	if(mysqli_num_rows($result)==0) return true; else return false;
  }
  ?>