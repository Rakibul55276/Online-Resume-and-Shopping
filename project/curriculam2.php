<?php
$name=$_POST['name'];
$about=$_POST['about'];
$website=$_POST['website'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$profile=$_POST['profile'];
$skill=$_POST['skill'];
$work=$_POST['work'];
$award=$_POST['award'];
$language=$_POST['language'];
$interest=$_POST['interest'];
$reference=$_POST['reference'];





?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Curriculum Vitae</title>
<form action = "new.php" method="post">
</head>
<body>
<!-- Begin Wrapper -->

<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid"> 
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry"> 
          <!-- Begin Image --> 
         
          <!-- End Image --> 
          <!-- Begin Personal Information -->
          <div class="self">

            <div class="txt"> <h1><b>RESUME</b></h1></div>
            

            <br>
            <br>


            <ul>
              <li class="name"><span><?php echo $name ?></span></li><br>
              <li class="ad"><span><?php echo $about ?></span></li><br>
              <li class="web"><span><?php echo $website ?></span></li><br>
              <div><li class="mail"><span><?php echo $email ?></span></li></div>
              <br>
              <li class="tel"><span><?php echo $phone ?></span></li>
              <br>
 
              
            </ul>
          </div>
          <!-- End Personal Information --> 
        </div>
        <!-- Begin 1st Row -->
        
        <!-- End 1st Row -->
        <div class="entry">
          <h2>Location</h2>
          <!-- Variable Educacion -->
          <p><span><?php echo $location ?>  </span></p>
        </div>
        <!-- Begin 3rd Row -->
       
        <div class="entry">
          <h2>Profiles</h2>
          <p><span><?php echo $profile ?></span> </p>
        </div>

        <div class="entry">
          <h2>Skills</h2>
          <p><span><?php echo $skill ?></span> </p>
        </div>
        <div class="entry">
          <h2>Works</h2>
          <p><span><?php echo $work ?></span> </p>
        </div>
        <div class="entry">
          <h2>Awards</h2>
          <p><span><?php echo $award ?></span> </p>
        </div>
        <div class="entry">
          <h2>Language</h2>
          <p><span><?php echo $language ?></span> </p>
        </div>
        <div class="entry">
          <h2>Interest</h2>
          <p><span><?php echo $interest ?></span> </p>
        </div>
        <!-- End 4th Row -->
        <div class="entry">
          <h2>Reference </h2>
          <p><span><?php echo $reference ?></span></p>
        </div>
        <!-- Begin 5th Row --> 
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper --> 
  </div>
  <div class="wrapper-bottom"></div>

  <div class="content">
        <a class="resume" href="resume.php">Edit</a> 
      </div>
</div>
<!-- End Wrapper -->

</body>
</html>