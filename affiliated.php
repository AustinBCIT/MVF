<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Affiliated Apps</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!--- Style Sheet --->
     <link rel="stylesheet" href="css/affiliates.css">
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
          <?php
            if (isLoggedin()) {
            echo '<li><a href="fridgeMain.php">Fridge Contents</a></li>';
            echo '<li><a href="fridge.php">Add Ingredients</a></li>';
            } else {
                echo '<li><a href="logIn.php">Sign In</a></li>'; 
                echo '<li><a href="registermvp.php">Register</a></li>';   
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
                  <a href="mobileindex.php"><div class="mvf">MV<div class="mvf1">F</div></div></a>
              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
      </header>

        <!-- The slideout jquery navigation bar code-->
      
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
        
        <!--End of jquery slider code -->

        <!-- The affiliate app information -->
<div class="affiliate-container">
    <div class="title-container">
        <p>Affiliated Apps</p>
    </div>
         <div class="affiliates1 col-md-6 col-xs-12">
           <div class="row">
                    <div class="aff-image1 col-md-12 col-xs-12">
                        <a href=""><img class="meal" src="images/affiliates/mealio-app-logo2.png" style="border-radius: 15px;"></a>
                    </div>
            </div>    
            <div class="row">
                <div class="aff-content1 col-md-12 col-xs-12">
                    <a href="https://mealio-d047c.firebaseapp.com/">
                        <h4>Meal.io
                        </h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="aff-descrip col-xs-12 col-md-12">App to help families manage the food in their lives
                </div>
            </div>
        </div>
        <div class="affiliates col-md-6 col-xs-12">
            <div class="aff-image col-md-12 col-xs-12">
                <a href="http://take2foods.com/index.php?i=1"><img src="images/affiliates/take2-logo-2.png" style="border-radius:10px;"></a>
            </div>
            <div class="row">
                <div class="aff-content col-md-12 col-xs-12">
                    <a href="http://take2foods.com/index.php?i=1">
                        <h4>Take 2
                        </h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="aff-descrip col-xs-12 col-md-12">A website where you take two ingredients, and the user gets suggested recipes
                </div>
            </div>
        </div>
        
        <div class="col-md-3"></div>
        <div class="affiliates col-md-6 col-xs-12">
            <div class="row">
                <div class="aff-image col-md-12 col-xs-12">
                    <a href="http://eco-list.ca/index.html"><img src="images/affiliates/EcoLogo2%20-%20Copy.png" style="border-radius: 10px;"></a>
                </div>
            </div>
            <div class="row">
                <div class="aff-content col-md-12 col-xs-12">
                    <a href="http://eco-list.ca/index.html">
                        <h4>EcoList
                        </h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="aff-descrip col-xs-12 col-md-12">Grocery list and meal planner</div>
            </div>
        </div>
</div>
        
        <!-- End of affiliates information -->
        
    </main>
    </body>
</html>