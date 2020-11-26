<?php

session_start();

$cod = $_SESSION['alterId'];

include("../../connection.php");

$sql = "DELETE FROM points WHERE cod = '". $cod."'";

if ($conn->query($sql) === TRUE) {

    $sql = "DELETE FROM shelters WHERE cod = '". $cod ."'";

    if($conn->query($sql) === TRUE) {
        $sql = "DELETE FROM agents WHERE cod = '". $cod ."'";

        if($conn->query($sql) === TRUE) {
            header('location:../Mail/delete.php');
            //echo "deletado";
        }
    }
    
} else {
    header('location:../../../web/src/pages/Agent');
    $_SESSION['deleteAgent'] = 'not';
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>