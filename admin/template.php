<style>
  h1 {
    font-family:Times New Roman;
    font-style: italic;
    text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;
    text-align: center;
    text-decoration: underline;
  } 
</style>
<title>Books</title>
<div id="bekas">
  <h1 margin: center;>Template</h1>
  <br>
  <?php
    if(!isset($_GET['edit'])){
    	?>
  <form enctype="multipart/form-data" action="viewTemplate.php" method="post" onsubmit="return semak()">
    <input type="hidden" name="idTemplate" value="0" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
      <tr>
        <td>*Template Name</td><td>:</td>
		 <td><input type="text" name="template_name" id="template_name" maxlength="20" required /></td>
      </tr>
      <tr>
        <td>*Type</td><td>:</td>
		 <td><input type="text" name="type" id="type" maxlength="20" required /></td>
      </tr>
      
      <tr>
        <td>*Price(RM)</td><td>:</td>
        <td><input type="text" name="price" id="price"/></td>
      </tr>
      
      <tr>
        <td>*Book Image</td><td>:</td>
        <td><input type="file" name="templatepic" id="templatepic" required></td>
      </tr>
      
      <tr>
        <td colspan="3" style="text-align: center;">
          <input type="submit" value="submit" />
          <input type="button" value="reset" onclick="window.location='index.php?menu=template'" />
        </td>
      </tr>
    </table>
  </form>
  <?php
    }else{                    
    $idtemplate=$_GET['edit'];
    $sql = "SELECT * FROM template WHERE idtemplate= $idtemplate";
    $row =mysqli_fetch_assoc(mysqli_query($conn,$sql))or die(mysqli_error($conn));
    ?>
  <form enctype="multipart/form-data" action="viewTemplate.php" method="post" onsubmit="return semak()">
      <input type="hidden" name="idtemplate" value="<?php echo $idtemplate; ?>" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
        <tr>
          <td>*Template</td><td>:</td>
		  <td><input type="text" name="template_name" id="template_name" value="<?php echo $row['template_name'];?>" required />
		  </td>
        </tr>
        <tr>
        <td>*Type</td><td>:</td>
		 <td><input type="text" name="type" id="type" value="<?php echo $row['type'];?>" required /></td>
      </tr>
        <tr>
          <td>*Price(RM)</td><td>:</td>
		  <td><input type="text" name="price" id="price" value="<?php echo $row['price'];?>" required/></td>
        </tr> 

        <tr>
		  <td>*Template Image</td><td>:</td>
		  <td><input type="file" name="templatepic" id="templatepic" required></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" value="Submit" />
            <input type="button" value="Reset" onclick="window.location='index.php?menu=template'" />
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
      <th>TemplateName</th>
      <th>Type</th>
      <th>Price(RM)</th>
      <th>Editting</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM template ORDER BY idtemplate";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td><?php echo nl2br($row['template_name']);?></td>
      <td><?php echo nl2br($row['type']);?></td>
      <td><?php echo $row['price'];?></td>
      <td>
        <a href="index.php?menu=template&edit=<?php echo $row['idtemplate']; ?>"><img src="../clipart/edit2.png" style="width:20px;height:20px;" /></a>

     <?php
          if($row['status']=='view'){
          	?>
        <?php
          }else{
          	?>
        <a href="changestatus.php?idbook=<?php echo $row['idbook']; ?>&status=view">
        <img src="../clipart/visible1.png" style="width:20px;height:20px;" /></a>
        <?php
          }
          ?>
        &diams;
        <a href="deletetemplate.php?idtemplate=<?php echo $row['idtemplate']; ?>" onclick="return sahkan()"><img src="../clipart/delete1.png" style="width:20px;height:20px;" /></a>
      </td>
    </tr>
    <?php
      }
      ?>
  </table>
  <br/>
</div>
<script>
  function semak(){
      if($('#template_name').val()==''){
          alert('PLEASE ENTER YOUR TEMPLATE NAME')
          $('#template_name').focus()
          return false
        }else if($('#type').val()==''){
          alert('PLEASE ENTER TEMPLATE TYPE')
          $('#type').focus()
          return false
      }else if($('#price').val()==''){
          alert('PLEASE ENTER TEMPLATE PRICE HERE')
          $('#price').focus()
          return false
      }else if($('#templatepic').val()==''){
          alert('PLEASE UPDATE TEMPLATE PICTURE HERE')
          $('#templatepic').focus()
          return false
      }else{
          return true
      }
  }
</script>
