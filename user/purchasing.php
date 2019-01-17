<style>
  button {
    border: 0;
    background:#CC0066 ;
    border-radius: 4px;
    box-shadow: 0 5px 0 #006599;
    color: white;
    cursor: pointer;
    font: inherit;
    margin: 10px;
    outline: 0;
    padding: 10px 10px;
    transition: all .1s linear;
  }
  
  button:active {
    box-shadow: 0 2px 0 #006599;
    transform: translateY(3px);
  }

  h1 {
    font-family:Times New Roman;
    font-style: italic;
    text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px #759994;
    text-align: center;
    text-decoration: underline;
  }      
</style>

<title>Template</title>
<body>
  <div id="bekas">
  <h1>Template</h1>
  <p style = "font-weight:bold">*Pleaes choose your Book</p>
  <form enctype="multipart/form-data" action="simpanPurchasing.php" method="post" onsubmit="return semak()">
  <table id="meja">
    <tr>
      <th>No</th>
      <th>Image</th>
      <th>Template name</th>
      <th>Type</th>
      <th>Price</th>
      <th>*Orders</th>
    </tr>
    <?php
      $bil = 1;
      $sql = "SELECT * FROM template ORDER BY idtemplate";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      while($row = mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $bil++;?></td>
      <td>
        <img src="templatepic.php?idtemplate=<?php echo $row['idtemplate'];?>" style="width:200px;height:200px;">
      </td>
      <td>
        <input type="hidden" name="<?php echo $bil;?>[template_name]" value="<?php echo $row['template_name']; ?>" />
        <?php echo $row['template_name'];?>
      </td>
      <td>
        <input type="hidden" name="<?php echo $bil;?>[type]" value="<?php echo $row['type']; ?>" />
        <?php echo $row['type'];?>
      </td>
      <td>
        <input type="hidden" name="<?php echo $bil;?>[price]" value="<?php echo $row['price']; ?>" />
        <?php echo $row['price'];?>
      </td>
      <td>
        <input type="checkbox" name="<?php echo $bil;?>[orders]"/>
      </td>
      </td>
    </tr>
    <?php
      }
      ?>
  </table>
  <button onclick="return sahkan()">Purchase</button>
  <script>
    $('#orders').focus()
    function semak(){
    	if($('#orders').val()==''){
    		alert('Please select your order')
    		$('#resume').focus()
    		return false
    	}else{
    		return true
    	}
    }
  </script>