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
        .contact-form {
            width: 700px;
        }
        .contact-form .textarea { 
            min-height:180px; 
            resize:none;
        }
        .form-control { 
            box-shadow:none; 
            border-color:#eee; 
            height:49px;
        }
        .form-control:focus { 
            box-shadow:none; 
            border-color:#00b09c;
        }
        .main-btn { 
            background:#772953; 
            border-color:#772953; 
            color:#fff;
        }
    </style>
</head>

<body>

    <?php include "../resources/navigation.php"; ?>
    
    <div class="container">
        <div class="below_menu_container">
            <div class="container marketing">
                <br>
                <br>
                <br>
                <div class="row">
                    <div style="text-align: center;" class="col-lg-4 col-md-4 col-s-4 col-xs-12">
                        <img class="img-circle" src="img/pipeCleaners.png" alt="Crafting Corner" width="140" height="140">
                        <h2 style="color: #772953;">Crafts</h2>
                    </div>
                    <div style="text-align: center;" class="col-lg-4 col-md-4 col-s-4 col-xs-12">
                        <img class="img-circle" src="img/balloons.jpg" alt="Crafting Corner" width="140" height="140">
                        <h2 style="color: #772953;">Support</h2>
                    </div>
                    <div style="text-align: center;" class="col-lg-4 col-md-4 col-s-4 col-xs-12">
                        <img class="img-circle" src="img/scissors2.png" alt="Crafting Corner" width="140" height="140">
                        <h2 style="color: #772953;">Supplies</h2>
                    </div>
                </div>
                <br>
                <br>

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 style="color: #772953;" class="featurette-heading">About Us</h2>
                        <p class ="lead">We are a group of motivated individuals who care about the intense and rewarding world of crafting! If you care about crafting as much as we do, you're in the right place! Our company was founded in 1982 by Suzie Crafty and have been growing and expanding ever since! Now we are the number one crafting supplier on the World Wide Web! We care about customer service, so if you are not having a satisfactory experience on our website, we would like to hear from you.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" src="img/Employees.png" alt="Crafting Corner Employees" width="450">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 style="color: #772953;" class="featurette-heading">We're here for YOU</h2>
                        <p class ="lead">As mentioned above, we are in the business of selling crafting supplies and we have everything you'll need for any kind of craft all in one convenient location. Our main location is in Indianola, Iowa but we deliver to all of the 50 states for your convenience. We also always have a great selection of sale items that are perfect to stock up on for future crafting. We hope you enjoy our services and we thank you for visiting our site. Please feel free to send us a message!</p>
                        <h2 style="color: #772953;">-The Crafting Corner Team</h2>
                    </div>

                    <div class="col-md-5 col-md-pull-7">
                        <form class="contact-form">
                            <h4 style="color:#772953;">Send us a Message!</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Email" autocomplete="off" id="Email" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn main-btn pull-right">Send a message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <br>
            </div>

            <br>
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