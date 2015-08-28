<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$servername = "mysql.kbtpl.com";
$susername = "kbtdbusertest";
$spassword = "kfP3ryzg";
$dbname = "kbtdbtest_v1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $susername, $spassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT COUNT(*) FROM dim_login WHERE username=? and password=?"); 
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    $num_rows = $stmt->fetchColumn();
    
    //echo $num_rows;

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if($num_rows==1){
echo "Success!";
$_SESSION["username"] = $username;
header("Location: http://localhost/PhpProject1/welcome.php");
exit();
}
else {
echo "Wrong Username or Password";
}
$conn = null;





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

