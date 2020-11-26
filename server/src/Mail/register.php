<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../PHPMailer-master/src/Exception.php';
require '../../../PHPMailer-master/src/PHPMailer.php';
require '../../../PHPMailer-master/src/SMTP.php';

// Carregar o autoloader do composer
//require 'vendor/autoload.php';

//informações do usuario
$mailCod = $_SESSION['RegisterMailCod'];
$mailName = $_SESSION['RegisterMailName'];
$mailUf = $_SESSION['RegisterMailUf'];
$mailCity = $_SESSION['RegisterMailCity'];
$mailNumber = $_SESSION['RegisterMailNumber'];
$mailEmail = $_SESSION['RegisterMailEmail'];
$mailPassw = $_SESSION['RegisterMailPassw'];

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
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    
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
    $mail->addAddress($mailEmail, $mailName);

    // Imagens
    $mail->AddEmbeddedImage('../../../web/src/assets/logo.png', 'logo');

    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Cadastro efetuado com sucesso!';
    $mail->Body    = 
    '
    <div style="text-align: center;">
        <img src="cid:logo" style="width: 225px; height: 75px;">
    </div>

    <div style="border: solid 1px #d1d1de; border-radius: 10px; line-height: 25px; color: #282829;">
        <div style="text-align: center">
            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h1> Bem-vindo ao MARB!</h1>
            </div> <br/>
            <div style="margin:15px;">
                <p> É um prazer ter você em nossa equipe!<br/>
                A seguir, você encontrará seus dados cadastrados, juntamente
                com sua senha e login para acessos futuros.</p><br/>   
                
                <hr/>
                <div style="text-align: left;">
                    <p>
                        <b> Nome do órgão responsável:</b> '.$mailName.' <br/>
                        <b> Estado:</b> '.$mailUf.' <br/>
                        <b> Cidade:</b> '.$mailCity.' <br/>
                        <b> Número para contato:</b> '.$mailNumber.' <br/>
                        <b> E-mail:</b> '.$mailEmail.' <br/>
                        <b> Senha:</b> '.$mailPassw.' <br/>
                        <b> Código de acesso:</b> '.$mailCod.' <br/>
                    </p>
                </div>
                <hr/>

                <p> Aqui você pode encontrar algumas informações importantes
                sobre o <b>MARB</b> e seu funcionamento:</p> 
            </div><br/>
        </div>    

        <div style="text-align: center">
            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h2> Acesso restrito </h2>
            </div> <br/>
            <div style="margin:15px;">
                <p> Somente uma conta pode ser registrada por cidade e o acesso
                ao nosso sistema só é permitido com sua senha e o código gerado 
                por nós e informada acima. Caso venha a perder suas informações 
                de Login, você pode entrar em contato conosco através do formulário 
                na página inicial ou por telefone. Cuide bem de seus dados e não 
                os informe para qualquer um.</p>
            </div> <br/>

            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h2> Atualização de dados </h2>
            </div> <br/>
            <div style="margin:15px;">
                <p> É importante que você mantenha sempre suas informações
                cadastradas atualizadas para que as pessoas que acessarem o
                <b>MARB</b> possam entrar em contato com o órgão responsável
                pelos pontos de riscos e abrigos. Para alterar seus dados 
                basta ir no formulário no final da página inicial e 
                colocar como motivo do contato a opção "quero atualizar/excluir 
                meus dados", assim, você irá receber um e-mail contendo algumas 
                informações e o link para a página de atualização de dados 
                (onde você também pode deletar sua conta).</p>
            </div> <br/>

            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h2> Praticidade </h2>
            </div> <br/>
            <div style="margin:15px;">
                <p> Ajudar sua cidade se tornou mais simples e rápido. Após
                acessar sua conta, você irá se deparar com as seguintes telas:</p> 
            </div> <br/>
        </div>

        <div style="text-align: justify">
            <div style=" margin: 5px; background: #dcedd5; border-radius: 15px; padding: 15px; margin-bottom: 20px;">
                <h4> Cadastrar áreas de risco: </h4>
                <p> No formulário a seguir você poderá cadastrar novas áreas
                identificadas como de risco para serem apresentadas aos usuários
                do sistema MARB. </p>
                <div style="text-align: center;">
                    <img src="../../../web/src/assets/logo.png" /> <br/><br/>
                </div>
            </div>    
            
            <div style="margin: 5px; background: #dcedd5; border-radius: 15px; padding: 15px; margin-bottom: 20px;">
                <h4> Alterar áreas de risco cadastradas: </h4>
                <p> A tela para edição apresenta todos os pontos de riscos que foram
                cadastrados. Ao selecionar um ponto especifico, será exibido um formulário
                para que as informações sejam alteradas. </p>
                <div style="text-align: center;">
                    <img src="../../../web/src/assets/logo.png" /> <br/><br/>
                </div>
            </div>    
            
            <div style="margin: 5px; background: #dcedd5; border-radius: 15px; padding: 15px; margin-bottom: 20px;">
                <h4> Cadastrar abrigos: </h4>
                <p> No formulário seguinte é possivel cadastrar locais que disponibilizam
                seu espaço para abrigar pessoas em situações de risco. Os abrigos cadastrados
                serão apresentados aos usuários do sistema MARB. </p>
                <div style="text-align: center;">
                    <img src="../../../web/src/assets/logo.png" /> <br/><br/>
                </div>
            </div>    
            
            <div style="margin: 5px; background: #dcedd5; border-radius: 15px; padding: 15px; margin-bottom: 20px;">
                <h4> Alterar abrigos cadastrados: </h4>
                <p> A tela para edição de abrigos tem o mesmo funcionamento da área de risco,
                contendo todos os abrigos que foram cadastrados. Ao selecionar um abrigo especifico, 
                será exibido um formulário para que as informações sejam alteradas. </p>
                <div style="text-align: center;">
                    <img src="../../../web/src/assets/logo.png" /> <br/><br/>
                </div>
            </div>    
        </div>    

        <div style="text-align: center">
            <div style="background: #1A936F; border-radius: 10px; padding: 5px; color: #f4f4f4;">
                <h2> Comunicação </h2>
            </div> <br/>
            <div style="margin:15px;">
                <p> Estamos sempre dispostos a lhe atender e ajudar. Para entrar em
                contato conosco basta ir no final da página inicial e preencher o 
                formulário corretamente. Retornamos o mais rápido possivel para que sua dúvida
                ou problema seja sanado. </p> 
            </div> <br/>
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
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>