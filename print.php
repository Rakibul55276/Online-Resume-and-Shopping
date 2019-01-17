<?php
  require('user/conn.php');
?>
<style>
  h1 {
  font-family:Times New Roman;
  font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
  text-align: center;
  text-decoration: underline
  }
 
  #main {
    width:600px;
    height:500px;
    padding-top: 5px;
    display: -webkit-flex; /* Safari */
    -webkit-flex-flow: row wrap; /* Safari 6.1+ */
    -webkit-align-content: space-around; /* Safari 7.0+ */
    display: flex;
    flex-flow: row wrap;
    align-content: space-around;
    margin: auto;
    padding-left: 5px;
  }
  
  #main div {
    width:550px;
    height:300px;   
  }
</style>
<br><br>
<h1 style=margin:auto;>Registration Form</h1>
<?php
  $id = $_GET['id'];
  $sql = "SELECT * FROM user WHERE iduser = $id";
  $row =mysqli_fetch_assoc(mysqli_query($conn,$sql)) or die (mysqli_error($conn));
  ?>
<div id="main">
<div style="background:linear-gradient(white,#FF66CC );border:solid thick #8F006B; padding: 10px; margin: auto;">
  <table>
    <tr>
      <td>Name<br><br></td>
      <td>:<br><br></td>
      <td><?php echo $row['first_name'];?><br><br></td>
    </tr>
    <tr>
      <td>Surname<br><br></td>
      <td>:<br><br></td>
      <td> <?php echo $row['last_name'];?><br><br></td>
    </tr>
    <tr>
      <td>NRIC<br><br></td>
      <td>:<br><br></td>
      <td><?php echo $row['ic'];?><br><br></td>
    </tr>
    <tr>
      <td>Email<br><br></td>
      <td>:<br><br></td>
      <td> <?php echo $row['email'];?><br><br></td>
    </tr>
    <tr>
      <td>Gender<br><br></td>
      <td>:<br><br></td>
      <td> <?php echo $row['gender'];?><br><br></td>
    </tr>
    <tr>
      <td>Date of Birth<br><br></td>
      <td>:<br><br></td>
      <td><?php echo $row['date_of_birth'];?><br><br></td>
    </tr>
    <tr>
      <td>Username<br><br></td>
      <td>:<br><br></td>
      <td> <?php echo $row['username'];?><br><br></td>
    </tr>
  </table>
</div>
<form style= margin:auto; padding:10px; padding-left:1px>
  <input type="button" onClick="window.print()" value="Print This Page"/>
</form>