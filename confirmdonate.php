 <html>
  <head>
    <title>Food Reduction | Donate Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='images/icon.ico' />
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style>
      fieldset{width:400px;}
      @media only screen and (max-width: 500px) {
      fieldset{width:250px;}
      }
      html,body,div[data-role ="page"]
      {
        margin: 0px;
        padding: 0px; 
      }
    </style>
  </head>
    <body>
      <center>
      <div data-role="page" id="pageone" data-theme="b"> 
        <?php
          session_start();
          $submit = $_POST["submit"];
          $Items = " ";
          $Name = " ";
          $Name  = $_POST["Name"];
          $Items = $_POST["Items"];
          $address = $_POST["address"];
            if($submit)
              {
                //open database
                $connect = mysql_connect("localhost","root","rahul") or die("Couldn't connect");
                mysql_select_db("log") or die("Couldn't connect");
                $queryreg = mysql_query ("INSERT INTO donors VALUES('','$Name','$Items','$address',SYSDATE())");
                echo("</br></br></br></br></br></br></br></br></br></br></br>");
                echo ("<center><h3 style=>\" Great ! You have saved a life \"</h3></center>");
                //echo("<fieldset><a href='menu.php' data-role='button' data-theme='a' style='background-color:#00ff21'>Click here for menu</a></fieldset>");
                echo("<fieldset><h2><a href='menu.php'class=ui-btn>Click here for Menu</a></h2></fieldset>");
                //echo ("<center><h2>Bingo!!! You have been Registered !!</h2><br /></br /> <a href='menu.php'>Click here for menu</a></center>");   
              }
 	          else 
              {
                header("Location: menu.php");
                exit();
              }
        ?>
      </div>
    </body>
</html>
