<?php
//error_reporting(0);
$q=$_GET["q"];
//echo $q;
$hint="";

$servername = "mysql.kbtpl.com";
$susername = "kbtdbusertest";
$spassword = "kfP3ryzg";
$dbname = "kbtdbtest_v1";

// Opens a connection to a MySQL server

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $susername, $spassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username FROM dim_login WHERE username LIKE '$q%'"); 
    //$stmt->bindParam(1, $q);
    $stmt->execute();
    
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}



while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	//echo $row['username'];
	if ($hint=="") {
		$hint=$row['username'];
	}
	else {
		$hint=$hint . '<br />'. $row['username'];
	}
}
//$row = @mysql_fetch_assoc($result);
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//echo $response;
echo json_encode($response);

?>