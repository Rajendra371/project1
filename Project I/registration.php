<?php
session_start();
header('location:signin.php');

$conn = mysqli_connect('localhost','root');
if($conn)
{
    echo "connection successfully";

    
}else{
echo "not connection";
}
mysqli_select_db( $conn, 'register');
$name = $_POST['user'];
$pass = $_POST['password'];


$q = " SELECT * from signin where name = '$name' && password = '$pass'";
$result=  mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num==1)
{
    echo "duplicate data";
    // $_SESSION['username'] = $name;
    // header('locatio: home.php');
}
else{
//    header('location:signin.php');
$qy = "INSERT INTO signin(name, password) values ('$name', '$pass')";
mysqli_query($conn, $qy);
}


?>