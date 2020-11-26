<?php 

session_start();

$header = ("../../assets/logo.png");

$imgAbrigo = ('../../assets/cad-two.svg');
$imgError = ("../../assets/notfound.svg");

$confirm = ('../../assets/confirme.svg');
$error = ('../../assets/fechar.svg');

$whatsapp =("../../assets/whatsapp.svg");
$instagram = ("../../assets/instagram.svg");
$facebook = ("../../assets/facebook.svg");
$linkedin = ("../../assets/linkedin.svg");
$twitter = ("../../assets/twitter.svg");

$alter = $_SESSION['alter'];
$register = $_SESSION['register'];
$login = $_SESSION['loginOn'];

if($login != 'notNull') {
    header('location:../Home');
}

switch($register) {
    
    case 'shelters': {
        $frase = 'Um novo abrigo foi cadastrado com sucesso!';
        $conRegister = 'yes';
    break;
    }
    
    case 'errorShelters': {
        $frase = 'Erro ao cadastrar um novo abrigo!';
        $conRegister = 'not';
    break;
    }
}


if($conRegister == 'yes'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $confirm . "' />

        <p class='text'><b>" . $frase . "</b></p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

if($conRegister == 'not'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $error . "' />

        <p class='text'><b>" . $frase ."</b><br/><br/>
        Caso o erro ocorra novamente, entre em contato conosco.</p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

unset($_SESSION['register']);
unset($_SESSION['alter']);

?>
