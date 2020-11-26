<?php

session_start();

$city= $_SESSION['city'];

include("../../connection.php"); 

$sql = "SELECT * FROM points WHERE points.city = '$city'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) { 
        $pCount++; 

        switch($row['typeRis']) {
            case 'desl': {
                $typeDesl = 'selected';
            } break;
            case 'alag': {
                $typeAlag = 'selected';
            } break;
            case 'quei': {
                $typeQuei = 'selected';
            } break;       
        };

        switch($row['lvl']) {
            case '1': {
                $checkBaixo = 'checked';
                $checkMedio = '';
                $checkAlto = '';
            } break;
            case '2': {
                $checkMedio = 'checked';
                $checkBaixo = '';
                $checkAlto = '';
            } break;
            case '3': {
                $checkAlto = 'checked';
                $checkBaixo = '';
                $checkMedio = '';
            } break;       
        };

        include("./alterPoints/index.php");

    }   
} else {
    // mensagem de erro
    //echo "Error: " . $sql . "<br>" . $conn->error;
    include("./notRegister/index.php");
}

$_SESSION['pCount'] = $pCount;

$conn->close();

?>