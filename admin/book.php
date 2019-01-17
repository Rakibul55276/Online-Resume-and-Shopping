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
  <h1 margin: center;>Books</h1>
  <br>
  <?php
    if(!isset($_GET['edit'])){
    	?>
  <form enctype="multipart/form-data" action="viewBook.php" method="post" onsubmit="return semak()">
    <input type="hidden" name="idbook" value="0" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
      <tr>
        <td>*Book Name</td><td>:</td>
		 <td><input type="text" name="book_name" id="book_name" maxlength="20" required /></td>
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
        <td><input type="file" name="bookpic" id="bookpic" required></td>
      </tr>
      
      <tr>
        <td colspan="3" style="text-align: center;">
          <input type="submit" value="submit" />
          <input type="button" value="reset" onclick="window.location='index.php?menu=book'" />
        </td>
      </tr>
    </table>
  </form>
  <?php
    }else{                    
    $idbook=$_GET['edit'];
    $sql = "SELECT * FROM book WHERE idbook = $idbook";
    $row =mysqli_fetch_assoc(mysqli_query($conn,$sql))or die(mysqli_error($conn));
    ?>
  <form enctype="multipart/form-data" action="viewBook.php" method="post" onsubmit="return semak()">
      <input type="hidden" name="idbook" value="<?php echo $idbook; ?>" />
    <table style="text-align: left;" align = "center" cellpadding = "10">
        <tr>
          <td>*Book</td><td>:</td>
		  <td><input type="text" name="book_name" id="book_name" value="<?php echo $row['book_name'];?>" required />
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
		  <td><input type="file" name="bookpic" id="bookpic" required></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" value="Submit" />
            <input type="button" value="Reset" onclick="window.location='index.php?menu=book'" />
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
      <th>Book Name</th>
      <th>Type</th>
      <th>Price(RM)</th>
      <th>Editting</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM book ORDER BY idbook";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td><?php echo nl2br($row['book_name']);?></td>
      <td><?php echo nl2br($row['type']);?></td>
      <td><?php echo $row['price'];?></td>
      <td>
        <a href="index.php?menu=book&edit=<?php echo $row['idbook']; ?>"><img src="../clipart/edit2.png" style="width:20px;height:20px;" /></a>

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
        <a href="deletebook.php?idbook=<?php echo $row['idbook']; ?>" onclick="return sahkan()"><img src="../clipart/delete1.png" style="width:20px;height:20px;" /></a>
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
      if($('#book_name').val()==''){
          alert('PLEASE ENTER YOUR BOOK NAME')
          $('#book_name').focus()
          return false
        }else if($('#type').val()==''){
          alert('PLEASE ENTER BOOK TYPE')
          $('#type').focus()
          return false
      }else if($('#price').val()==''){
          alert('PLEASE ENTER TEMPLATE PRICE HERE')
          $('#price').focus()
          return false
      }else if($('#bookpic').val()==''){
          alert('PLEASE UPDATE BOOK PICTURE HERE')
          $('#bookpic').focus()
          return false
      }else{
          return true
      }
  }
</script>
