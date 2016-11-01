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
        a {
            color: #5c2040;
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
          <a class="navbar-left"><img src="img/CraftingCorner.png" alt="Main Graphic" width="50"></a>
          <a class="navbar-brand" href="index.html">Suzie's Crafting Corner</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="directions.html">Directions</a></li>
            <li class="active"><a href="shop.html">Shop</a></li>
            <li><a href="sale.html">Sale</a></li>
            <li><a href="cart.html">Cart <span class="badge">3</span></a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="sign_up.html">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
        <div class="below_menu_container">
            <div class="page-header">
                <h1>Products</h1>
                <h1><small>We have a variety of different colored fabrics along with  pipe cleaners, buttons, and everyone's favorite, those little fuzz balls that are just oh so fun to play with!!</small></h1>
            </div>

            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                Be sure to check out our <a href="sale.html" class="alert-link">sales</a> page!
            </div>

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                <strong>Check out the hot items,</strong> they sell out fast!
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="img/redFabric.png" alt="Red Fabric" class="img-rounded"></td>
                        <td>Red Fabric</td>
                        <td>$3.99</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><img src="img/blueFabric.png" alt="Blue Fabric" class="img-rounded"></td>
                        <td>Blue Fabric</td>
                        <td>$3.99</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><img src="img/greenFabric.png" alt="Green Fabric" class="img-rounded"></td>
                        <td>Green Fabric</td>
                        <td>$3.99</td>
                        <td>0</td>
                    </tr>
                    <tr class="alert alert-success" role="alert">
                        <td><img src="img/patternFabric.png" alt="Pattern Fabric" class="img-rounded"></td>
                        <td>Pattern Fabric <span class="glyphicon glyphicon-fire" aria-hidden="true"></span></td>
                        <td>$5.99</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td><img src="img/pipeCleaners.png" alt="Pipe Cleaners" class="img-rounded"></td>
                        <td>Pipe Cleaners</td>
                        <td>$7.00</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td><img src="img/buttons.png" alt="Buttons" class="img-rounded"></td>
                        <td>Buttons</td>
                        <td>$1.75</td>
                        <td>7</td>
                    </tr>
                    <tr class="alert alert-success">
                        <td><img src="img/pompoms.png" alt="PomPoms" class="img-rounded"></td>
                        <td>PomPoms <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> </td>
                        <td>$2.50</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            
            <h5> <a href="sale.html">More Products...</a></h5>
            
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