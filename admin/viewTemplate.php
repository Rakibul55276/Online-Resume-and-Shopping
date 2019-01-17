<?php
  require('conn.php');
  
  $id = $_POST['idtemplate'];
  $template_name = (get_magic_quotes_gpc())? $_POST['template_name'] : addslashes($_POST['template_name']);
  $type = (get_magic_quotes_gpc())? $_POST['type'] : addslashes($_POST['type']);
  $price = (get_magic_quotes_gpc())? $_POST['price'] : addslashes($_POST['price']);
  
  if(unik($id,$template_name)){
  	if($id==0) $sql = "INSERT INTO template VALUES (null,'$template_name', '$type', '$price','','view')";
  	else $sql = "UPDATE template SET template_name = '$template_name', type='$type', price = '$price' WHERE idtemplate = $id";
  	#echo $sql; exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	
  	if($id==0) $id = mysqli_insert_id($conn);
  	$pic = $_FILES['templatepic'];
  	if($pic['error']==0){
  	$fp = fopen($pic['tmp_name'],'r');
  	$picfile = fread($fp,filesize($pic['tmp_name']));
  	$picfile = mysqli_real_escape_string($conn,$picfile);
  	fclose($fp);
  	
  	$sql = "UPDATE template SET templatepic = '$picfile' WHERE idtemplate = $id";
  	#echo $sql; exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	}
  	header('location:index.php?menu=template');
  }else{
  	?>
    
    
<script>
  alert('THIS THEME ALREADY EXIST IN LIST')
  window.location='index.php?menu=template'
</script>

<?php
  }
function unik($id,$type){
  	global $conn;
  	if($id==0) $sql = "SELECT * FROM template WHERE idtemplate = '$id'";
  	else $sql = "SELECT * FROM template WHERE type = '$type' AND idtemplate != $id";
  	$result =mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	if(mysqli_num_rows($result)==0) return true; else return false;
  }
  ?>