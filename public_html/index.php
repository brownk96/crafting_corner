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
    .jumbotron {
      margin-bottom: 0px;
      padding-bottom: 5px;
      background-image: url("img/balloons.jpg");
      background-position: 0% 25%;
      background-size: cover;
      background-repeat: no-repeat;
      color: white;
      text-shadow: black 0.3em 0.3em 0.3em;

    }
    .lead {
      color: white;
      margin-top: 10%;
      margin-bottom: 0px;
      padding-bottom: 0px;
    }
    </style>
</head>

<body>

    <?php include "../resources/navigation.php"; ?>

    <div class="container">
        <div class="below_menu_container">
            <div class="jumbotron">
                <h2 style="color: white; font-size:48px;">Are you CUT out for the crafting game?</h2>
                <p class="lead">
                It takes a special kind of person to craft. Whether you're stocking up to make your own clothing during the zombie apocalypse or just want to make pipe cleaner headsets, Crafting Corner is the place for you!
                </p>
                <p>
                  <a class="btn btn-lg btn-info" href="shop.html" role="button">Shop</a>
                </p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-s-6 col-md-6">
                    <h2 style="color: #772953;">Crafting Supply of the Month</h2>
                    <br>
                    <img src="img/sewingMachine.png" alt="Supply of the Month" height="400">
                </div>
                <br>
                <br>
                <div class="col-xs-12 col-s-6 col-md-6">
                    <p style="font-size: 16px;"> This month we are featuring the Sewing8000 Sewing Machine. While similar to its predecessor Sewing7999, the Sewing8000 costs only $6000! That's less than half the price of the previous version! In addition to being cheaper, the Sewing8000 comes with incredible features. It has easy threading so there's no longer any need to worry about pricking your fingers! Also, the Sewing8000 features SewingWorld's new technology IntuiSew! The days of needing pedals are over! Now just put the fabric up to the needle and it does all the work! You almost don't even need to be there at all! With the Sewing8000, sewing is easier than ever! Pick one up in our store today!
                    </p>
                    <hr>
                    <div class="review-block">
                      <div class="row">
                        <div class="col-sm-3">
                          <img src="img/review.png" alt="User Review" class="img-rounded">
                          <div class="review-block-name"><a href="#">ashtynem</a></div>
                          <div class="review-block-date">October 4, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                          <div class="review-block-rate">
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                          </div>
                          <div class="review-block-title">Go buy it!</div>
                          <div class="review-block-description">This sewing machine changed my life. I spend literally every second of the day using this sewing machine and all of my sewing projects are going faster than ever. Would 100% recommend to every member of the Crafting Corner!</div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div style="text-align: center;">
                      <a class="btn btn-lg btn-info" href="shop.php" role="button">Buy Sewing8000</a>
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-3">
                    <h2 style="color: #772953;">Where we've been featured:</h2>
                    <img src="img/logos.png" alt="Logos">

                    <h2 style="color: #772953;">Shop Our Instagram</h2>
                    <img src="img/instagram.png" alt="Instagram pics">
                </div>
            </div>
            
            <?php include "../resources/footer.php"; ?> 

        </div>
    </div>
        <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
