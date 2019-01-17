<?php require('conn.php'); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Resume</title>
    <script src="jquery-1.11.1.min.js"></script>			
    <script src="info.js"></script>
    <script src="form3.js"></script>
    <script src="glDatePicker.js"></script>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    
    <link href="style_v_detailtemplate.css" rel="stylesheet" />
    <link href="styleTemplate.css" rel="stylesheet" />
    <link href="style_v_detailbook.css" rel="stylesheet"/>
    <link href="styleBook.css" rel="stylesheet"/>
    
    <style type="text/css">
      h3{
        font-family: Times New Roman ;
        font-style: normal;
        font-weight: bold;
        text-align: center;
    }
    
      table{
        font-family:Times New Roman;
        color:#CC0066; font-size: 11pt;
        font-style: normal;
        text-align:center;
        border-collapse: collapse;
        border: 2px black
    }
    
      table.inner{
        border: 0px;
    }
    </style>
  </head>
  <body style="background-image: url(k.jpg);">
    <table style="margin: auto; width: 1000px;box-shadow: 0 0 5px 5px #EF75C1;">
      <tr>
        <td><img src="banner1.jpg"/></td>
      </tr>
      <tr>
        <th style="color:#CC0066;height:50px;font-size: 15pt;">
          <div id='cssmenu'>
            <ul>
              <li><a href='index.php?menu=home'><span>Home</span></a></li>
              <li class='active has-sub'>
                <a href='#'><span>Details</span></a>
                <ul>
                  <li class='has-sub'>
                    <a href='#'><span>User</span></a>
                    <ul>
                      <li><a href='index.php?menu=info'><span>Users' Info</span></a></li>
                      <li><a href='index.php?menu=forum'><span>Forum Info</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class='active has-sub'>
                <a href='#'><span>Purchase</span></a>
                <ul>
                  <li class='has-sub'>
                    <a href='#'><span>Templates</span></a>
                    <ul>
                      <li class='last'><a href='index.php?menu=template'><span>Update</span></a></li>
                    </ul>
                  </li>
                  <li class='has-sub'>
                    <a href='#'><span>Books</span></a>
                    <ul>
                      <li class='last'><a href='index.php?menu=book'><span>Update</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class='active has-sub'>
                <a href='#'><span>Password</span></a>
                <ul>
                  <li><a href='index.php?menu=password'><span>Change Password</span></a></li>
                </ul>
              </li>
              <li class='last'><a href='http://localhost/tmt2654/web_project/index.php?menu=home'><span>Logout</span></a>
            </ul>
          </div>
      <tr style="height: 500px;background-image: url(box.gif);">
        <td style="vertical-align:top;box-shadow: 0 0 5px 5px #EF75C1;">
          <?php
            if(isset($_GET['menu'])){
                    $menu = $_GET['menu'];
            }else{
                    $menu = 'Home';
            }
            require("$menu.php");
            ?>   
        </td>
      </tr>
    </table>
  </body>
</html>