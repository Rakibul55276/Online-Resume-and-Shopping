<style>
<style>
h1 {
   font-family:Times New Roman;
   font-style: italic;
   text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;
   text-align: center;
   text-decoration: underline 
}

div #bekas table tr td {
   text-align: left;
   font-family: Times New Roman;
   padding-left: 5px; 
}

table #meja tr th{
   text-align: left;
   border: 1px solid purple;
   font-family: Times New Roman;
   padding-left: 5px; 
}

table #meja tr td{
   border: 1px solid purple;
}
</style>
<title>Resume</title>
<body>          
    <div id="bekas">
         <h1>Resume</h1>                    
            <?php
               if(isset($_GET['edit'])){
                  $idresume = $_GET['edit'];
                  $sql = "SELECT * FROM resume WHERE idresume = $idresume";
                  $row =mysqli_fetch_assoc(mysqli_query($conn,$sql)) or die (mysqli_error($conn));
            ?>
            <form action="save_resume_after.php" method="post" onsubmit="return semak()">
              <input type="hidden" name="id" value="<?php echo $idresume; ?>" />
                <table>
                  <tr>
                    <td>Career Objective</td><td>:</td>
                    <td><textarea name="objective" id="objective"><?php echo $row['objective'];?></textarea></td>
                  </tr>
                  
                  <tr>
                    <td>Name</td><td>:</td>
                    <td><input type="text" name="name" id="name" value="<?php echo $row['name'];?>" /></td>
                  </tr>
                  
                  <tr>
                    <td>Address</td><td>:</td>
                    <td><textarea  name="address" id="address"><?php echo $row['address'];?></textarea></td>
                  </tr>
                  
                  <tr>
                    <td>Contact Details</td><td>:</td>
                    <td><textarea name="contact" id="contact"><?php echo $row['contact'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Email</td><td>:</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"/></td>
                  </tr>
        
                  <tr>
                    <td>Education</td><td>:</td>
                    <td><textarea name="education" id="education"><?php echo $row['education'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Skills</td><td>:</td>
                    <td><textarea  name="skill" id="skill"><?php echo $row['skill'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Works</td><td>:</td>
                    <td><textarea  name="work" id="work" ><?php echo $row['work'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Language</td><td>:</td>
                    <td><textarea  name="language" id="language" ><?php echo $row['language'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Interest</td><td>:</td>
                    <td><textarea  name="interest" id="interest"><?php echo $row['interest'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td>Reference</td><td>:</td>
                    <td><textarea  name="reference" id="reference"><?php echo $row['reference'];?></textarea></td>
                  </tr>
        
                  <tr>
                    <td colspan="2" style="text-align: center;">
                      <input type="submit" value="Submit"/>
                      <input type="button" value="Cancle" onclick="window.location='index.php?menu=edit_resume1'"/>
                    </td>
                  </tr>
                </table>
            </form>
      <?php
      }
      ?>
      <table id="meja">
        <tr>
          <td>No</td>
          <td>Objective</td>
          <td>Name</td>
          <td>Address</td>
          <td>Contact Details</td>
          <td>Email</td>
          <td>Education</td>
          <td>Skill</td>
          <td>Works</td>
          <td>Language</td>
          <td>Interest</td>
          <td>Reference</td>
          <td>Editing</td>
        </tr>
      <?php
         $bil = 1;
         $sql = "SELECT * FROM resume";
         $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
         while($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td><?php echo $bil++;?></td>
          <td><?php echo $row['objective']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['education']; ?></td>
          <td><?php echo $row['skill']; ?></td>
          <td><?php echo $row['work']; ?></td>
          <td><?php echo $row['language']; ?></td>
          <td><?php echo $row['interest']; ?></td>
          <td><?php echo $row['reference']; ?></td>
          <td><a href="index.php?menu=edit_resume1&edit=<?php echo $row['idresume']; ?>">EDIT</a></td>
        </tr>
        <?php
       }
       ?>
      </table>
       <br>
    </div>
</body>