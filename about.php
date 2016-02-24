<?php

  session_start();

    if (!(isset($_SESSION['uname']) && $_SESSION['uname'] != '')) 
    {

        header ("Location: index.php");
    }

?>
<html>
  <head>
    <title>Food Reduction | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style >
      fieldset
        {
          width:400px;
        }
      @media only screen and (max-width: 500px)  {
      fieldset{width:250px;}}

      html,body,div[data-role ="page"]
      {
        margin: 0px;
        padding: 0px;
      }
      p{
        text-align: justify;
      }
    </style>
  </head>
  <body>
      <div data-role="page" id="pageone" data-theme="b">
        <div data-role="header">
          <h3 >About App</h3>
            <a href="#menu" class="ui-btn ui-btn-inline ui-icon-bars ui-btn-icon-notext ui-corner-all ui-shadow" data-rel="panel"></a>
        </div>
        <div data-role="main" class="ui-content">
          <p>This app serves the purpose of donation of food and creates a link between the donor and the person who is in need of food.The app sends alerts to the person who are in need of food.So that he/she can fullfill his rquirements in time.</p>
          <center><p>For Further enquiries you can mail us at:</br><b>care.food@gmail.com<b></p></center>
          </br></br></br></br></br>
        </div>
        <div id="menu" data-role="panel">
          <ul data-role="listview" data-inset="true">
            <li><a href="menu.php" >Menu</a></li>
            <li><a href="contribution.php" data-ajax="false">My Contributions</a></li>
            <li><a href="FAQ.php"data-ajax="false">FAQ</a></li>
            <li><a href="contact.php">Feedback</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div> 
  </body>
</html>
