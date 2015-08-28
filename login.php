<?php

//error_reporting(0);
$username = $_POST["username"];
$password = $_POST["password"];

$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "login";

$conn = mysqli_connect($servername, $susername, $spassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username, password FROM login where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["username"]. " - pass: " . $row["password"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
