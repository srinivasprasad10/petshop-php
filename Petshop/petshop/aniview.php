<?php
// Include the database configuration file
include 'dbconfig.php';

// Fetch the data from the animals table
$sql = "SELECT * FROM `animals`";
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
    <h2>Animals Available</h2>
    <div class="cards">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>
                        <h3>Pet ID: " . $row['petid'] . "</h3>
                        <p><b>Category:</b> " . $row['petcategory'] . "</p>
                        <p><b>Breed:</b> " . $row['petbreed'] . "</p>
                        <p><b>Weight:</b> " . $row['petweight'] . "</p>
                        <p><b>Height:</b> " . $row['petheight'] . "</p>
                        <p><b>Age:</b> " . $row['petage'] . "</p>
                        <p><b>Colour:</b> " . $row['petcolour'] . "</p>
                        <p class='cost'><b>Cost:</b> Rs" . $row['petcost'] . "</p>
                      </div>";
            }
        } else {
            echo "<p>No animals found.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
