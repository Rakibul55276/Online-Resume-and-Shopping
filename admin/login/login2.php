<?php
require('admin/conn.php');
$idp = $_POST['idp'];
$kata = $_POST['kata'];

if($idp=='password'){
    $sql = "SELECT * FROM password";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($row['password']==$kata){
         echo $conn->error;
		$_SESSION['idp'] = $idp;
		header('location:admin/');
	}else{
		?>
		<script>
			alert('User ID or Password incorrect!')
			window.location='index.php?menu=login'
		</script>
		<?php
	}
}elseif($idp=='customer/'){
    header('location:user/');
}else{
    ?>
    <script>
        alert('User ID or Password incorrect!')
        window.location='index.php?menu=login'
    </script>
    <?php
}
?>
