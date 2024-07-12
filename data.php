<?php
include("save.php");
error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interactive Background Color</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg,
                #f7d794,
                #f3a683,
                #9adbbb);
        /* Cute light pastel color */
        color: #596275;
        /* Dark text color for contrast */
        font-family: Arial, sans-serif;
    }

    table {
        margin-top: -10%;
        margin-bottom: 100px;
        background-color: black;
        border-radius: 20px;
        /* width: 30%; */
        height: 70%;
        text-align: justify;
        padding-bottom: 20px;
        padding-top: 20px;
        padding-left: 25px;
        padding-right: 25px;
        color: white;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="number"],
    input[type="submit"] {
        width: 80%;
        padding: 10px;
        margin-left: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    input[type="submit"] {
        background-color: white;
        color: black;
    }

    input[type="submit"]:hover {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    /* Custom styling for specific inputs */
    #username {
        background-color: #f9f9f9;
    }

    #password {
        background-color: #f9f9f9;
        color: #333;
    }
</style>

<body>
    <table align="center">
        <form action="data.php" method="post">
            <tr>
                <td>Roll No</td>
                <td><input type="number" name="rollno" placeholder="Roll No" /></td>
            </tr>

            <br />
            <br />
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" placeholder="First Name" /></td>
            </tr>

            <br />
            <br />

            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname" placeholder="Last Name" /></td>
            </tr>

            <br />
            <br />
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Your Email" /></td>
            </tr>

            <br />
            <br />

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Your Password" /></td>
            </tr>

            <br />
            <br />

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="conpassword" placeholder="Your Confirm Password" /></td>
            </tr>

            <br />
            <br />

            <tr>
                <td>
                    <input type="submit" class="btn" name="btn" />
                </td>
            </tr>
        </form>
    </table>
</body>

</html>
<?php

$rn = $_POST['rollno'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$em = $_POST['email'];
$pwd = $_POST['password'];
$conpwd = $_POST['conpassword'];




$qurey = "INSERT INTO  student VALUES('$rn','$fn','$ln','$em','$pwd','$conpwd')";

$data = mysqli_query($conn, $qurey);

if ($data) {
    echo "<div  style='height: 50px;  margin-top: -5%;  margin-left: 46%; border-radius: 20px; width:100px; background-color:black; text-align: center; padding:5px 10px; color:white; '><p>You are Login</p> </div>";
} else {
    echo "<div  style='height: 50px;  margin-top: -5%;  margin-left: 46%; border-radius: 20px; width:100px; background-color:red; text-align: center; padding:5px 10px; color:white; '><p>Your Login Form is Faild</p> </div>";
}

?>