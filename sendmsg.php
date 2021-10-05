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
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO complaints (Name,E_mail,Subject,Complaint)VALUES('$name','$Email','$Subject','$message')";
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