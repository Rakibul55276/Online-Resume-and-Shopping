<?php
  require('conn.php');
  $iduser = $_SESSION['iduser'];
  
  ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>RESUME</title>
    <script src="jquery-1.11.1.min.js"></script>
    <script src="skrip1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet" />
    <!--<link href="style1com.css rel="stylesheet"/>-->
    <link href=="styleForum.css" rel="stylesheet"/>
    <style type="text/css">
      h3{
        font-family: Times New Roman ;
        font-style: normal;
        font-weight: bold;
        text-align: center;
    }
    
      table{
        font-family:Times New Roman;
        color:#CC0066;
        font-size: 11pt;
        font-style: normal;
        text-align:center;
        border-collapse: collapse;
        border: 2px black
    }
    
      table.inner{
            border: 0px
        }
    </style>
  </head>
  <body style="background-image: url(k.jpg);">
    <table style="margin: auto; width: 1000px;box-shadow: 0 0 5px 5px #EF75C1;">
      <tr>
        <td><img src="banner1.jpg" /></td>
      </tr>
      <tr>
        <th style="color: #CC0066;height:50px;font-size: 15pt;">
          <div id='cssmenu'>
            <ul>
              <li class='active has-sub'>
                <a href='#'><span>User Details</span></a>
                <ul>
                  <li><a href='index.php?menu=info'><span>Your Profile</span></a></li>
                  <li><a href='index.php?menu=edit_resume1'><span>Your Resume</span></a></li>
                  <li><a href='index.php?menu=overall'><span>Overall Payment</span></a></li>
                </ul>
                
              <li class='active has-sub'>
                <a href='#'><span>Resume</span></a>
                <ul>
                  <li><a href='index.php?menu=choose'><span>Resume Theme</span></a></li>
                  <li><a href='index.php?menu=resume1'><span>Create Resume</span></a></li>
                </ul>
              </li>
              
              <li class='active has-sub'>
                <a href='#'><span>Purchase</span></a>
                <ul>
                  <li><a href='index.php?menu=purchasing'><span>Template</span></a></li>
                  <li><a href='index.php?menu=purchasing_book'><span>Book</span></a></li>
                </ul>
              </li>
              
              <li class='active has-sub'>
                <a href='#'><span>Forum</span></a>
                <ul>
                  <li><a href='index.php?menu=forum'><span>Update</span></a></li>
                </ul>
              </li>
              <li><a href='index.php?menu=passwordchange'><span>Change Password</span></a></li>

              <li class='last'><a href='../'><span>Logout</span></a>
            </ul>
          </div>
      <tr style="height: 500px;background-image: url(box.gif);">
        <td style="vertical-align: top;">
          <?php
            if(isset($_GET['menu'])){
            	$menu = $_GET['menu'];
            }else{
            	$menu = 'info';
            }
            require("$menu.php");
            ?>   
        </td>
      </tr>
      <tr>
        <th>
          <?php
            $sql = "SELECT * FROM user WHERE iduser = $iduser";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $row = mysqli_fetch_assoc($result);
            echo $row['first_name'];
            ?>
        </th>
      </tr>
    </table>
  </body>
</html>