<?php

session_start();

include("../../connection.php");


$id = $_POST['id'];

$sql = "DELETE FROM shelters WHERE shelters.id = $id";

if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/AlterShelters');
    $_SESSION['delete'] = 'shelters';
} else {
    header('location:../../../web/src/pages/AlterShelters');
    // mensagem de erro
    echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['delete'] = 'errorShelters';
}
    
$conn->close();


?>