<?php

$fristName = $_POST["FristName"];
$lastName = $_POST["LastName"];
$PhoneNumber = $_POST["PhoneNumber"];
$email = $_POST["Email"];
$ability = $_POST["Ability"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ( $conn == NULL) {
    die("ERROR: " . mysqli_connect_error($conn));
}

echo "Connected successfully :-(";


$query = "INSERT INTO recruitments (Fname, Lname, Phonenuber, Email, Ability) VALUES ('$fristName', '$lastName', '$PhoneNumber', '$email', '$ability')";


if (mysqli_query($conn, $query)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}


mysqli_close($conn)
?>
