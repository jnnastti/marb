<?php

session_start();

include("../../connection.php");


$id = $_POST['id'];

$sql = "DELETE FROM points WHERE points.id = $id";

if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/AlterPoints');
    $_SESSION['delete'] = 'points';
} else {
    header('location:../../../web/src/pages/AlterPoints');
    // mensagem de erro
    echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['delete'] = 'errorPoints';
}
    
$conn->close();


?>