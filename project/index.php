<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Resume_Maker">
    <meta name="author" content="Mehedi">
    <title>RESUME</title>
    

    <link rel="stylesheet" href="./css/style.css">
    <script src="js/a.js"></script>
  
  </head>
  <body> 
     <div id ="particles-js"></div>
  <script type ="text/javascript" src ="js/particles.js"></script>
  <script type ="text/javascript" src ="js/particles.min.js"></script>
  <script type ="text/javascript" src ="js/app.js"></script>

    <header>
      <div class="container">
        <div id="branding">
          <img src="./img/blogo.png">
          
        </div>

         <nav>
          <ul>
            
            <li class="current"><a href="index.php"><img src="./img/home.png"><br>Home</a></li>
            <li><a href="Announcement.php"><img src="./img/menu.png"><br>Announcement</a></li> 
            <li><a href="resume.php"><img src="./img/order.png"><br>Resume</a></li>
            <li><a href="theme1.php"><img src="./img/theme.png"><br>Theme1</a></li>
            <li><a href="theme2.php"><img src="./img/theme.png"><br>Theme2</a></li>  

            
            <li><img src="./img/user.png"><br><?php echo $_SESSION['username']; ?></li>
            <li><a href="index.php?logout='1'"><img src="./img/logout.png"><br>Logout</a></li>
            

          </ul>
        </nav>
      </div>

    </header>

    <section id="showcase">
      <div class="container">
        
        <h1>Welcome to Resume Websites</h1>
        <p> Thank you for being with us </p>
      </div>
    
    </section>

  </div>



   <div class="container2">
    <setion id="boxes2">

        <div class="box1">
           <img src="./img/aboutus.png">
           <h1>About Us</h1>
           <ul>
            <li>Resume Builder was established for easy <br>to get proper Format</li>
            <li>It has been awarded best resume maker on 2018</li>
            <li>Operationg hour: 8am morning - 10pm night</li>
           </ul>

        </div>

        <div class="box2">
           <img src="./img/contactus.png">
            <h1>Contact Us</h1>
             <ul>
        
              <li>Email: resumemaker@xxxx.com</li>
              <li>Phone Number: +601XXXXXXX, +603XXXXXXX</li>
             </ul>

        </div>
    </section>

  </div>




    <footer>
      <p>Resume, Copyright &copy; 2018</p>
    </footer>




  </body>
</html>
