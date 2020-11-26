<?

session_start();

$header = ("../../assets/logo.png");
$imgRegister = ("../../assets/register.svg");

$whatsapp =("../../assets/whatsapp.svg");
$instagram = ("../../assets/instagram.svg");
$facebook = ("../../assets/facebook.svg");
$linkedin = ("../../assets/linkedin.svg");
$twitter = ("../../assets/twitter.svg");

$register =  $_SESSION['registerAgent'];
$cityError = $_SESSION['cityError'];

if($register == 'not') {
    $frase = "<b>Ops... Tivemos alguns problemas ao cadastrar. </b><br/><br/>
    Estamos encontrando dificuldades na comunicação com nosso servidor. Tente novamente mais tarde
    ou entre em contato conosco.<br/><br/>
    Atenciosamente, equipe MARB.";
    $img = "../../assets/error.svg";

    $error = 'notRegister';

} else if($cityError == 'notNull') {
    $frase = "<b>Ops... Parece que sua cidade já faz parte do nosso sistema.</b> <br/><br/>
    Houve algum engano? Entre em contato conosco para podermos resolver! <br/><br/>
    Atenciosamente, equipe MARB.";
    $img = "../../assets/city.svg";
    $error = 'notRegister';
}

if($error == 'notRegister'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $img . "' />

        <p class='text'>" . $frase ."</p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

unset($_SESSION['registerAgent']);
unset($_SESSION['cityError']);

?>
