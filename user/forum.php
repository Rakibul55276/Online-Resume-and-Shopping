<style>
  h1 {
    font-family:Times New Roman;
    font-style: italic;
    text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;
    text-align: center;
    text-decoration: underline;
  } 
</style>
<title>Forum</title>
<div id="bekas">
  <h1 margin: center;>Forum</h1>
  <br>
  <?php
    if(!isset($_GET['edit'])){
    	?>
  <form enctype="multipart/form-data" action="viewForum.php" method="post" onsubmit="return semak()">
    <input type="hidden" name="idForum" value="0" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
     <tr>
        <td>Name</td><td>:</td>
		 <td><input type="text" name="name" id="name" maxlength="20" required /></td>
      </tr>
      <tr>
        <td>Subject</td><td>:</td>
		 <td><input type="text" name="subject" id="subject" maxlength="20" required /></td>
      </tr>
      <tr>
        <td>Message</td><td>:</td>
		 <td><textarea name="message" id="message" maxlength="20" required ></textarea></td>
      </tr>
      
      <tr>
        <td>Date</td><td>:</td>
        <td><input type="text" name="date" id="date"/></td>
      </tr>
      
      <tr>
        <td colspan="3" style="text-align: center;">
          <input type="submit" value="submit" />
          <input type="button" value="reset" onclick="window.location='index.php?menu=forum'" />
        </td>
      </tr>
    </table>
  </form>
  <?php
    }else{                    
    $idForum=$_GET['edit'];
    $sql = "SELECT * FROM forum WHERE idForum = $idForum";
    $row =mysqli_fetch_assoc(mysqli_query($conn,$sql))or die(mysqli_error($conn));
    ?>
  <form enctype="multipart/form-data" action="viewForum.php" method="post" onsubmit="return semak()">
      <input type="hidden" name="idForum" value="<?php echo $idForum; ?>" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
        <tr>
          <td>Name</td><td>:</td>
		  <td><input type="text" name="name" id="name" value="<?php echo $row['name'];?>"/>
		  </td>
        </tr>
        <tr>
        <td>Subject</td><td>:</td>
		 <td><input type="text" name="subject" id="subject" value="<?php echo $row['subject'];?>"/></td>
      </tr>
        <tr>
          <td>Message</td><td>:</td>
		  <td><textarea name="message" id="message"><?php echo $row['message'];?></textarea></td>
        </tr> 

        <tr>
		  <td>Date</td><td>:</td>
		  <td><input type="text" name="date" id="date" value="<?php echo $row['date'];?>"/></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" value="Submit" />
            <input type="button" value="Reset" onclick="window.location='index.php?menu=forum'" />
          </td>
        </tr>
      </table>
    </form>
  <?php
    }
    ?>
  <table id="meja">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Date</th>
      <th>Editting</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM forum ORDER BY idForum";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td><?php echo nl2br($row['name']);?></td>
      <td><?php echo nl2br($row['subject']);?></td>
      <td><?php echo $row['message'];?></td>
      <td><?php echo $row['date'];?></td>
      <td>
        <a href="index.php?menu=forum&edit=<?php echo $row['idForum']; ?>"><img src="../clipart/edit2.png" style="width:20px;height:20px;" /></a>

     <?php
          if($row['status']=='view'){
          	?>
        <?php
          }else{
          	?>
        <a href="changestatus.php?idForum=<?php echo $row['idForum']; ?>&status=view">
        <img src="../clipart/visible1.png" style="width:20px;height:20px;" /></a>
        <?php
          }
          ?>
        &diams;
        <a href="deleteforum.php?idForum=<?php echo $row['idForum']; ?>" onclick="return sahkan()"><img src="../clipart/delete1.png" style="width:20px;height:20px;" /></a>
      </td>
    </tr>
    <?php
      }
      ?>
  </table>
  <br/>
</div>
<!--<script>-->
<!--  function semak(){-->
<!--      if($('#name').val()==''){-->
<!--          alert('PLEASE ENTER YOUR NAME')-->
<!--          $('#name').focus()-->
<!--          return false-->
<!--        }else if($('#subject').val()==''){-->
<!--          alert('PLEASE ENTER SUBJECT')-->
<!--          $('#subject').focus()-->
<!--          return false-->
<!--      }else if($('#message').val()==''){-->
<!--          alert('PLEASE ENTER MESSAGE')-->
<!--          $('#message').focus()-->
<!--          return false-->
<!--      }else if($('#date').val()==''){-->
<!--          alert('PLEASE ENTER DATE')-->
<!--          $('#date').focus()-->
<!--          return false-->
<!--      }else{-->
<!--          return true-->
<!--      }-->
<!--  }-->
<!--</script>-->
