<?php 

session_start();

include("../../connection.php");

$alterNome = $_POST['name'];
$alterNum = $_POST['number'];
$alterEmail = $_POST['email'];
$alterPass = $_POST['password'];
$alterId = $_POST['id'];

$sql = "UPDATE agents SET 
nome = '".$alterNome."', 
numb = '".$alterNum."', 
email = '".$alterEmail."', 
passw = '".$alterPass."' WHERE cod = '". $alterId."'";
    
if ($conn->query($sql) === TRUE) {
    header('location:../Mail/alter.php');

        $_SESSION['AlterMailNome'] = $alterNome;
        $_SESSION['AlterMailNum'] = $alterNum;
        $_SESSION['AlterMailEmail'] = $alterEmail;
        $_SESSION['AlterMailPass'] = $alterPass;
        $_SESSION['AlterMailId'] = $alterId;

        $_SESSION['altAgent'] = 'alterAgent';
    //echo "foi";
} else {
    header('location:../../../web/src/pages/Agent');
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $_SESSION['altAgent'] = 'errorAgent';
}
    
$conn->close();

?> 