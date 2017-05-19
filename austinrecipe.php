<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fried Chicken</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!--- Style Sheet --->
    <link rel="stylesheet" href="css/recipe.css">
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
    
    <!-- The nav bar that interacts with the jquery slider -->
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

<!-- End of navigation -->    
    
    <main id="panel" class="panel">
      <header class="panel-header">
          <div class="wedaBest col-md-12">
              <div class="img-container col-xs-1 col-md-1">
                  <a href="mobileindex.php"><div class="mvf">MV<div class="mvf1">F</div></div></a>
              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle" style="border-radius:10px">
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

<div class="container"> 
    
    <div class="row">
    <div class="congrats">A developers secret recipe appeared!</div>
    </div>
    <div class="row">
     
        <div class="image-header img-fluid">
            <img src="images/friedchicken.jpg" style="border-radius:10px;">
           
        </div>
    </div>
    
    <div class="col-md-12 recipe-header">Fried Chicken</div>
    
    
    
    <div class="container container-border">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2 ingredients-header"><h2>Ingredients</h2></div>
        </div>
        
        <div class="row">
            
    
                <div class="col-md-12  ingredients-container">
                    <ul>
                        <li class="list-item">4 chicken breasts, boneless</li>
                        <li class="list-item">1 cup buttermilk</li>
                        <li class="list-item">2 cups flour</li>
                        <li class="list-item">1 Tsp paprika</li>
                        <li class="list-item">Salt and Pepper to taste</li>
                        <li class="list-item">8 cups vegtable oil</li>
                    </ul>
                </div>
            
        </div>
         <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2 directions-header"><h2>Directions</h2></div>
        </div>
        
        <div class="row">
          
            <div class="col-md-12 direction-container">
            <ol>
                <li class="list-item">Cut up the breasts into smaller pieces</li>
                <li class="list-item">Put flower in a plastic bag and season with paprika, salt, and pepper.</li>
                <li class="list-item">Dip the pieces of chicken in buttmilk then into the bag of flour. Shake the bag well and place chicken on a cookie sheet with wax paper.</li>
                <li class="list-item">Let the chicken sit until the flour is a paste like texture.</li>
                <li class="list-item">Fill a large skillet up half way with vegetable oil. Heat until very hot and put in as many pieces of chicken the skillet can hold.</li>
                 <li class="list-item">Brown the chicken on both sides, when browned reduce heat and cover skillet, let cook for 30 mins.</li>
                 <li class="list-item">Drain fried chicken on paper towels and serve!</li>
              
            </ol>
            </div>
        
        </div>
    </div>
</div>
    </main>    
    </body>
</html>