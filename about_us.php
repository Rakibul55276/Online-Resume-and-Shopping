<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<div id="wowslider-container1">
  <div class="ws_images">
    <ul>
      <li><img src="data1/images/resume1.jpg" alt="Resume 1" title="Resume 1" id="wows1_0"/></li>
      <li><img src="data1/images/resume2.jpg" alt="Resume 2" title="Resume 2" id="wows1_1"/></li>
      <li><img src="data1/images/resume3.jpg" alt="Resume 3" title="Resume 3" id="wows1_2"/></li>
      <li><img src="data1/images/resume4.jpg" alt="Resume 4" title="Resume 4" id="wows1_3"/></li>
    </ul>
  </div>
  <div class="ws_bullets">
    <div>
      <a href="#" title="Resume 1"><span><img src="data1/tooltips/resume1.jpg" alt="Resume 1"/>1</span></a>
      <a href="#" title="Resume 2"><span><img src="data1/tooltips/resume2.jpg" alt="Resume 2"/>2</span></a>
      <a href="#" title="Resume 3"><span><img src="data1/tooltips/resume3.jpg" alt="Resume 3"/>3</span></a>
      <a href="#" title="Resume 4"><span><img src="data1/tooltips/resume4.jpg" alt="Resume 4"/>4</span></a>
    </div>
  </div>
  <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> by WOWSlider.com v8.5</div>
  <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<br>
<head>
  <meta content="width=320px, initial-scale=1, user-scalable=yes" name="viewport" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script type="text/javascript" src="custom.js"></script>
  <link type="text/css" rel="stylesheet" href="stylesheet.css" />
</head>
<br>
<br>
<div class="main-content">
  <!-- Your Content Here -->
  <p><a class="show-popup" href="#" data-showpopup="0" >History</a></p>
  <br>
  <p><a class="show-popup" href="#" data-showpopup="1" >Mission</a></p>
  <br>
  <p><a class="show-popup" href="#" data-showpopup="2" >Vission</a></p>
  <br>
</div>
<div class="overlay-bg"></div>
<div class="overlay-content popup3">
  <p>Click the links given for more information of SSG Mega Events.</p>
  <br><button class="close-btn">Close</button>
</div>
<div class="overlay-content popup0">
  <p>
  <h1>*History*</h1>
  <p><img src="owner.jpg" width=250px height=260px/>
  <h3>
  Welcome to "Sign Up for Creating Best Resume of Your Life by Resume Creater. We help fresh graduates or to create their own resume using this web page.</p>
  <br><button class="close-btn">Close</button>
</div>
<div class="overlay-content popup1">
  <p>
  <h1>*Mission*</h1>
  <p>
  <h3>
   Our vision to make user satisfy with their requirement. </p>
  <br><button class="close-btn">Close</button>
</div>
<div class="overlay-content popup2">
  <p>
  <h1>*Vission*</h1>
  <p>
  <h3>
  Our vision to make user satisfy with their requirement.</p>
  <br><button class="close-btn">Close</button>
</div>
<style>
  * {
  margin: 0;
  padding: 0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  body {
  font-family: 'Helvetica Neue','Helvetica', Arial, sans-serif;
  font-weight: bold;
  }
  .main-content {
  height: 120px;
  width: 300px;
  margin: 0 auto;
  }
  .overlay-bg {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  height:100%;
  width: 100%;
  cursor: pointer;
  z-index: 1000; /* high z-index */
  background: #000; /* fallback */
  background: rgba(0,0,0,0.75);
  }
  .overlay-content {
  display: none;
  background: linear-gradient(white,pink);
  padding: 1%;
  width: 40%;
  position: absolute;
  top: 15%;
  left: 50%;
  margin: 0 0 0 -20%; /* add negative left margin for half the width to center the div */
  cursor: default;
  z-index: 10001;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0,0,0,0.9);
  }
  .close-btn {
  cursor: pointer;
  border: 3px solid #CC0066;
  padding: 2% 5%;
  background: #a9e7f9; /* fallback */
  background: -moz-linear-gradient(top,  #CC0066 0%, #CC0066 4%, #CC0066 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a9e7f9), color-stop(4%,#77d3ef), color-stop(100%,#05abe0));
  background: -webkit-linear-gradient(top,  #a9e7f9 0%,pink 4%,#05abe0 100%);
  background: -o-linear-gradient(top,  #CC0066 0%,#CC0066 4%,#CC0066 100%);
  background: -ms-linear-gradient(top,  #CC0066 0%,#CC0066 4%,#05abe0 100%);
  background: linear-gradient(to bottom,  pink 0%,pink 4%,#05abe0 100%);
  border-radius: 4px;
  box-shadow: 0 0 4px rgba(0,0,0,0.3);
  }
  .close-btn:hover {
  background: linear-gradient(#CC098B, pink);
  }
  /* media query for most mobile devices */
  @media only screen and (min-width: 0px) and (max-width: 480px){
  .overlay-content {
  width: 96%;
  margin: 0 2%;
  left: 0;
  }
</style>
<script>
  $(document).ready(function(){
  
    // function to show our popups
    function showPopup(whichpopup){
        var docHeight = $(document).height(); //grab the height of the page
        var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
        $('.overlay-bg').show().css({'height' : docHeight}); //display your popup background and set height to the page height
        $('.popup'+whichpopup).show().css({'top': scrollTop+20+'px'}); //show the appropriate popup and set the content 20px from the window top
    }
  
    // function to close our popups
    function closePopup(){
        $('.overlay-bg, .overlay-content').hide(); //hide the overlay
    }
  
    //// timer if we want to show a popup after a few seconds.
    //get rid of this if you don't want a popup to show up automatically
    //setTimeout(function() {
    //    // Show popup3 after 2 seconds
    //    showPopup(3);
    //});
    
  
    // show popup when you click on the link
    $('.show-popup').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        var selectedPopup = $(this).data('showpopup'); //get the corresponding popup to show
         
        showPopup(selectedPopup); //we'll pass in the popup number to our showPopup() function to show which popup we want
    });
   
    // hide popup when user clicks on close button or if user clicks anywhere outside the container
    $('.close-btn, .overlay-bg').click(function(){
        closePopup();
    });
     
    // hide the popup when user presses the esc key
    $(document).keyup(function(e) {
        if (e.keyCode == 27) { // if user presses esc key
            closePopup();
        }
    });
  });
</script>