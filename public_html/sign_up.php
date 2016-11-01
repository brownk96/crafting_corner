<!-- Taylor is navigator-->

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Suzie's Crafting Corner About</title>
    <!-- This says our CSS is compatible with phones, and phones
    don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
    <!-- Our custom stylesheet that WE write. We need this to not have our
         text appear under the nav bar. -->
    <link rel="stylesheet" href="css/allison_bootstrap_css.css">
    <style> 
        footer{

            bottom: 0px;
            height: 50px;
            left: 20px;
            position: absolute;
            right: 0;
       }
    </style>

</head>

<body>
        <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

            <!-- Three line "hamburger" icon for the collapsed navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Title on nav bar -->
          <a class="navbar-left"><img src="img/CraftingCorner.png" alt="Main Graphic" width="50" ></a>
          <a class="navbar-brand" href="index.html">Suzie's Crafting Corner</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="directions.html">Directions</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="sale.html">Sale</a></li>
            <li><a href="cart.html">Cart <span class="badge">3</span></a></li>
            <li><a href="login.html">Login</a></li>
            <li class="active"><a href="sign_up.html">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <div class="below_menu_container">
    <h2>Sign Up</h2>
    
    <form>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">  
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">           
        </div>
        <div class="radio">    
            <label><input type="radio" name="gender" value="male" id="male" checked>Male</label>
        </div>
        <div class="radio"> 
            <label><input type="radio" name="gender" value="female" id="female">Female</label>
        </div>
        <div class="radio"> 
            <label><input type="radio" name="gender" value="other" id="other">Other</label>   
        </div>
         <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">  
        </div>   
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">  
        </div> 
        <div class="form-group">
            <label for="passwordConfirm"> Confirm Password</label>
            <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Confirm Password">  
        </div>  
        <button type="submit" class="btn btn-info">Submit</button>          
    </form>



    
    <br>
    <footer>
        <p>&copy; 2016 Suzie's Crafting Corner. All rights reserved.</p>
    </footer>
    </div>
    </div>
        <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>