<?php 

session_start();

include("../../connection.php");

$pAlterType = $_POST['type'];
$pAlterLevel = $_POST['risco'];
$pAlterId = $_POST['id'];

$sql = "UPDATE points SET 
typeRis = '".$pAlterType."', 
lvl = '".$pAlterLevel."' WHERE id = $pAlterId";
    
if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/AlterPoints');
    $_SESSION['alter'] = 'points';
} else {
    header('location:../../../web/src/pages/AlterPoints');
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['alter'] = 'errorPoints';
}
    
$conn->close();

?> 