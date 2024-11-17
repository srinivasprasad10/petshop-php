<?php
// Include the database configuration file
include 'dbconfig.php';

// Fetch the data from the product table
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul li {
            float: left;
        }

        ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul li a:hover {
            background-color: #111;
        }

        .container {
            padding: 16px;
            background-color: white;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: calc(33.333% - 32px);
            vertical-align: top;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            margin: 8px 0;
        }

        .card .cost {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>

<h1 align="center">Pet Shop</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="aniview.php">Animals</a></li>
    <li><a href="productv.php">Products</a></li>
    <li><a href="login.php">Login</a></li>
</ul>

<div class="container">
    <h2>Products Available</h2>
    <div class="cards">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>
                        <h3>Product ID: " . $row['id'] . "</h3>
                        <p><b>Name:</b> " . $row['name'] . "</p>
                        <p><b>Pet Type:</b> " . $row['pettype'] . "</p>
                        <p><b>Food Type:</b> " . $row['foodtype'] . "</p>
                        <p><b>Direction:</b> " . $row['direction'] . "</p>
                        <p><b>Benefits:</b> " . $row['benifits'] . "</p>
                        <p><b>Availability:</b> " . $row['availability'] . "</p>
                        <p class='cost'><b>Cost:</b> $" . $row['cost'] . "</p>
                      </div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
