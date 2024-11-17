<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 

<h1 align="center">Pet Shop</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="aniview.php">Animals</a></li>
    <li><a href="productv.php">Products</a></li>
  <li><a href="login.php">Login</a></li>
</ul>

    <form action="logindb.php" method="POST">
  <div class="container">
    <h1>Admin Login</h1>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="psw" required>

    <hr>
    <button type="submit" class="registerbtn" name="login">Login</button>

  </div>
 
</form>


</body>
</html>