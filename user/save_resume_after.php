<?php
require('conn.php');

#echo '<pre>',print_r($_POST);
$idresume = (get_magic_quotes_gpc())? $_POST['id'] : addslashes($_POST['id']);
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


$sql = "UPDATE resume SET objective = '$objective', name = '$name', address = '$address', contact = '$contact', email = '$email', education = '$education', skill = '$skill', work = '$work', language = '$language', interest = '$interest', reference = '$reference' WHERE idresume = $idresume";
	//echo $sql; exit;
	mysqli_query($conn,$sql) or die (mysqli_error($conn));
	header('location:index.php?menu=edit_resume1');
?>