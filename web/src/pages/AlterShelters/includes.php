<?php 

session_start();

$header = ("../../assets/logo.png");

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
$delete = $_SESSION['delete'];

$login = $_SESSION['loginOn'];

if($login != 'notNull') {
    header('location:../Home');
}


switch($alter) {
    case 'shelters': {
        $frase = 'Abrigo atualizado com sucesso!';
        $conRegister = 'yes';
    break;
    }
    
    case 'errorShelters': {
        $frase = 'Erro ao atualizar abrigo!';
        $conRegister = 'not';
    break;
    }
}


switch($delete) {
    case 'shelters': {
        $frase = 'Abrigo deletado com sucesso!';
        $conRegister = 'yes';
    break;
    }
    
    case 'errorShelters': {
        $frase = 'Erro ao deletar abrigo!';
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
unset($_SESSION['delete']);

?>
