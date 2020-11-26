<?php

session_start();

include("../../connection.php");

$sRegisterLat = $_POST['lat'];
$sRegisterLon = $_POST['lon'];
$sRegisterName = $_POST['nome'];
$sRegisterEndereco = $_POST['end'];
$sRegisterReferences = $_POST['ref'];
$sRegisterNumber = $_POST['tell'];

$city = $_SESSION['city'];
$cod = $_SESSION['cod'];



$sql = "INSERT INTO shelters(latitude, longitude, nome, adress, reference, tell, city, cod)
VALUES ('".$sRegisterLat."', '".$sRegisterLon."', '".$sRegisterName."','".$sRegisterEndereco."',
'".$sRegisterReferences."','".$sRegisterNumber."','".$city."','".$cod."')";
    
if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/RegisterShelters');
    $_SESSION['register'] = 'shelters';
} else {
  header('location:../../../web/src/pages/RegisterShelters');
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
  $_SESSION['register'] = 'errorShelters';
}
    
$conn->close();
?> 