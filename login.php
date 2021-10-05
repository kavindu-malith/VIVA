<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "foodweb";

$con = new mysqli($hostname,$username,$password,$db);
if(!$con)
{
    die('database connection faild '.mysql_error());
}
if(isset($_POST["submit"]))
{
    $email = $_POST['email'];
    $password = $_POST['pw'];

    $s = "SELECT * FROM customer WHERE CEmail = '$email' , C_Password = '$password'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($num ==1)
    {
        echo "Login Successful";
        header('location:index.html');
    }
    else
    {
        echo "Check Your email and password again";
        header('location:Log.html')
    }
}
?>