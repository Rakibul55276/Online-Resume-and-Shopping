<?php
require('conn.php');
?>
<style>
  h1 {
      font-family:Times New Roman;
      font-style: italic;
      text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
      text-align: center;
      text-decoration: underline;
   }
</style>

<h1>Registration Form</h1>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM resume WHERE idresume = $id";
$row =mysqli_fetch_assoc(mysqli_query($conn,$sql)) or die (mysqli_error($conn));
?>

<form Name="resume1_form" action="save_resume.php" method="post" onsubmit="return semak()">
    <table style="text-align: left;" align = "center" cellpadding = "10">
        
        <tr>
            <td>Career Objective</td><td>:</td><td><?php echo $row['objective'];?></td>
        </tr>
      
        <tr>
            <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
        </tr>
        
        <tr>
            <td>Address</td><td>:</td><td><?php echo $row['address'];?></td>
        </tr>
        
        <tr>
            <td>Contact Details</td><td>:</td><td><?php echo $row['contact'];?></td>
        </tr>
        
        <tr>
            <td>Email</td><td>:</td><td><?php echo $row['email'];?></td>
        </tr>
        
        <tr>
            <td>Education</td><td>:</td><td><?php echo $row['education'];?></td>
        </tr>
            
        <tr>
            <td>Skills</td><td>:</td><td><?php echo $row['skill'];?></td>
        </tr>
        
        <tr>
            <td>Works</td><td>:</td><td><?php echo $row['work'];?></td>
        </tr>
        
        <tr>
            <td>Language</td><td>:</td><td><?php echo $row['language'];?></td>
        </tr>
        
        <tr>
            <td>Interest</td><td>:</td><td><?php echo $row['interest'];?></td>
        </tr>
        
        <tr>
            <td>Reference</td><td>:</td><td><?php echo $row['reference'];?></td>
        </tr>
        
    </table>
        <br>
   <br>
      <a href="light-theme.php?id= <?php echo $id; ?>">Theme 1</a>
      <a href="dark-theme.php?id= <?php echo $id; ?>">Theme 2</a>

  </form>