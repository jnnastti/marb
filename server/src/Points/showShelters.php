<?php

session_start();

$city= $_SESSION['city'];

include("../../connection.php"); 

$sql = "SELECT * FROM shelters WHERE shelters.city = '$city'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) { 
        $sCount++; 
        include("./alterShelters/index.php");
    }   
} else {
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
    include("./notRegister/index.php");
}

$conn->close();

?>