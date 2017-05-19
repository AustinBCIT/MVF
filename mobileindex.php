<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MVF</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    
    <!-- Easter egg for desktop -->
    <script type="text/javascript" src="https://cdn.rawgit.com/mikeflynn/egg.js/master/egg.min.js"></script>
    
    <script src="jquery-3.2.1.min.js"></script>
    
    <!-- Style Sheet --> 
    <link rel="stylesheet" href="css/index.css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    
	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
    
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- JQuery Slider -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="index.css">
    <style>
      .slideout-menu { left: auto; }
      .btn-hamburger { left: auto; right: 12px; top: 0;}
      .box { height: 1500px; }
    </style>
    <script>
var egg = new Egg("up,up,down,down,left,right,left,right,b,a", function() {
  jQuery('#egggif').fadeIn(500, function() {
    window.setTimeout(function() { jQuery('#egggif').hide(); }, 5000);
  });
}).listen();
    </script>
    
    <script>
        var succ = 1;
        function blurr() {    
           var x = document.getElementById('weo');
            
            if (succ == 1) {
           x.style.webkitFilter="blur(2px)";
                succ = 0;
            } 
            else if (succ == 0) {
                x.style.webkitFilter="blur(0px)";
                succ = 1;
            }
            
            
        }
        
        
    </script>

    </head>
<body>
     <nav id="menu" class="menu">
        <header class="menu-header">
          <?php
            if (isLoggedin()) {
            echo $_SESSION["user"];
            }
          ?>
        </header>
     <section class="menu-section">
        <h3 class="menu-section-title">Navigation</h3>
        <ul class="menu-section-list">
          <li><a href="mobileindex.php">Home</a></li>
          <li><a href="logIn.php">Sign in</a></li>
          <li><a href="registermvp.php">Register</a></li>
          <?php
            if (isLoggedin()) {
            echo '<li><a href="fridgeMain.php">Fridge Contents</a></li>';
            echo '<li><a href="fridge.php">Add Ingredients</a></li>';
            }
          ?>
          <li><a href="realRecipes.php">Recipes</a></li>
          <li><a href="tips&tricks.php">Tips &amp; Tricks</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="affiliated.php">Affiliated Apps</a></li>
              <?php
                if (isLoggedin()){
                echo '<li><a href="logout.php">Logout</a></li>';
                }
              ?>
        </ul>
      </section>
    </nav>   
    <main id="panel" class="panel">
      <header class="panel-header">
          <div class="wedaBest col-md-12">
              <div class="img-container col-xs-1 col-md-1">

                  <a href="mobileindex.html"><div class="mvf">MV<div class="mvf1">F</div></div></a>


              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
      </header>

      
    <script src="dist/slideout.js"></script>
    <script>
      window.onload = function() {
        var slideout = new Slideout({
          'panel': document.getElementById('panel'),
          'menu': document.getElementById('menu'),
          'side': 'right'
        });

        document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
          slideout.toggle();
        });

        document.querySelector('.menu').addEventListener('click', function(eve) {
          if (eve.target.nodeName === 'A') { slideout.close(); }
        });
      };
    </script>
    <!--- End of Slider -->    
    <body> 
            <div class="title-container col-xs-12 col-md-12 ">
                <p class=" virtual-char">My Virtual Fridge</p>
            </div>
        <a href="#">
            <div class="pic-container col-xs-12">
                <a href="aboutus.html">
                
                    <div class="para-container col-xs-12 col-md-12">
                        <div class="about col-xs-12"><p>About Us<i class="glyphicon glyphicon-chevron-right"></i></p></div>
                    </div>
                    </a>
            </div>
        </a>
        <a href="#">
            <div class="pic-container1 col-xs-12">
                <a href="tips&tricks.html">
                    
                        <div class="para-container col-xs-12 col-md-12">
                            
                            <div class="tips col-xs-12"><p>Tips and Tricks<i class="glyphicon glyphicon-chevron-right"></i></p></div>
                        </div>
                    </a>
            </div>
        </a>
        <a href="#">
            <div class="pic-container2 col-xs-12 col-md-12">
                <a href="contact.html">
                
                    <div class="para-container col-xs-12 col-md-12">
                        
                        <div class="contact col-xs-12"><p>Contact Us<i class="glyphicon glyphicon-chevron-right"></i></p></div>
                    </div>
                </a>
            </div>
        </a>
         <a href="#">
            <div class="pic-container3 col-xs-12 col-md-12">
                <a href="realRecipes.html">
                
                    <div class="para-container col-xs-12 col-md-12">
                        
                        <div class="contact col-xs-12"><p>Recipes<i class="glyphicon glyphicon-chevron-right"></i></p></div>
                    </div>
                </a>
            </div>
        </a>
</body>
        
    </main>
    <img id="egggif" src="../MVF/images/liam.jpg" alt="meme">
    </html>    