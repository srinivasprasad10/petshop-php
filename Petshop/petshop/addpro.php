<?php
// Include the database configuration file
include 'dbconfig.php';

// Check if the form is submitted
if(isset($_POST['send'])){
    // Retrieve form data
    $name = $_POST['name'];
    $pettype = $_POST['pettype'];
    $foodtype = $_POST['foodtype'];
    $direction = $_POST['direction'];
    $benifits = $_POST['benifits'];
    $availability = $_POST['availability'];
    $cost = $_POST['cost'];

    // Insert data into the product table
    $sql = "INSERT INTO `product` (`id`, `name`, `pettype`, `foodtype`, `direction`, `benifits`, `availability`, `cost`) 
            VALUES (NULL, '$name', '$pettype', '$foodtype', '$direction', '$benifits', '$availability', '$cost')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product registered successfully.');</script>";
        echo "<script>window.location.href='view_products.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
        echo "<script>window.location.href='insert_product.php';</script>";
    }
} else {
    header("location: insert_product.php");
    exit();
}
?>
