<?php
require('conn.php');

#echo '<pre>',print_r($_POST);
$iduser = $_SESSION['iduser'];
$first_name = (get_magic_quotes_gpc())? $_POST['first_name'] : addslashes($_POST['first_name']);
$last_name= (get_magic_quotes_gpc())? $_POST['last_name'] : addslashes($_POST['last_name']);
$ic = (get_magic_quotes_gpc())? $_POST['ic'] : addslashes($_POST['ic']);
$email = (get_magic_quotes_gpc())? $_POST['email'] : addslashes($_POST['email']);
$gender = (get_magic_quotes_gpc())? $_POST['gender'] : addslashes($_POST['gender']);
$username = (get_magic_quotes_gpc())? $_POST['username'] : addslashes($_POST['username']);
$password = (get_magic_quotes_gpc())? $_POST['password'] : addslashes($_POST['password']);


$sql = "UPDATE user SET username = '$first_name', last_name = '$last_name', ic = '$ic', email = '$email', gender = '$gender' WHERE iduser = $iduser" ;
	//echo $sql; exit;
	mysqli_query($conn,$sql) or die (mysqli_error($conn));
	header('location:index.php?menu=info');
?>