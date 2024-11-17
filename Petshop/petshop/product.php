<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center">Pet Shop</h1>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="viewanimal.php">View Animal</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="viewpro.php">View Product</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <form action="addpro.php" method="post">
        <div class="container">
            <h1>Register Product</h1>
            <hr>
            
            <label for="name"><b>Product Name</b></label>
            <input type="text" placeholder="Enter Product Name" name="name" id="name" required>

            <label for="pettype"><b>Pet Type</b></label>
            <input type="text" placeholder="Enter Pet Type" name="pettype" id="pettype" required>

            <label for="foodtype"><b>Food Type</b></label>
            <input type="text" placeholder="Enter Food Type" name="foodtype" id="foodtype" required>

            <label for="direction"><b>Direction</b></label>
            <input type="text" placeholder="Enter Direction" name="direction" id="direction" required>

            <label for="benifits"><b>Benefits</b></label>
            <input type="text" placeholder="Enter Benefits" name="benifits" id="benifits" required>

            <label for="availability"><b>Availability</b></label>
            <input type="text" placeholder="Enter Availability" name="availability" id="availability" required>

            <label for="cost"><b>Cost</b></label>
            <input type="text" placeholder="Enter Cost" name="cost" id="cost" required>
            <hr>
            <button type="submit" name="send" class="registerbtn">ADD</button>
        </div>
    </form>
</body>
</html>
