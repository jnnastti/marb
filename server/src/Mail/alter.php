<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../PHPMailer-master/src/Exception.php';
require '../../../PHPMailer-master/src/PHPMailer.php';
require '../../../PHPMailer-master/src/SMTP.php';


// informações do email

$mailNome = $_SESSION['AlterMailNome'];
$mailNum = $_SESSION['AlterMailNum'];
$mailEmail = $_SESSION['AlterMailEmail'];
$mailPass = $_SESSION['AlterMailPass'];
$mailId = $_SESSION['AlterMailId'];


// Instância da classe
$mail = new PHPMailer(true);
try
{
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    // Configurações do servidor
    $mail->isSMTP();        //Define o uso de SMTP no envio
    
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'marb.server@gmail.com';
    $mail->Password   = '456123marb';

    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';

    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    // Define o remetente
    $mail->setFrom('marb.server@gmail.com', 'Equipe MARB');

    // Define o destinatário
    $mail->addAddress($mailEmail, $mailNome);

    // Imagens
    $mail->AddEmbeddedImage('../../../web/src/assets/logo.png', 'logo');

    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Atualização de dados - MARB';
    $mail->Body    = 
    '
    <div style="text-align: center;">
        <img src="cid:logo" style="width: 225px; height: 75px;">
    </div>

    <div style="border: solid 1px #d1d1de; border-radius: 10px; line-height: 25px; color: #282829;">
        <div style="text-align: center">

            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h1> Atualização de dados</h1>
            </div> <br/>

            <div style="margin:15px;">

                <p> 
                    Seus dados foram atualizados com sucesso!<br/>
                    A seguir, você encontrará as alterações efetuadas. Os dados 
                    como cidade e estado não foram apresentados, pois não podem sofrer 
                    quaisquer mudanças.
                </p><br/>   
                
                <hr/>
                <div style="text-align: left;">
                    <p>
                        <b> Nome do órgão responsável:</b> '.$mailNome.' <br/>
                        <b> Número para contato:</b> '.$mailNum.' <br/>
                        <b> E-mail:</b> '.$mailEmail.' <br/>
                        <b> Senha:</b> '.$mailPass.' <br/>
                        <b> Código de acesso:</b> '.$mailId.' <br/>
                    </p>
                </div>
                <hr/>

                <br/>
                <p> 
                    Caso tenha encontrado algum erro ou não tenha sido você
                    quem alterou as informações, entre em contato com nossa equipe
                    para que possamos resolver essa situação. 
                </p>

                <p> 
                    Estamos sempre dispostos a lhe atender e ajudar. Para entrar em
                    contato conosco basta ir no final da página inicial e preencher o 
                    formulário corretamente. Retornamos o mais rápido possivel para que sua dúvida
                    ou problema seja sanado. 
                </p> 

            </div><br/>
        </div>       

        <div style="margin:15px;">
            <hr/>

            <div style="text-align: center;">
                <p> Agradecemos a sua participação e preocupação com a comunidade. </p>
            </div><br/>

            <div style="text-align: right;">
                <p>Atenciosamente, <br/>
                <b>Equipe MARB. </b></p>

                <hr/>

                <p>
                    marb.server@gmail.com <br/>
                    (48) 00000-0000
                </p>
            </div>
        </div>
    </div>
    ';
    $mail->AltBody = 'Este é o corpo da mensagem para clientes de e-mail que não reconhecem HTML';
   
    // Enviar
    $mail->send();
    //echo 'A mensagem foi enviada!';
    header('location:../../../web/src/pages/Home');
}
    catch (Exception $e)
{
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('location:../../../web/src/pages/Agent');
}

?>