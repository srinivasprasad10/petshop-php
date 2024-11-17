<?php
// Include the database configuration file
include 'dbconfig.php';

// Check if the delete button has been clicked
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteSql = "DELETE FROM `product` WHERE `id` = $id";
    if ($conn->query($deleteSql) === TRUE) {
        echo "<script>alert('Product deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting product: " . $conn->error . "');</script>";
    }
}

// Fetch the data from the product table
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center">Pet Shop - View Products</h1>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="viewanimal.php">View Animal</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="viewpro.php">View Product</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="container" style="width: 80%">
        <h2>Products List</h2>
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Pet Type</th>
                <th>Food Type</th>
                <th>Direction</th>
                <th>Benefits</th>
                <th>Availability</th>
                <th>Cost</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['pettype'] . "</td>
                            <td>" . $row['foodtype'] . "</td>
                            <td>" . $row['direction'] . "</td>
                            <td>" . $row['benifits'] . "</td>
                            <td>" . $row['availability'] . "</td>
                            <td>" . $row['cost'] . "</td>
                            <td><a href='viewpro.php?delete=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this product?');\">Delete</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No products found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
