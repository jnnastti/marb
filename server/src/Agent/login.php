<?php

session_start();

$cod= $_POST['cod'];
$pass= $_POST['password'];

include("../../connection.php"); 

$sql = "SELECT * FROM agents WHERE agents.cod = '$cod' AND agents.passw = '$pass' LIMIT 0,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    while ($row = $result->fetch_assoc()) {
        $_SESSION['alterId'] = $row["cod"];
        $_SESSION['altNome'] = $row["nome"];
        $_SESSION['altNumber'] = $row["numb"];
        $_SESSION['altEmail'] = $row["email"];
        $_SESSION['altPass'] = $row["passw"];
    }
    //echo "ok";
    $_SESSION['loginAlter'] = 'loginOk';

    header('location:../../../web/src/pages/Agent'); 
} else {
    header('location:../../../web/src/pages/Agent');
    $_SESSION['Alter'] = 'error';
    //echo "erro";
}

$conn->close();

?>