<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "college";


$conn = mysqli_connect($severname, $username, $password, $dbname);


if ($conn) {
    // echo "conection ok";
} else {
    echo "conaction faild" . mysqli_connect_error();
}
// $name = $_POST['name'];
// $email = $_POST['email'];
// $location = $_POST['location'];
// $city = $_POST['city'];


// $sql = "INSERT INTO `emp` (`name`, `email`, `address`, `city`) VALUES ('$name', '$email', '$location', '$city'), ('$name', '$email', '$location', '$city');";

// $result = mysqli_query($con, $sql);

// if ($result) {
//     echo "data submited";
// } else {
//     echo "error";
// }
