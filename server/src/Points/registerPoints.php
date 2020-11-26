<?php

session_start();

include("../../connection.php");

$pRegisterLat = $_POST['lat'];
$pRegisterLon = $_POST['lon'];
$pRegisterType = $_POST['type'];
$pRegisterLevel = $_POST['risco'];

$city = $_SESSION['city'];
$cod = $_SESSION['cod'];

$sql = "INSERT INTO points(latitude, longitude, typeRis, lvl, city, cod)
VALUES ('".$pRegisterLat."', '".$pRegisterLon."', '".$pRegisterType."',
'".$pRegisterLevel."','".$city."','".$cod."')";
    
if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/RegisterPoints');
    $_SESSION['register'] = 'points';
} else {
    header('location:../../../web/src/pages/RegisterPoints');
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['register'] = 'errorPoints';
}
    
$conn->close();
?> 