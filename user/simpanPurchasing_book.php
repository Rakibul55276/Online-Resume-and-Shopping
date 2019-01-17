<?php
   require('conn.php');
   //echo '<pre>',print_r($_POST); exit;
   
   foreach($_POST as $bill=>$record){
   	//echo '<br>',print_r($record);
   	if(isset($record['orders'])){
   		$iduser = $_SESSION['iduser'];
   		//$idbook_order = (get_magic_quotes_gpc())? $_POST['idbook_order'] : addslashes($_POST['idbook_order']);
   		$book_name = (get_magic_quotes_gpc())? $record['book_name'] : addslashes($record['book_name']);
   		$type = (get_magic_quotes_gpc())? $record['type'] : addslashes($record['type']);
   		$price = (get_magic_quotes_gpc())? $record['price'] : addslashes($record['price']);
         $sql = "INSERT INTO book_order VALUES (null, '$iduser', '$book_name','$type','$price')";
   		//echo $sql.'<br>';
   		mysqli_query($conn,$sql) or die (mysqli_error($conn));	
   	}
   }
   //exit;
   header('location:index.php?menu=book_order');
   ?>
<?php
   function unik($idbook_order,$iduser){
   	global $conn;
   	if($idbook_order==0) $sql = "SELECT * FROM book_order WHERE iduser = '$iduser'";
   	else $sql = "SELECT *FROM book_order WHERE iduser = '$iduser' AND idbook_order != $iduser";
   	$record = mysqli_query($conn,$sql) or die (mysqli_error($conn));
   	if(mysqli_num_rows($record)==0) return true;else return false;
   }
   ?>