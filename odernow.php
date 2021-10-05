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
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Phone = $_POST['phone'];

    $sql = "INSERT INTO complaints (CName,E_mail,address_line,quantity,phone_no)VALUES('$name','$Email','$address','$quantity','$phone')";

    if(mysqli_query($con,$sql))
    {
        echo "Action Complited !";
    }
    else
    {
        echo "Error" . $sql . " " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
}