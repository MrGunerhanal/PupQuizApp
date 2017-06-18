<?php session_start(); 

if(!isset($_SESSION["email"])){
	header( 'Location: ../iphone/index.php' );
} else{
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>London Craft Beer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="custom_javascript/googlemap.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMj5TM5FdebiCXViMgVwZvs5ZTjpxr0X0&callback=initMap"></script>
	<script src="custom_javascript/database.js"></script>
    <script src="custom_javascript/homepage.js"></script>
    <script src="custom_javascript/menu.js"></script>
    <script src="custom_javascript/poimap.js"></script>
    <script src="custom_javascript/poiquiz.js"></script>
    <link rel="stylesheet" href="css/themes/MainTheme.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>

<body>

 <div data-role="page" id="home" > 
  <!-- Homepage Header Content Starts -->
  <div data-role="header" data-theme="b">
    <a href="#menu" data-icon="bars" data-iconpos="notext" >Menu</a>
    <h1>London Craft Beer</h1>
  </div>
  <!-- Homepage Header Content Ends --> 
  
  <!-- Homepage Content Starts -->
  <div data-role="main" class="ui-content">
    <h2 class="center_header">Explore your nearby area:</h2>
    <a id="btn-explore" class="ui-btn ui-btn-b long-button">EXPLORE</a>
    
    <h2 class="center_header">OR<br>pick a general location:</h2>
    
    <div class="location_buttons_container">
        <a href="#towerquestions" class="ui-btn location_button button-tower-bridge">TOWER BRIDGE</a>
        <a href="#bigbenquestions" class="ui-btn location_button button-big-ben">BIG BEN</a>
        <a href="#btquestions" class="ui-btn location_button button-bt-tower">BT TOWER</a>
        <a href="#stpaulsquestions" class="ui-btn location_button button-st-pauls-cathedral">ST. PAUL'S CATHEDRAL</a>
        <a href="#palacequestions" class="ui-btn location_button button-buckingham-palace">BUCKINGHAM PALACE</a>
        <a href="#greenwichquestions" class="ui-btn location_button button-greenwich">GREENWICH</a>
        <p class="clear"></p>
    </div>
  </div>
  <!-- Homepage Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>

  <!-- Panel Overlay (Menu) Starts -->
  <div data-role="panel" data-position-fixed="true" id="menu" data-display="overlay">
      <ul data-role="listview">
          <li data-icon="false"><a href="#" id="menuheadera" ></a></li>
          <li data-icon="false"><a href="#" id="menuheaderb" ><?php echo $_SESSION["username"]; ?></a></li>
          <li><a href="#home" class="ui-btn ui-btn-icon-left ui-icon-home ui-alt-icon ui-nodisc-icon" id="menutesthome">Home</a></li>
          <li><a href="#points" class="ui-btn ui-btn-icon-left ui-icon-location ui-alt-icon ui-nodisc-icon" id="menutestpoints">Your Points</a></li>
          <li><a href="#favourites" class="ui-btn ui-btn-icon-left ui-icon-heart ui-alt-icon ui-nodisc-icon" id="menutestfavs">Favourite Pubs</a></li>
          <li><a href="#rules" class="ui-btn ui-btn-icon-left ui-icon-info ui-alt-icon ui-nodisc-icon" id="menutestrules">Game Rules</a></li>
          <li><a href="#settings" class="ui-btn ui-btn-icon-left ui-icon-gear ui-alt-icon ui-nodisc-icon" id="menutestsett">Settings & Newsletter</a></li>
          <li><a href="/iphone/php/logout_handle.php" class="ui-btn ui-btn-icon-left ui-icon-power ui-alt-icon ui-nodisc-icon" id="menutestlog" data-ajax="false">Log Out</a></li>
      </ul>
  </div>
  <!-- Panel Overlay (Menu) Ends --> 

<div data-role="page" id="poimap" > 
  
  <!-- POI Map Header Content Starts -->
   <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
    <!-- back button here -->
    <h1>London Craft Beer</h1>
  </div>
  <!-- POI Map Header Content Ends --> 
  
  <!-- POI Map Content Starts -->
  <div data-role="main" class="ui-content">
    <div id="poiheader">Pubs near <span id="pubs-area"><!-- Area goes here --></span></div>
    <div id="map">
	<!-- Map goes here -->
	</div>
	<div id="poi-map">
	<!-- Text goes here -->
    </div>
  </div>
  <!-- POI Map Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>

<div data-role="page" id="booking" >

  <!-- Booking Header Content Starts -->
  <div id="londoncraftbeer" data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
    <h1>London Craft Beer</h1>
  </div>
  <!-- Booking Header Content Ends -->
  <!-- Booking Content Starts -->
  
  <div id="bookheader">
	Book a Table at <span id="pubs-name"><!-- Pub goes here --></span>
  </div>
  
  <div id="imagehere">
  <span id="pubs-pic"><!-- Picture goes here --></span>
  <p></p>
  </div>
  
  	<div id="bookingdetailsheader">
    Booking details:
    </div>
    
	<div class="ui-field-contain" id="bookingdata">
    
    <fieldset class="ui-grid-a"> <!-- jQuery content formatting. Puts time/date on the same row. -->
    <div class="ui-block-a"> <!-- Left side grid -->
  	<label for="date">Date:</label>
	<input type="date" data-role="date" name="gimmiedate"> <!-- User must enter a date -->
    </div>
    
    <div class="ui-block-b"> <!-- Right side grid -->
    <label for="time">Time:</label>
	<input type="time" data-role="time" name="gimmietime"> <!-- User must enter a time -->
	</div>
    </fieldset> <!-- End fieldset so number of guests has its own row. -->
    
    <div>	
    <label for="guests">Number of guests:</label>
	<input type="number" data-role="number" name="gimmienumber"> <!-- User must enter a number -->
	</div>
	</div>
    
    <a href="payment.html" class="ui-btn ui-corner-all" id="booknow" data-ajax="false">BOOK NOW</a> <!-- Button goes to Payment page -->

	<!-- Footer to be used in every page. -->
	<div data-role="footer" data-position="fixed">
	<h4>London Craft Beer</h4>
	<h4>&copy; 2016 All rights reserved.</h4>
	</div>
	
	</div>

<div data-role="page" id="towerquestions">

  <!-- POI Questions Header Content Starts -->
  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
    <h1>London Craft Beer</h1>
    <a href="#popupTower" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- POI Questions Header Content Ends --> 
  
  <!-- POI Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/tower.jpg" class="image" height="350px" width="350px">
          
            
            <a href="#towerOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#towerTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupTower" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">Tower Bridge: Clue</h1>
        <p class="ui-title" align="left">
Tower Bridge is an iconic structure within Central London, accessible by foot or by vehicle. Alternatively, if you don’t need to cross the bridge, members of the public can visit the exhibition level of the bridge for a fee. From 2008 to 2012, the Bridge was given a makeover, receiving brand new blue and white paint and suspensions, as well as discrete LED luminaires, to illuminate the walkway. During the 2012 Olympics, the Bridge was lit a bright blue colour and had the Olympic rings hanging above the center of it. Tower Bridge is one of the most famous landmarks of London. Built between years 1886 and 1894, this suspension bridge helps over 40,000 people pass over the River Thames on a daily basis. The bridge is made of two towers, connected with two horizontal walkways, on the top and near the bottom of the towers.
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a> 
        </div>
        </div>
</div>
   
  </div>
  <!-- POI Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>

<!-- Next page goes here. -->
    
    <div data-role="page" id="towerOne" > 
  
  <!-- Tower Bridge Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- Tower Bridge Question one Header Content Ends --> 
  
  <!-- Tower Bridge Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: Tower Bridge</h1>
        <p align="center">Who designed the tower bridge?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="tower1" >
        <label for="tower1">Horace Jones
        </label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2b">
        <label for="radio-choice-v-2b">George Gilbert Scott</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2c">
        <label for="radio-choice-v-2c">Indigo Jones</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2d">
        <label for="radio-choice-v-2d">Augustus Pugin</label>
    </fieldset>
        <a href="#" class="ui-btn firstSubmit">Submit Your Answer</a>
  <!-- Tower Bridge Question one Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="towerTwo" > 
  
  <!-- Tower Bridge Question two Header Content Starts -->
  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- Tower Bridge Question two Header Content Ends --> 
  
  <!-- Tower Bridge Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: Tower Bridge</h1>
        <p align="center">How long it took to build Tower Bridge ?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2e">
        <label for="radio-choice-v-2e">5 years</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2f">
        <label for="radio-choice-v-2f">6 years</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2g">
        <label for="radio-choice-v-2g">7 years</label>
        <input type="radio" name="radio-choice-v-2" id="tower2">
        <label for="tower2">8 years</label>
    </fieldset> 
    <a href="#" class="ui-btn secondSubmit">Submit Your Answer</a>
         
  <!-- Tower Bridge Question two Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
    
    <div data-role="page" id="bigbenquestions">

  <!-- BigBen Questions Header Content Starts -->
  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
    <h1>London Craft Beer</h1>
    <a href="#popupBigBen" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- BigBen Questions Header Content Ends --> 
  
  <!-- BigBen Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/BigBen.png" class="image" height="350px" width="350px">
          
            
            <a href="#bigbenOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#bigbenTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupBigBen" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">Big Ben: Clue</h1>
        <p class="ui-title" align="left">Big Ben is an iconic clock tower in Central London, which has a distinctive chime every quarter hour. The chime is so popular, it is often used in some media, such as in ITV news bulletins. The tower was completed in 1855 and stands a grand 96 metres tall by the Palace of Westminster. It is open to tours, but only to UK residents and not overseas tourists, and bookings need to be done very early to enter. Be prepared to climb the stairs to make your way up the tower, as lifts won’t be implemented until new construction work in 2017! The clock is known for its accuracy, though its pendulum's center of mass is controlled by old coins. The clock’s former name was the Clock Tower, although this was changed following the Queen’s Diamond Jubilee, where it was given the new name of the Elizabeth Tower. In fact, the name “Big Ben” is actually the name of the largest bell in the tower. However, the name Big Ben is still used commonly to refer to the entire tower. The chimes that play quarterly are G♯, F♯, E, and B.
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a>    
        </div>
        </div>
</div>
   
  </div>
  <!-- BigBen Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
      <div data-role="page" id="bigbenOne" > 
  
  <!-- Bigben Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- Bigben Question one Header Content Ends --> 
  
  <!-- Bigben Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: Big Ben</h1>
        <p align="center">When was Big Ben completed?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2i">
        <label for="radio-choice-v-2i">10th April 1858</label>
        <input type="radio" name="radio-choice-v-2" id="bigben1">
        <label for="bigben1">31st May 1859</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2k">
        <label for="radio-choice-v-2k">11th July 1859</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2l">
        <label for="radio-choice-v-2l">15th January 1857</label>
    </fieldset>  
          <a href="#" class="ui-btn thirdSubmit">Submit Your Answer</a>
  <!-- Bigben Question one Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="bigbenTwo" > 
  
  <!-- Bigben Question two Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- Bigben Question two Header Content Ends --> 
  
  <!-- Bigben Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: Big Ben</h1>
        <p align="center">Who named Big Ben?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="bigben2">
        <label for="bigben2">Londoners</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2n">
        <label for="radio-choice-v-2n">Queen Victoria</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2o">
        <label for="radio-choice-v-2o">Winston Churchill</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2p">
        <label for="radio-choice-v-2p">Queen Elizabeth II</label>
    </fieldset>
         <a href="#" class="ui-btn fourthSubmit">Submit Your Answer</a>
  <!-- Bigben Question two Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
        <div data-role="page" id="btquestions">

  <!-- BT Tower Questions Header Content Starts -->
  <div data-role="header" data-theme="b">
    <!-- add a back button here -->
    <div data-role="header" data-add-back-btn="true" data-direction="reverse"></div>
    <h1>London Craft Beer</h1>
    <a href="#popupBt" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- BT Tower Questions Header Content Ends --> 
  
  <!-- BT Tower Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/BT.png" class="image" height="350px" width="350px">
          
            
            <a href="#btOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#btTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupBt" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">BT Tower: Clue</h1>
        <p class="ui-title" align="left">The BT Tower finished construction in 1964, becoming the largest building in London until being overtaken by the NatWest tower. Along with its size, it boasts a brightly lit, coloured light display that spans the whole width of the building, being a spectacle at night. It was originally open to the public, where visitors could admire the view while dining in London’s only revolving restaurant, until 1981. Although it is closed to the public, the tower is still used by clients like the BBC and advertising companies for carrying broadcast traffic and it is even being used in a study to monitor air quality. It took 3 years for the tower to be completed and it held its title of the largest building in London for 16 years after it was completed. The only time it was opened to the public after its closure in 1980 was on its 50th anniversary, and only 2440 lottery winners were allowed inside the 34th floor. 
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a>    
        </div>
        </div>
</div>
   
  </div>
  <!-- BT Tower Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
          <div data-role="page" id="btOne" > 
  
  <!-- BT Tower Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- BT Tower Question one Header Content Ends --> 
  
  <!-- BT Tower Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: BT Tower</h1>
        <p align="center">When was BT Tower constructed?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2q">
        <label for="radio-choice-v-2q">1968</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-24">
        <label for="radio-choice-v-24">1969</label>
        <input type="radio" name="radio-choice-v-2" id="bt1">
        <label for="bt1">1964</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-23">
        <label for="radio-choice-v-23">1967</label>
            <a href="#" class="ui-btn fifthSubmit">Submit Your Answer</a>
    </fieldset> 
  <!-- BT Tower Question one Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="btTwo" > 
  
  <!-- BT Tower Question two Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- BT Tower Question two Header Content Ends --> 
  
  <!-- BT Tower Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: BT Tower</h1>
        <p align="center">How many floors does BT Tower have?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="bt2">
        <label for="bt2">34</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-26">
        <label for="radio-choice-v-26">33</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2w">
        <label for="radio-choice-v-2w">36</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-27">
        <label for="radio-choice-v-27">30</label>
            <a href="#" class="ui-btn sixthSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- BT Tower Question two Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
        
        <div data-role="page" id="stpaulsquestions">

  <!-- BigBen Questions Header Content Starts -->
  <div data-role="header" data-theme="b">
    <!-- add a back button here -->
    <div data-role="header" data-add-back-btn="true" data-direction="reverse"></div>
    <h1>London Craft Beer</h1>
    <a href="#popupStPauls" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- BigBen Questions Header Content Ends --> 
  
  <!-- BigBen Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/StPaul's.png" class="image" height="350px" width="350px">
          
            
            <a href="#stPaulsOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#stPaulsTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupStPauls" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">ST Pauls Cathedral: Clue</h1>
        <p class="ui-title" align="left">St Paul’s cathedral was built as an Anglican Church in the late 1600s and early 1700s, sitting atop the highest point in the city: Ludgate Hill at a length of 175 metres. Its arguably most defining feature is its outer dome, which sits on top. Along with daily services, this church has been the location for the weddings and funerals of many famous British figures- such as the funeral of Winston Churchill and wedding of Charles, Prince of Wales. More recently, the Cathedral held celebrations for the Diamond Jubilee. Whilst those wanting to pray can enter for free, those looking to sightsee are required to pay for entry. The Cathedral went through 3 other iterations before its modern-day version was completed- the final iteration was designed by Christopher Wren from 1675 to 1711- he was alive during the lifecycle of the Cathedral's construction. The final stone was placed by one of his sons. 18 bells can be found inside.
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a>    
        </div>
        </div>
</div>
   
  </div>
  <!-- BigBen Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
          <div data-role="page" id="stPaulsOne" > 
  
  <!-- Bigben Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- Bigben Question one Header Content Ends --> 
  
  <!-- Bigben Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: St Pauls Cathedral</h1>
        <p align="center">How many bells are in the cathedral?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="st1">
        <label for="st1">18</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2r">
        <label for="radio-choice-v-2r">4</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2s">
        <label for="radio-choice-v-2s">1</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2t">
        <label for="radio-choice-v-2t">10</label>
            <a href="#" class="ui-btn seventhSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question one Content Ends -->
              
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="stPaulsTwo" > 
  
  <!-- Bigben Question two Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- Bigben Question two Header Content Ends --> 
  
  <!-- Bigben Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: St Pauls Cathedral</h1>
        <p align="center">Who designed the St Paul’s Cathedral?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2u">
        <label for="radio-choice-v-2u">Charles Barry</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2v">
        <label for="radio-choice-v-2v">Edwin Lutyens</label>
        <input type="radio" name="radio-choice-v-2" id="st2">
        <label for="st2">Christopher Wren</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2x">
        <label for="radio-choice-v-2x">Leslie Martin</label>
            <a href="#" class="ui-btn eigthSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question two Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>  
    
            <div data-role="page" id="palacequestions">

  <!-- BigBen Questions Header Content Starts -->
  <div data-role="header" data-theme="b">
    <!-- add a back button here -->
    <div data-role="header" data-add-back-btn="true" data-direction="reverse"></div>
    <h1>London Craft Beer</h1>
    <a href="#popupPalace" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- BigBen Questions Header Content Ends --> 
  
  <!-- BigBen Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/Palace.png" class="image" height="350px" width="350px">
          
            
            <a href="#palaceOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#palaceTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupPalace" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">Buckingham Palace: Clue</h1>
        <p class="ui-title" align="left">Located in Westminster, this palace houses many extravagant events, including garden parties and art exhibitions. Originally, it was intended as a townhouse for the Duke of Buckingham, giving it the name Buckingham House, before becoming “The Queen’s House”, before finally getting the name it holds today. Unlike many other landmarks within London, Buckingham Palace is usually not open to the public, except during some events, although it and its guards’ changing ceremony can be seen from outside the gates. The palace has 775 rooms in total, plus the largest private garden in London. Only the state rooms are occasionally open to the public, usually in August and September, or select days in the winter and spring seasons.
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a>    
        </div>
        </div>
</div>
   
  </div>
  <!-- BigBen Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
          <div data-role="page" id="palaceOne" > 
  
  <!-- Bigben Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- Bigben Question one Header Content Ends --> 
  
  <!-- Bigben Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: Buckingham Palace</h1>
        <p align="center"> Who was the first monarch to live in the Buckingham Palace?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2y">
        <label for="radio-choice-v-2y">Queen Elizabeth II</label>
        <input type="radio" name="radio-choice-v-2" id="palace1">
        <label for="palace1">Queen Victoria</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2aa">
        <label for="radio-choice-v-2aa">Queen Mary II</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2ab">
        <label for="radio-choice-v-2ab">George IV</label>
            <a href="#" class="ui-btn ninethSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question one Content Ends --> 
              
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="palaceTwo" > 
  
  <!-- Bigben Question two Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- Bigben Question two Header Content Ends --> 
  
  <!-- Bigben Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: Buckingham Palace</h1>
        <p align="center">How many rooms does Buckingham palace have?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="palace2">
        <label for="palace2">775</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2ad">
        <label for="radio-choice-v-2ad">312</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2ae">
        <label for="radio-choice-v-2ae">650</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2af">
        <label for="radio-choice-v-2af">821</label>
            <a href="#" class="ui-btn tenthSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question two Content Ends -->
         
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
    
    
    
                <div data-role="page" id="greenwichquestions">

  <!-- BigBen Questions Header Content Starts -->
  <div data-role="header" data-theme="b">
    <!-- add a back button here -->
    <div data-role="header" data-add-back-btn="true" data-direction="reverse"></div>
    <h1>London Craft Beer</h1>
    <a href="#popupGreenwich" data-icon="comment" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn-right"></a>
  </div>
  <!-- BigBen Questions Header Content Ends --> 
  
  <!-- BigBen Questions Content Starts -->
  <div data-role="main" class="ui-content">
        <div id="container" align="center">
            <h1 id="create-header" class="poiText" align="center"></h1>
          <img src="images/quiz/Greenwich.png" class="image" height="350px" width="350px">
          
            
            <a href="#greenwichOne" id="btn-submit" class="ui-btn ui-btn-b">QUESTION ONE</a>
            <a href="#greenwichTwo" id="btn-submit" class="ui-btn ui-btn-b">QUESTION TWO</a>
      </div>
      
      <div data-role="popup" id="popupGreenwich" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">Greenwich: Clue</h1>
        <p class="ui-title" align="left">This London district gets its name from one of the London docklands and its name can also be seen as part of Greenwich Mean Time, the mean solar time used in the U.K. If you cannot get here by car or train, it is accessible by boat as well- you may even see the famous Cutty Sark vessel on the way. Greenwich is home to many lavish houses that were developed- it was always a popular district for these to be built. Recently, it was made a Royal Borough- one of only 4 London boroughs to have this title. The name ‘Greenwich’ originates from the Anglo-Saxon equivalent: Grenewich, which means a green area where cows sit on the bay. This town saw many settlers from its beginnings to the present, including the Vikings, Normans, Tudors and Stuarts. 
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b popup-close" data-rel="back">BACK TO QUESTIONS</a>    
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b skip-quiz" data-rel="back">SKIP THE QUIZ</a>    
        </div>
        </div>
</div>
   
  </div>
  <!-- BigBen Questions Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
          <div data-role="page" id="greenwichOne" > 
  
  <!-- Bigben Question one Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
      <h1>London Craft Beer</h1>
        </div>
  <!-- Bigben Question one Header Content Ends --> 
  
  <!-- Bigben Question one Content Starts -->
        <h1 id="create-header" align="center">Question 1: Greenwich</h1>
        <p align="center">Who established Greenwich Meridian?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2ag">
        <label for="radio-choice-v-2ag">Ernst Georg Ravenstein</label>
        <input type="radio" name="radio-choice-v-2" id="green1">
        <label for="green1">Sir George Airy</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2ai">
        <label for="radio-choice-v-2ai">Nicholas Crane</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2aj">
        <label for="radio-choice-v-2aj">Roger Tomlinson</label>
            <a href="#" class="ui-btn eleventhSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question one Content Ends -->
              
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
     <div data-role="page" id="greenwichTwo" > 
  
  <!-- Bigben Question two Header Content Starts -->  <div data-role="header" data-theme="b" data-add-back-btn="true" data-direction="reverse">
             <h1>London Craft Beer</h1>
         </div>
  <!-- Bigben Question two Header Content Ends --> 
  
  <!-- Bigben Question two Content Starts -->
<h1 id="create-header" align="center">Question 2: Greenwich</h1>
        <p align="center">When was Greenwich Meridian established?</p>
        <fieldset data-role="controlgroup">
        <input type="radio" name="radio-choice-v-2" id="green2">
        <label for="green2">1851</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2al">
        <label for="radio-choice-v-2al">1844</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2am">
        <label for="radio-choice-v-2am">1872</label>
        <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2an">
        <label for="radio-choice-v-2an">1892</label>
            <a href="#" class="ui-btn twelwethSubmit">Submit Your Answer</a>
    </fieldset>
  <!-- Bigben Question two Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    <div data-role="page" id="points" > 
  <!-- Points one Header Content Starts -->
  <div data-role="header" data-theme="b">
    <a href="#menu" data-icon="bars" data-iconpos="notext" >Menu</a>
    <h1>London Craft Beer</h1>
  </div>
  <!-- Points one Header Content Ends --> 
  
  <!-- Points one Content Starts -->
            
     <div data-role="main" class="ui-content">
      <h1 id="create-header">Your Points</h1>
      <table width="100%">
          <tr>
              <td>
                  <p align="left">Total points gained</p>
              </td>
              <td>0</td>
          </tr>
          <tr>
              <td>      
                  <p align="left">Number of POIs unlocked</p>
              </td>
              <td>0</td>
          </tr>
      </table>
      
      <a href="#" id="btn-submit" class="ui-btn ui-btn-b">BACK TO THE GAME</a>
   </div>

  <!-- Points one Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
        <div data-role="page" id="settings" > 
  
  <!-- Settings one Header Content Starts -->
   <div data-role="header" data-theme="b">
    <a href="#menu" data-icon="bars" data-iconpos="notext" >Menu</a>
    <h1>London Craft Beer</h1>
  </div>
  <!-- Settings one Header Content Ends --> 
  
  <!-- Settings one Content Starts -->
            
      <div data-role="main" class="ui-content">
    <h1 id="create-header">Settings & Newsletter</h1>
    <div style="text-align: left">
      <h4>Account Settings</h4>
	</div>
    <label for="txt-username-create" id="txt-username-lbl">Username</label>
    <input type="text" name="txt-username-create" id="txt-username-create" value="" placeholder="eg. John Smith">
      
    <a href="#" id="btn-submit" class="ui-btn ui-btn-b">SAVE CHANGES</a>
      
      <h4>Newsletter Settings</h4>
      <input type="checkbox" name="checkbox-h-2c" id="checkbox-h-2c">
      <label for="checkbox-h-2c">I wish to receive a copy of the monthly newsletter</label>
          <a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-btn-b">Send a copy now</a>
      
   </div>
    

<div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; align:center;">
    <div data-role="header" data-theme="a">
    </div>
    <div role="main" class="ui-content">
            <h1 id="create-header">Send the newsletter</h1>
        <p class="ui-title" align="center">Are you sure you want to send the current copy of the newsletter to<br><br>
            johnsmith@hotmail.com
        </p>
        <div align="center">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back" data-transition="flow" style="background:#486b7e;">Send</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Cancel</a>    
        </div>
        </div>
</div>

  <!-- Settings one Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    
       <div data-role="page" id="rules" > 
  
  <!-- Rules page Header Content Starts -->
 <div data-role="header" data-theme="b">
    <a href="#menu" data-icon="bars" data-iconpos="notext" >Menu</a>
    <h1>London Craft Beer</h1>
  </div>
  <!-- Rules page Header Content Ends --> 
  
  <!-- Rules page Content Starts -->
            
  <div data-role="main" class="ui-content">
      <h1 id="create-header">Game Rules</h1>

      <p align="center">video will go here</p>
      
      
      <a href="#" id="btn-submit" class="ui-btn ui-btn-b">BACK TO THE GAME</a>
   </div>

  <!-- Rules page Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
    <div data-role="page" id="favourites" > 
  
  <!-- Favourites page Header Content Starts -->
 <div data-role="header" data-theme="b">
    <a href="#menu" data-icon="bars" data-iconpos="notext" >Menu</a>
    <h1>London Craft Beer</h1>
  </div>
  <!-- Favourites page Header Content Ends --> 
  
  <!-- Favourites page Content Starts -->
            
  <div data-role="main" class="ui-content">
      <h1 id="create-header">Favourites</h1>

      <p align="center">Favourites will go here</p>
   </div>

  <!-- Favourites page Content Ends -->
  
  <!-- Footer to be used in every page. -->
  <div data-role="footer" data-position="fixed">
    <h4>London Craft Beer</h4>
    <h4>&copy; 2016 All rights reserved.</h4>
  </div>
</div>
    
</body>
</html>
<?php } ?> 
