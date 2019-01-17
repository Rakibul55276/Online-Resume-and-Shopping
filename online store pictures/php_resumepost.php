$conn = mysqli_connect('localhost', 'root', '', 'web_Project') or die (mysqli_connect_error(  <?php   
  // variable declaration
  
  $name= "";
  $about= "";
  $website= "";
  $email= "";
  $phone= "";
  $location= "";
  $profile= "";
    $skill= "";
    $work= "";
  $award= "";
  $language= "";
  $interest= "";
  $reference= "";
  $_SESSION['success'] = "";
  $errors = array(); 

  // connect to database
$conn = mysqli_connect('localhost', 'root', '', 'web_Project') or die (mysqli_connect_error());$conn = mysqli_connect('localhost', 'root', '', 'web_Project') or die (mysqli_connect_error());


  if ( $con->connect_error){
    die('connection failed');
  } else


if (isset($_POST['postresume']))
  {
    // receive all input values from the form

  $name= $_POST ['name'];
  $about= $_POST ['about'];
  $website= $_POST ['website'];
  $email= $_POST ['email'];
  $phone= $_POST ['phone'];
  $location= $_POST ['location'];
  $profile= $_POST ['profile'];
  $skill= $_POST ['skill'];
  $work= $_POST ['work'];
  $award= $_POST ['award'];
  $language= $_POST ['language'];
  $interest= $_POST ['interest'];
  $reference= $_POST ['reference'];
  $username =$_SESSION['username'];

      
  $sql = "INSERT INTO resume (name, about, website, email, phone, location, profile, skill, work, award, language, interest, reference, username) VALUES('$name', '$about', '$website','$email',
   '$phone', '$location','$profile', '$skill', '$work', '$award', '$language', '$interest', '$reference', '$username')";
  //$query = mysql_query($con,$sql)


     
  if ($connect->query($sql) === TRUE)
    {
      $_SESSION['success'] = "Your resume is uploaded";
      array_push($errors, "Your Resume has been saved. Choose the theme to view your Resume");
    }else echo "wrong Sql Statement";


}


?>