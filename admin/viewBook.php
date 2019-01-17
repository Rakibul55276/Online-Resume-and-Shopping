<?php
  require('conn.php');
  
  $id = $_POST['idbook'];
  $book_name = (get_magic_quotes_gpc())? $_POST['book_name'] : addslashes($_POST['book_name']);
  $type = (get_magic_quotes_gpc())? $_POST['type'] : addslashes($_POST['type']);
  $price = (get_magic_quotes_gpc())? $_POST['price'] : addslashes($_POST['price']);
  
  if(unik($id,$book_name)){
  	if($id==0) $sql = "INSERT INTO book VALUES (null,'$book_name', '$type', '$price','','view')";
  	else $sql = "UPDATE book SET book_name = '$book_name', type='$type', price = '$price' WHERE idbook = $id";
  	#echo $sql; exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	
  	if($id==0) $id = mysqli_insert_id($conn);
  	$pic = $_FILES['bookpic'];
  	if($pic['error']==0){
  	$fp = fopen($pic['tmp_name'],'r');
  	$picfile = fread($fp,filesize($pic['tmp_name']));
  	$picfile = mysqli_real_escape_string($conn,$picfile);
  	fclose($fp);
  	
  	$sql = "UPDATE book SET bookpic = '$picfile' WHERE idbook = $id";
  	#echo $sql; exit;
  	mysqli_query($conn,$sql) or die (mysqli_error($conn));
  	}
  	header('location:index.php?menu=book');
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