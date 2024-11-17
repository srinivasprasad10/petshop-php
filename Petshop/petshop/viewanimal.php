<?php
// Include the database configuration file
include 'dbconfig.php';

// Check if the delete button has been clicked
if (isset($_GET['delete'])) {
    $petid = $_GET['delete'];
    $deleteSql = "DELETE FROM `animals` WHERE `petid` = $petid";
    if ($conn->query($deleteSql) === TRUE) {
        echo "<script>alert('Animal deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting animal: " . $conn->error . "');</script>";
    }
}

// Fetch the data from the animals table
$sql = "SELECT * FROM `animals`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center">Pet Shop - View Animals</h1>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="viewanimal.php">View Animal</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="viewpro.php">View Product</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="container" style="width: 80%">
        <h2>Animals List</h2>
        <table id="customers">
            <tr>
                <th>Pet ID</th>
                <th>Category</th>
                <th>Breed</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Age</th>
                <th>Colour</th>
                <th>Cost</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['petid'] . "</td>
                            <td>" . $row['petcategory'] . "</td>
                            <td>" . $row['petbreed'] . "</td>
                            <td>" . $row['petweight'] . "</td>
                            <td>" . $row['petheight'] . "</td>
                            <td>" . $row['petage'] . "</td>
                            <td>" . $row['petcolour'] . "</td>
                            <td>" . $row['petcost'] . "</td>
                            <td><a href='viewanimal.php?delete=" . $row['petid'] . "' onclick=\"return confirm('Are you sure you want to delete this animal?');\">Delete</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No animals found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
