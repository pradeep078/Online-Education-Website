<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$sql = "INSERT INTO nsp (name, email, comment)
VALUES ('$name','$email','$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>