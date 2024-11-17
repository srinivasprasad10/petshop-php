
<?php 

if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    include 'dbconfig.php'; 
        $sql="SELECT * FROM `admin` WHERE `username`='$uname' AND `password`='$pass'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                 while($row=$result->fetch_assoc())
                 {
                     session_start();
                     $_SESSION['auname']=$uname;
                     $_SESSION['apass']=$pass;
                     
                      echo "<META http-equiv=\"refresh\" content=\"0;home.php\">";
                      
                 }
            }
            else 
            {
                echo "<script type=\"text/javascript\">alert(\"Username Password Does not Match\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;login.php\">";
            }
    }
    else 
    {
          header("location:logout");
    }


?>