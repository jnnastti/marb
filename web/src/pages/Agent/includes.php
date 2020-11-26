<?php

session_start();

$header = ("../../assets/logo.png");
$imgAlter = ("../../assets/alter.svg");

$whatsapp =("../../assets/whatsapp.svg");
$instagram = ("../../assets/instagram.svg");
$facebook = ("../../assets/facebook.svg");
$linkedin = ("../../assets/linkedin.svg");
$twitter = ("../../assets/twitter.svg");

$imgError = ("../../assets/notfound.svg");
$img = "../../assets/error.svg";

$loginOk = $_SESSION['loginAlter'];
$loginError = $_SESSION['Alter'];
$alterError = $_SESSION['altAgent'];
$delError = $_SESSION['deleteAgent'];

if($loginError == 'error'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src=' " . $imgError . "' />

        <p class='text'>
            <b> Login incorreto! </b> <br/><br/>
            Os dados informados não coincidem com nenhum de nossos registros.<br/><br/> 
            Verifique se foram inseridos corretamente e tente outra vez. Caso ainda 
            esteja encontrando problemas entre em contato conosco!<br/><BR/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

if($alterError == 'errorAgent'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src=' " . $img . "' />

        <p class='text'>
            <b> Erro ao alterar! </b> <br/><br/>
            Estamos encontrando dificuldades na comunicação com nosso servidor. 
            Tente novamente mais tarde ou entre em contato conosco.<br/><BR/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

if($delError == 'not'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src=' " . $img . "' />

        <p class='text'>
            <b> Erro ao deletar! </b> <br/><br/>
            Estamos encontrando dificuldades na comunicação com nosso servidor. 
            Tente novamente mais tarde ou entre em contato conosco.<br/><BR/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

unset($_SESSION['loginAlter']);
unset($_SESSION['Alter']);
unset($_SESSION['deleteAgent']);

?>