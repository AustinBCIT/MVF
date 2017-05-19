<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fridge Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!--- Style Sheet --->
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/frideMain.css">
	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- jQuery slider -->
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
      .btn-hamburger { left: auto; right: 12px;}
      .box { height: 1500px; }   
    </style>
    
<!-- highlights the selected food icons so users can tell what they've selected -->
    <script>
    
        var count = 1;

function selected(){
	var food = document.getElementsByClassName('click')
	
	for(let i = 0; i < food.length; i++){
		food[i].onclick=function(){
    
            if (food[i].style.backgroundColor == "") {
			food[i].style.backgroundColor="#b1d0ca"
            
            }
            
             else {
            food[i].style.backgroundColor=""
    
        }
            
		}
	}
}

onload=selected

</script>
    </head>
<body id="length">
   <nav id="menu" class="menu">
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
                  <a href="mobileindex.php"><div class="mvf">MV<div class="mvf1">F</div></div></a>
              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
      </header>

    <!-- jQuery slider function -->  
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
    
   
    <!-- shelves of the fridge -->
    
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-md-2"><img onclick="selected()" class="click" class="img-responsive food" src="images/018-orange.png"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/013-cheese.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/012-grapes.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-12 shelf hidden-md hidden-lg"></div>
        <div class="col-xs-4 col-md-2"><img src="images/009-sandwich.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/008-lemon.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/007-pizza.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-12 shelf"></div>
        <div class="col-xs-4 col-md-2"><img src="images/006-raspberry.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/005-pineapple.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/004-cherries.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-12 shelf hidden-md hidden-lg"></div>
        <div class="col-xs-4 col-md-2"><img src="images/003-fries.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/002-chili.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/001-banana.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        
        <div class="col-xs-12 shelf hidden-md hidden-lg"></div>
        <div class="col-xs-4 col-md-2"><img src="images/003-fries.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/002-chili.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-4 col-md-2"><img src="images/001-banana.png" onclick="selected()" class="click" class="img-responsive food"/></div>
        <div class="col-xs-12 shelf"></div>
    </div>
    

    </div>
    
        
         <div class="fixPosition" class="panel-footer-fridge"><button id="removeButton">Get Recipes</button></div><div class="fixPosition" class="panel-footer-fridge"><button id="recipeButton">Remove</button></div>
    </main>
    </body>
</html>
    