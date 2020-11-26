<?php

session_start();

// erro no login
$error = $_SESSION['error'];
// cadastro com sucesso
$register = $_SESSION['registerAgent'];
// mensagem enviada: sim/nao
$messageSend = $_SESSION['messageSend'];
// dados alterados com sucesso
$alter = $_SESSION['altAgent'];

$img = ("../../assets/sucesso.svg");
$imgError = ("../../assets/notfound.svg");

$header = ("../../assets/logo.png");

$localization = ("../../assets/item-one.svg");
$obj = ("../../assets/item-two.svg");
$trofeu = ("../../assets/item-three.svg");

$login = ("../../assets/login.svg");
$whatsapp =("../../assets/whatsapp.svg");
$instagram = ("../../assets/instagram.svg");
$facebook = ("../../assets/facebook.svg");
$linkedin = ("../../assets/linkedin.svg");
$twitter = ("../../assets/twitter.svg");


$mailErrorM = ("../../assets/mailError.svg");
$mailConfirm = ("../../assets/mailConfirm.svg");

$alterConfirm = ("../../assets/alterOk.svg");

if($register == 'yes'){
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $img . "' />

        <p class='text'>
            <b> Bem-vindo a equipe MARB! </b> <br/><br/>
            Uhuu! Agora você é o mais novo integrante do nosso time, estamos felizes em
            recebê-lo! Logo você irá receber um e-mail com mais informações sobre nosso 
            sistema, juntamente com seu código de acesso e dados. <br/><br/> 
            Caso tenha alguma dúvida entre em contato conosco, estamos a disposição!<br/><BR/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>";
}

if($error == 'errorLogin') {
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $imgError . "' />

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

if($messageSend == 'yes') {
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $mailConfirm . "' />

        <p class='text'>
            <b> Mensagem enviada! </b> <br/><br/>
            Sua mensagem foi enviada com sucesso, agora basta esperar
            nosso retorno para que possamos lhe ajudar. Agradecemos
            o contato, estamos a disposição.<br/><br/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>
    ";
} else if($messageSend == 'not') {
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $mailErrorM . "' />

        <p class='text'>
            <b> Erro ao enviar sua mensagem! </b> <br/><br/>
            Ocorreu um erro ao enviar sua mensagem. Tente novamente
            mais tarde e, caso continue dando problema, entre em contato 
            direto pelo seu e-mail ou ligue para nossa central pelo número
            encontrado no fim da página. Agradecemos o contato e compreeensão, 
            estamos a disposição.<br/><br/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>
    ";
}

if($alter == 'alterAgent') {
    echo "
    <head>
        <link href='../../assets/ico-header.ico' rel='icon' />
    </head>

    <div id='myModal' class='modal'>
        <div class='modal-content'>
        <span class='close'>&times;</span>
        <img class='imgConfirm' src='" . $alterConfirm . "' />

        <p class='text'>
            <b> Informações alteradas com sucesso! </b> <br/><br/>
            Enviamos para você um e-mail de confirmação com as alterações já
            atualizadas. Caso não tenha recebido entre em contato com a nossa equipe. 
            Agradecemos a colaboração com nosso sistema e a sua comunidade.<br/><br/>
            Atenciosamente, equipe MARB.
        </p>
        </div>
    </div>
    
    <script src='../Popup/popup.js'></script>
    ";
}

session_unset();

?>
