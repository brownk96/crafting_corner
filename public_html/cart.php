<!-- Sydney is navigator-->

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
    
    <?php include "../resources/navigation.php"; ?>
    
    <div class="container">
     <div class="below_menu_container">
    <h2>Cart</h2>
    <h4>Cart Total: $17.56</h4>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Product</th>
                <th>Product Description</th>
                <th>Price per Unit</th>
                <th>Quantity</th>
                <th>Price Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="alert alert-danger" role="alert">
                <td><img src="img/scissors2.png" alt="Scissors"></td>
                <td>Scissors - Last pair available!</td>
                <td>$4.50</td>
                <td>1</td>
                <td>$4.50</td>
            </tr>
            <tr>
                <td><img src="img/canvas.png" alt="Canvas"></td>
                <td>Canvas <br></td>
                <td>$6.00</td>
                <td>2</td>
                <td>$12.00</td>
            </tr>
        </tbody>
    </table>
    
    <form> 
        <div class="form-group">
            <label for="discountCode">Discount Code</label>
            <input type="text" name="discountCode" id="discountCode" class="form-control" placeholder="Enter Code Here">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Apply Discount Code</button>
        </div>
    </form>
    
    <h4>Order Summary</h4>
    <h5>Subtotal: $16.50</h5>
    <h5>Delivery: $2.00</h5>
    <h5>Estimated Tax: $1.16</h5>
    <h4>Total: $19.66</h4>
    
    <br>
    
    <button type="button" class="btn btn-info">Checkout</button>
    
    </div>
    
    <div> 
    <br>
    <?php include "../resources/footer.php"; ?>
    </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>