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
        .progress-bar{
            background-color: #772953;
        }
        a {
            color: #5c2040;
        }
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
    
    <?php include "../resources/navigation.php"; ?>
    
    <div class="container">
        <div class="below_menu_container">
            <div class="page-header">
                <h1>Sale Products</h1>
                <h1><small>Catch them before they're gone!</small></h1>
            </div>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product Description</th>
                        <th>Original Price</th>
                        <th>Discounted Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="img/GooglyEyes.png" alt="Googly Eyes" class="img-rounded"></td>
                        <td>Googly Eyes</td>
                        <td>$4.99</td>
                        <td>$2.99</td>
                        <td>5
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    5
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td><img src="img/Scissors.png" alt="Scissors" class="img-rounded"></td>
                        <td>Scissors</td>
                        <td>$7.99</td>
                        <td>$4.50</td>
                        <td>1
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    1
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td><img src="img/Glue.png" alt="Glue" class="img-rounded"></td>
                        <td>Glue</td>
                        <td>$5.99</td>
                        <td>$1.50</td>
                        <td>8
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    8
                                </div>
                            </div></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
        
            <h5> <a href="shop.html">More Products...</a></h5>

            <?php include "../resources/footer.php"; ?>
        </div>

    </div>
        <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>