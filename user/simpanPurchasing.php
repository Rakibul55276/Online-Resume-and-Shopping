<?php
   require('conn.php');
   //echo '<pre>',print_r($_POST); exit;
   
   foreach($_POST as $bill=>$record){
   	//echo '<br>',print_r($record);
   	if(isset($record['orders'])){
   		$iduser = $_SESSION['iduser'];
   		//$idtemplate_order = (get_magic_quotes_gpc())? $_POST['idtemplate_order'] : addslashes($_POST['idtemplate_order']);
   		$template_name = (get_magic_quotes_gpc())? $record['template_name'] : addslashes($record['template_name']);
   		$type = (get_magic_quotes_gpc())? $record['type'] : addslashes($record['type']);
   		$price = (get_magic_quotes_gpc())? $record['price'] : addslashes($record['price']);
         $sql = "INSERT INTO template_order VALUES (null, '$iduser', '$template_name','$type','$price')";
   		//echo $sql.'<br>';
   		mysqli_query($conn,$sql) or die (mysqli_error($conn));	
   	}
   }
   //exit;
   header('location:index.php?menu=template_order');
   ?>
<?php
   function unik($idtemplate_order,$iduser){
   	global $conn;
   	if($idtemplate_order==0) $sql = "SELECT * FROM template_order WHERE iduser = '$iduser'";
   	else $sql = "SELECT *FROM template_order WHERE iduser = '$iduser' AND idtemplate_order != $iduser";
   	$record = mysqli_query($conn,$sql) or die (mysqli_error($conn));
   	if(mysqli_num_rows($record)==0) return true;else return false;
   }
   ?>