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
    <form action="addpetdb.php" method="POST">
        <div class="container">
            <h1> Animal</h1>
            <hr>
            
            <label for="petcategory"><b>Pet Category</b></label>
            <input type="text" placeholder="Enter Pet Category" name="petcategory" id="petcategory" required>

            <label for="petbreed"><b>Pet Breed</b></label>
            <input type="text" placeholder="Enter Pet Breed" name="petbreed" id="petbreed" required>

            <label for="petweight"><b>Pet Weight</b></label>
            <input type="text" placeholder="Enter Pet Weight" name="petweight" id="petweight" required>

            <label for="petheight"><b>Pet Height</b></label>
            <input type="text" placeholder="Enter Pet Height" name="petheight" id="petheight" required>

            <label for="petage"><b>Pet Age</b></label>
            <input type="text" placeholder="Enter Pet Age" name="petage" id="petage" required>

            <label for="petcolour"><b>Pet Colour</b></label>
            <input type="text" placeholder="Enter Pet Colour" name="petcolour" id="petcolour" required>

            <label for="petcost"><b>Pet Cost</b></label>
            <input type="text" placeholder="Enter Pet Cost" name="petcost" id="petcost" required>
            <hr>
            <button type="submit" class="registerbtn" name="add">ADD</button>
        </div>
    </form>
</body>
</html>
