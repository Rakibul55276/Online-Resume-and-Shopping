<?php require('user/conn.php'); ?>
<!DOCTYPE HTML>
    <html>
        <head>
          <title>RESUME</title>
          <script src="jquery-1.11.1.min.js"></script>			
          <script src="info.js"></script>
          <script src="form3.js"></script>
          <meta charset='utf-8'>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="styles.css">
          <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
          <link href="styleForum.css" rel="stylesheet">
          <script src="script.js"></script>
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
              <th style="color:#CC0066;height:50px;font-size: 15pt;">
                <div id='cssmenu'>
                  <ul>
                    <li><a href='index.php?menu=home'><span>Home</span></a></li>
                    <li><a href='index.php?menu=about_us'><span>About Us</span></a></li>
                    <li><a href='index.php?menu=forum'><span>Forum</span></a></li>
                    <li class='active has-sub'>
                      <a href='#'><span>New User</span></a>
                        <ul>
                          <li><a href='index.php?menu=new_user'><span>Registration Form</span></a></li>
                        </ul>
                    </li>
                    <li class='last'><a href='index.php?menu=login'><span>Login</span></a></li>
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