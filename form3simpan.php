<style>
  h1 {
      font-family:Times New Roman;
      font-style: italic;
      text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
      text-align: center;
      text-decoration: underline
   }

  #main {
      width:800px;
      height:450px;
      padding-top: 5px;
      display: -webkit-flex; /* Safari */
      -webkit-flex-flow: row wrap; /* Safari 6.1+ */
      -webkit-align-content: space-around; /* Safari 7.0+ */
      display: flex;
      flex-flow: row wrap;
      align-content: space-around;
      margin: auto;
      padding-left: 5px;
      text-align: left;
   }
   
  #main div {
      width:550px;
      height:250px;   
   }
   
   #main div img{
      width: 100%;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      padding-left: 250px;
   }
</style>

<h1>Registration Form</h1>
    
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE iduser = $id";
$row =mysqli_fetch_assoc(mysqli_query($conn,$sql)) or die (mysqli_error($conn));
?>
<div id="main">
<div style="background:linear-gradient(white,#FF66CC );border:solid thick #8F006B; padding: 10px; margin: auto;">
    <table>
        <tr>
            <td>Name</td><td>:</td><td><?php echo $row['first_name'];?></td>
        </tr>
        
        <tr>
            <td>Surname</td><td>:</td><td> <?php echo $row['last_name'];?></td>
        </tr>
        
        <tr>
            <td>NRIC</td><td>:</td><td><?php echo $row['ic'];?></td>
        </tr>
        
        <tr>
            <td>Email</td><td>:</td><td> <?php echo $row['email'];?></td>
        </tr>
        
        <tr>
            <td>Gender</td><td>:</td><td> <?php echo $row['gender'];?></td>
        </tr>
                
        <tr>
            <td>Username</td><td>:</td><td> <?php echo $row['username'];?></td>
        </tr>
        
        <tr>
            <td>Password</td><td>:</td><td> <?php echo $row['password'];?></td>
        </tr>
    </table>
    <br>
   <br>
      <a href="print.php?id= <?php echo $id; ?>"><img src="print.png" style="width:50px;height:50px; padding-bottom: 10px; margin: auto;"/></a>  
   </div>
   <br><br>
   <p>
      <h3>Welcome. You can Login right now...</h3>
   </p>