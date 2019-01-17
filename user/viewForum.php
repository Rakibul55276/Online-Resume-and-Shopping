<?php
  require('conn.php');
  
  $id = $_POST['idForum'];
  $name = (get_magic_quotes_gpc())? $_POST['name'] : addslashes($_POST['name']);
  $subject = (get_magic_quotes_gpc())? $_POST['subject'] : addslashes($_POST['subject']);
  $message = (get_magic_quotes_gpc())? $_POST['message'] : addslashes($_POST['message']);
  $date = (get_magic_quotes_gpc())? $_POST['date'] : addslashes($_POST['date']);

  if(unik($id,$name)){
  	if($id==0) $sql = "INSERT INTO forum VALUES (null,'$name', '$subject', '$message','$date','view')";
  	else $sql = "UPDATE forum SET name = '$name', subject='$subject', message = '$message', date='$date' WHERE idForum = $id";
  	#echo $sql; exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	header('location:index.php?menu=forum');
  }else{
  	?>
    
    
<script>
 alert('YOUR SAVE SUCCESSFULLY!')
  window.location='index.php?menu=forum'
</script>

<?php
  }
function unik($id,$name){
  	global $conn;
  	if($id==0) $sql = "SELECT * FROM forum WHERE idForum= '$id'";
  	else $sql = "SELECT * FROM forum WHERE name = '$name' AND idForum != $id";
  	$result =mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	if(mysqli_num_rows($result)==0) return true; else return false;
  }
  ?>