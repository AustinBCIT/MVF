<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Fridge</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    <!--- Style Sheet --->
    <link rel="stylesheet" href="css/fridge.css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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
      .btn-hamburger { left: auto; right: 12px; top: 0;}
      .box { height: 1500px; }
    </style>
    
    
<!-- Highlight or unhighlight food icons when clicked on -->    
<script>
         
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
              <div class="img-container col-xs-1 col-md-2">
                  <a href="mobileindex.php"><div class="mvf">MV<div class="mvf1">F</div></div></a>
              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
        </header>

        <!-- jQuery slider -->
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
        <div class="col-md-5 col-xs-4 search-recipe">
        </div>

        <button type="button" id="succ" onclick="addIng()" class="btn btn-success recipe-button col-md-2 col-xs-4"> Find Recipes</button>

        <button type="button" class="btn btn-success recipe-button col-md-2 col-xs-4" id="buttons">Add to Fridge</button>

        
        <div class="something col-md-12">  
    <button class="accordion">
        <div class="col-md-11 col-xs-10">VEGETABLES
        </div>
        <div class="col-md-1 col-xs-1 icon-move">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
    </button>
     

<div class="panel">
    
    <input onclick="selected()" class="click" type="image" value="Mushrooms" id="fuck" src="images/veg/001-food-14.png">
    <input onclick="selected()" class="click" type="image" value="Chili" src="images/veg/002-chili.png">
    <input onclick="selected()" class="click" type="image" value="Pickle" src="images/veg/006-fruit-5.png">
    <input onclick="selected()" class="click" type="image" value="Radish" src="images/veg/007-food-9.png">
    <input onclick="selected()" class="click" type="image" value="Onion" src="images/veg/014-food-5.png">
    <input onclick="selected()" class="click" type="image" value="Broccoli" src="images/veg/015-broccoli.png">
    <input onclick="selected()" class="click" type="image" value="Tomato" src="images/veg/016-tomato.png">
    <input onclick="selected()" class="click" type="image" value="Lettuce" src="images/veg/019-salad.png">
    <input onclick="selected()" class="click" type="image" value="Carrot" src="images/veg/020-carrot.png">       
    <input onclick="selected()" class="click" type="image" value="Peas" src="images/veg/020-food-2.png">
   
        </div>

<div class="panel" >
    <img onclick="selected()" class="click" type="image" value="Mushrooms" src="images/veg/001-food-14.png">
    <img onclick="selected()" class="click" type="image" value="Chili" src="images/veg/002-chili.png" >
    <img onclick="selected()" class="click" type="image" value="Pickle" src="images/veg/006-fruit-5.png">
    <img onclick="selected()" class="click" type="image" value="Radish" src="images/veg/007-food-9.png">
    <img onclick="selected()" class="click" type="image" value="Onion" src="images/veg/014-food-5.png">
    <img onclick="selected()" class="click" type="image" value="Broccoli" src="images/veg/015-broccoli.png">
    <img onclick="selected()" class="click" type="image" value="Tomato" src="images/veg/016-tomato.png">
    <img onclick="selected()" class="click" type="image" value="Lettuce" src="images/veg/019-salad.png">
    <img onclick="selected()" class="click" type="image" value="Carrot" src="images/veg/020-carrot.png">       
    <img onclick="selected()" class="click" type="image" value="Peas" src="images/veg/020-food-2.png">
</div>


    <button class="accordion"><div class="col-md-11 col-xs-10">MEATS</div><div class="col-md-1 col-xs-1 icon-move"><i class="fa fa-chevron-down" aria-hidden="true"></i></div></button>
<div class="panel">
   <input onclick="selected()" class="click" type="image" src="images/meats/002-food-8.png" />
    <input onclick="selected()" class="click" type="image" src="images/meats/012-food-7.png"/>
    <input onclick="selected()" class="click" type="image" src="images/meats/012-turkey.png" />
    <input onclick="selected()" class="click" type="image" src="images/meats/001-food-7.png" />
    <input onclick="selected()" class="click" type="image" src="images/meats/009-food.png" />
    <input onclick="selected()" class="click" type="image" src="images/meats/003-food-6.png" />
</div>

            <button class="accordion"><div class="col-md-11 col-xs-10">FRUITS</div><div class="col-md-1 col-xs-1 icon-move"><i class="fa fa-chevron-down" aria-hidden="true"></i></div></button>
<div class="panel">
 
    <input onclick="selected()" class="click" type="image" src="images/fruit/001-banana.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/017-fruit.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/012-grapes.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/005-pineapple.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/006-raspberry.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/021-apple.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/018-orange.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/015-fruit-1.png" />
    <input onclick="selected()" class="click" type="image" src="images/fruit/017-strawberry.png" />
</div>
            <button class="accordion">
                <div class="col-md-11 col-xs-10">GRAINS
                </div>
                <div class="col-md-1 col-xs-1 icon-move">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
            </button>
<div class="panel">
   <input onclick="selected()" class="click" type="image" src="images/grains/008-food-1.png" />
    <input onclick="selected()" class="click" type="image" src="images/grains/007-food-2.png" />
    <input onclick="selected()" class="click" type="image" src="images/grains/005-food-4.png" />
    <input onclick="selected()" class="click" type="image" src="images/meats/009-food.png" />
</div>
            
    <button class="accordion">
        <div class="col-md-11 col-xs-10">DAIRY
        </div>
        <div class="col-md-1 col-xs-1 icon-move">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
    </button>
            
            
<div class="panel">
    <input onclick="selected()" class="click" type="image" src="images/dairy/019-cheese.png" />
    <input onclick="selected()" class="click" type="image" src="images/dairy/yogurt.jpg" style="background-color:#A1A194" />
    <input onclick="selected()" class="click" type="image" src="images/dairy/milk3.jpg" />
    <input onclick="selected()" class="click" type="image" src="images/dairy/butter8.jpg" />
</div>        
</div>
        
 
    
<!-- accordion function -->  
        
<script>
    
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
    </main>
    </body>
</html>
    
    
    
    
    
    
    
    
    