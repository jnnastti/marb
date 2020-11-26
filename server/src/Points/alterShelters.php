<?php 

session_start();

include("../../connection.php");

$sAlterLat = $_POST['lat'];
$sAlterLon = $_POST['lon'];
$sAlterName = $_POST['nome'];
$sAlterAdress = $_POST['adress'];
$sAlterReference = $_POST['reference'];
$sAlterTell = $_POST['tell'];
$sAlterId = $_POST['id'];

$sql = "UPDATE shelters SET 
nome = '".$sAlterName."',
adress = '".$sAlterAdress."',
reference = '".$sAlterReference."',
tell = '".$sAlterTell."' WHERE id = $sAlterId";
    
if ($conn->query($sql) === TRUE) {
    header('location:../../../web/src/pages/AlterShelters');
    $_SESSION['alter'] = 'shelters';
} else {
    header('location:../../../web/src/pages/AlterShelters');
    // mensagem de erro
    echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['alter'] = 'errorShelters';
}
    
$conn->close();

?>