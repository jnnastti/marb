<?php

session_start();

$cod= $_POST['cod'];
$pass= $_POST['password'];

include("../../connection.php"); 

$sql = "SELECT * FROM agents WHERE agents.cod = '$cod' AND agents.passw = '$pass' LIMIT 0,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    while ($row = $result->fetch_assoc()) {
    $_SESSION['city'] = $row["city"];
    $_SESSION['cod'] = $row["cod"];

    $_SESSION['loginOn'] = 'notNull';
    }
    header('location:../../../web/src/pages/Points'); 
} else {
    header('location:../../../web/src/pages/Home');
    $_SESSION['error'] = 'errorLogin';
}

$conn->close();

?>