<style>
  h1 {
  font-family:Times New Roman;
  font-style: italic;
  text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink;
  text-align: center; 
  }
</style>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<!-- Start WOWSlider.com BODY section -->
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
<p>
<h1>Stay tune with our webpage</h1>
</p>
<p>
<h1>here we are conduct you to achieve your dreams...</h1>
</p>
<meta charset="utf-8">
<title>A JavaScript Clock</title>
<script type="text/javascript">
  window.onload = initClock;
   
  function initClock() {
    var now = new Date();
    var hr  = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    if (min < 10) min = "0" + min;  // insert a leading zero
    if (sec < 10) sec = "0" + sec;
    document.getElementById('clockDisplay').innerHTML
          = "Time is " + hr + ":" + min + ":" + sec;
    setTimeout('initClock()', 500);
  }
</script>
</head>
<body>
  <h3 id="clockDisplay"></h3>
</body>