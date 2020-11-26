<?php

session_start();

$name= $_POST['name'];
$uf= $_POST['state'];
$city= $_POST['city'];
$number= $_POST['number'];
$email= $_POST['email'];
$passw= $_POST['password'];

include("../../connection.php");

// Verificar se já existe um codigo e uma cidade cadastrada
$sql = "SELECT cod, city FROM agents";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $cod = $row["cod"];
    $cityDB = $row["city"];
}

// gerar nova chave
do {
    $chave = uniqid();
} while ($chave == $cod); 


if($city == $cityDB) {
    header('location:../../../web/src/pages/Register');
    $_SESSION['cityError'] = 'notNull';
    //echo"<script>alert('" . $_SESSION['cityError'] . "Ja existe.');</script>";
} else {
    $sql = "INSERT INTO agents(cod, nome, uf, city, numb, email, passw)
    VALUES ('".$chave."', '".$name."', '".$uf."','".$city."','".$number."','".$email."','".$passw."')";
    
    if ($conn->query($sql) === TRUE) {
        //header('location:../../../web/src/pages/Home');
        header('location:../Mail/register.php');

        $_SESSION['RegisterMailCod'] = $chave;
        $_SESSION['RegisterMailName'] = $name;
        $_SESSION['RegisterMailUf'] = $uf;
        $_SESSION['RegisterMailCity'] = $city;
        $_SESSION['RegisterMailNumber'] = $number;
        $_SESSION['RegisterMailEmail'] = $email;
        $_SESSION['RegisterMailPassw'] = $passw;

        $_SESSION['registerAgent'] = 'yes';

    } else {
        header('location:../../../web/src/pages/Register');
        $_SESSION['registerAgent'] = 'not';
        // mensagem de erro
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

?> 
