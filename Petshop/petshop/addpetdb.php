<?php
// Include the database configuration file
include 'dbconfig.php';

// Check if the form is submitted
if(isset($_POST['add'])){
    // Retrieve form data
    $petcategory = $_POST['petcategory'];
    $petbreed = $_POST['petbreed'];
    $petweight = $_POST['petweight'];
    $petheight = $_POST['petheight'];
    $petage = $_POST['petage'];
    $petcolour = $_POST['petcolour'];
    $petcost = $_POST['petcost'];

    // Insert data into the animals table
    $sql = "INSERT INTO `animals` (`petid`, `petcategory`, `petbreed`, `petweight`, `petheight`, `petage`, `petcolour`, `petcost`) 
            VALUES (NULL, '$petcategory', '$petbreed', '$petweight', '$petheight', '$petage', '$petcolour', '$petcost')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Animal registered successfully.');</script>";
        echo "<script>window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
        echo "<script>window.location.href='home.php';</script>";
    }
} else {
    header("location: home.php");
    exit();
}
?>
