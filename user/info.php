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

<title>INFORMATION</title>
   <body>          
      <div id="bekas">
         <h1>INFORMATION</h1>                    
            <?php
               if(isset($_GET['edit'])){
                  $iduser = $_GET['edit'];
                  $sql = "SELECT * FROM user WHERE iduser = $iduser";
                  $row =mysqli_fetch_assoc(mysqli_query($conn,$sql)) or die (mysqli_error($conn));
            ?>
               <form action="simpan.php" method="post" onsubmit="return semak()">
                  <input type="hidden" name="id" value="<?php echo $iduser; ?>" />
                     <table>
                        <tr>
                           <td>Name</td><td>:</td>
                           <td><input type="text" name="first_name" id="first_name" value="<?php echo $row['first_name'];?>" /></td>
                        </tr>
                            
                        <tr>
                           <td>Surname</td><td>:</td>
                           <td><input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name'];?>" /></td>
                        </tr>
                            
                        <tr>
                           <td>NRIC</td><td>:</td>
                           <td><input type="text" name="ic" id="ic" value="<?php echo $row['ic'];?>" /></td>
                        </tr>
                            
                        <tr>
                           <td>Email</td><td>:</td>
                           <td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>" /></td>
                        </tr>
                        
                        <tr>
                           <td>Gender</td><td>:</td>
                           <td><input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>" /></td>
                        </tr>
                     
                        <tr>
                           <td>Username</td><td>:</td>
                           <td><input type="text" name="username" id="username" value="<?php echo $row['username'];?>" /></td>
                        </tr>
                         
                         <br>
                            
                        <tr>  
                           <td colspan="2" style="text-align: center;">
                              <input type="submit" onclick="generationid()" value="SAVE" />
                              <input type="button" value="CANCEL" onclick="window.location='index.php?menu=info'"/>
                           </td>
                        </tr>
                     </table>
               </form>
               
            <?php
            }
            ?>
    
               
            <br>
				<table id="meja">
					<tr>
      <th><strong>Bil</strong></th>
      <th><strong>First Name</strong></th>
      <th><strong>Surname</strong></th>
      <th><strong>NRIC</strong></th>
      <th><strong>Email</strong></th>
      <th><strong>Gender</strong></th>
      <th><strong>Username</strong></th>
      <th><strong>Editing</strong></th>
      </tr>
      <?php
         $bil = 1;
         $sql = "SELECT * FROM user WHERE iduser= $iduser";
         $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
         while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
       <td><?php echo $bil++;?></td>
       <td><?php echo $row['first_name']; ?></td>
       <td><?php echo $row['last_name']; ?></td>
       <td><?php echo $row['ic']; ?></td>
       <td><?php echo $row['email']; ?></td>
       <td><?php echo $row['gender']; ?></td>
       <td><?php echo $row['username']; ?></td>
       <td><a href="index.php?menu=info&edit=<?php echo $row['iduser']; ?>">EDIT</a></td>
      </tr>
       <?php
       }
       ?>
     </table>
     <script>  
      function generationid(){
        
        var id1=document.getElementById("first_name").value;
        var id2=document.getElementById("last_name").value;
        var id3=document.getElementById("ic").value;
        
        var urid=id1.substr(0,1)+id2+id3.substr(8,11);
        document.getElementById("username").value = urid;
        console.log(urid);
      }
     </script>
    </div>
    
 </body>
   
  