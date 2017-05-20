<?php
	session_start(); 
    require_once('mysqli_connect.php');
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ingredients</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://use.fontawesome.com/6c5f8d3c8b.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!--- Style Sheet --->
    <link href="css/nav.css" rel="stylesheet" type="text/css">
	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/whhg.css">
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
    <link rel="stylesheet" href="css/recipepage.css">
    
    <!--JQuery Slider -->
    <style>
      .slideout-menu { left: auto; }
      .btn-hamburger { left: auto; right: 12px;}
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

    
    <div id="weo">
    <main id="panel" class="panel">
      <header class="panel-header">
          <div class="wedaBest col-md-12">
              <div class="img-container col-xs-1 col-md-1">
                  <a href="mobileindex.php"><div class="mvf">MV<div class="mvf1">F</div></div></a>
              </div>
          </div>
          <button class="btn-hamburger js-slideout-toggle" onclick="blurr()">
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
    <!--- End of Slider --->
    
    
     <div class="panel-group" id="accordion">
   <div class="container">
       <div class="row">
        <div data-parent="#accordion" data-toggle="collapse" data-target="#demo" class=" recipe-bg1"><p class="recipe">Curry Grilled Cheese<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
               
        </div>
           <div id="demo" class="collapse"><p class="recipeName">Description of recipe</p>
            
                <h3>Cook time</h3>
               <div><ul class="ingredients">
           
               </ul></div>
               <h3>Serving Size</h3>
                 <div><ol class="ingredients">
                     </ol>
                   </div>
               <div><button class="done">Get Recipe</button>  
               
           </div>
        
       </div>
    </div>
         </div>
    <div class="container">
       <div class="row">
        <div data-parent="#accordion" data-toggle="collapse" data-target="#demo1" class=" recipe-bg2" ><p class="recipe">Chicken Cordon Pasta<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo1" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
                    </ol>
                   </div>
               <div><button class="done">Get Recipe</button> 
                </div>
       </div>
    </div>
       </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg3" data-parent="#accordion" data-toggle="collapse" data-target="#demo2"><p class="recipe">Ham n Cheese Quiche<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo2" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
          
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
                    </ol>
                   </div>
               <div><button class="done">Get Recipe</button> 
                </div>
                 </div>
       </div>
    </div>

    <div class="container">
       <div class="row">
        <div class="recipe-bg4" data-parent="#accordion" data-toggle="collapse" data-target="#demo3"><p class="recipe">Egg Salad Sandwich<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo3" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
               
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
                 
                    </ol>
                   </div>
                 <div><button class="done">Get Recipe</button> 
                </div>
                 </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg" data-parent="#accordion" data-toggle="collapse" data-target="#demo4"><p class="recipe">Potato Salad<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo4" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
           
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
               
                    </ol>
                   </div>
                <div><button class="done">Get Recipe</button> 
                </div>
             </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg" data-parent="#accordion" data-toggle="collapse" data-target="#demo5"><p class="recipe">Fried Turkey n Waffles<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo5" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
              
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
                 
                    </ol>
                   </div>
                <div><button class="done">Get Recipe</button> 
                </div>
                </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg" data-parent="#accordion" data-toggle="collapse" data-target="#demo6"><p class="recipe">Italian Sausage n Potato Scramble<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo6" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
          
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
                 
                    </ol>
                   </div>
                <div><button class="done">Get Recipe</button> 
                </div>  </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg" data-parent="#accordion" data-toggle="collapse" data-target="#demo7"><p class="recipe">Roast Beef Sandwich<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo7" class="collapse"><p class="recipeName">Description of recipe</p>
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
        
               </ul></div>
               <h3>Serving side</h3>
                 <div><ol class="ingredients">
           
                    </ol>
                   </div>
                <div><button class="done">Get Recipe</button> 
                </div>  </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
        <div class="recipe-bg" data-parent="#accordion" data-toggle="collapse" data-target="#demo8"><p class="recipe">Curry Cream Pasta<i class="fa fa-chevron-down" aria-hidden="true"></i></p>
        </div>
           <div id="demo8" class="collapse"><p class="recipeName">Description of recipe</p>
               
               
                <h3>Cook time</h3>
               <div><ul class="ingredients">
             
               </ul></div>
               <h3>Serving size</h3>
                 <div><ol class="ingredients">
              
                    </ol>
                   </div>
                 <div><button class="done">Get Recipe</button> 
                </div>
                 </div>
       </div>
    </div>
         </div>
        </div>
    </main>
    </div>