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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pw'];

    $s = "SELECT * FROM customer WHERE email = '$email'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($num ==1)
    {
        echo "User Already Registered";
    }
    else
    {
        $reg = "INSERT INTO customer (name,email,pw) VALUES ('$name','$email','$password')";
        if(mysqli_query($con,$reg))
        {
            echo "Registration Successful";
        }
        else
        {
            echo "Error" . $sql . " " . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
?>