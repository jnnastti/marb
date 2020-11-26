<?php
include('includes.php');
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#34CB79" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>Marb | Mapa de Áreas de Riscos do Brasil</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" rel="stylesheet"/>
    
    <link href="./styles.css" rel="stylesheet" />
    <link href="./grid.css" rel="stylesheet" />
    <link href='../Popup/popup.css' rel='stylesheet' />
    
    <link href="../../assets/ico-header.ico" rel="icon" />
           
</head> 

<body>
    <div id="page-home" class="container">
        <div class="grid-12" id="home">
            <div class="header">
                <img src=<?php echo $header ?> />
            </div>

            <main id="text" class="grid-5">
                <h1>Mapa de Áreas de Risco do Brasil </h1><br/>

                <div class="grid-11">
                    
                    <p class="alt">
                        Cadastre ou altere localizações de pontos de riscos ou abrigos da sua cidade.
                    </p> 

                    <div id="button">
                        <div class="btnLogin">
                            <a class="cursor">
                                <span> ></span>
                                <strong>Fazer LogIn</strong>
                            </a>
                        </div>    

                        <div class="btnAcess">
                            <a onClick="go('#contact')" class="cursor">
                                <strong>Pedir acesso</strong>
                            </a>
                        </div>
                    </div> 

                    <div id="login" hidden>
                        <form method="post" name="login" action='../../../../server/src/Home/login.php'>
                            <div class="field">
                                <label> Seu código </label>  
                                <input type="text" name="cod" require autofocus />  
                            </div> 
                            <div class="field">
                                <label> Sua senha </label>  
                                <input type="password" name="password" require/>  
                            </div> 

                            <button type="submit" class="grid-12 cursor"> Entrar </button>
                        </form>
                    </div>
                
                </div>
            </main>  
        </div>

        <div class="grid-12 marb">
            <main>
                <h1> Conheça o MARB!</h1>
                <div class="grid-6">
                    <img src=<?php echo $localization ?> />
                    <p> 
                        O objetivo do nosso sistema é informar regiões da sua cidade conceituadas 
                        como propensas a alguma fatalidade, especificando-as por tipos 
                        (alagamentos, deslizamentos, etc.) e gravidade (alto, médio ou baixo risco). 
                    </p>
                </div>

                <div class="grid-6">    
                    <img src=<?php echo $obj ?> />
                    <p>
                        Buscamos de forma totalmente gratuita ajudar as comunidades por 
                        meio da dissiminação da informação e conhecimento, apresentando 
                        métodos que podem ser tomados em determinadas situações.
                    </p>
                </div>                 
            </main>
        </div> 

        <div class="grid-12 city">
            <main>
                <div class="grid-6">
                    <img src=<?php echo $trofeu ?> />
                </div>
                <div class="grid-6 counter">
                    <div class="center">
                        <h1> Já somos mais de XXX cidades.</h1>
                        <p>
                            Junte-se ao MARB e faça como:
                        </p>      
                        <h2>Cidade 1, Cidade 2, Cidade 3, ...</h2>
                    </div>    
                </div>
            </main>
        </div> 

            <div id="contact" class="grid-12 team">
                <main class="teamSpace">
                    <h1> Ainda não faz parte da nossa equipe?</h1><br/>
                    <p>
                        Pra requerir seu acesso e se cadastrar no nosso sistema é simples! Entre em contato 
                        conosco através do formulário a seguir e aguarde nosso retorno contendo as devidas
                        informações e o passo a passo para concluir o seu cadastro.
                    </p>    
                </main>
            </div> 

            <div class="grid-12 message">
                <form method="post" name="message" action='../../../../server/src/Mail/message.php'>
                <fieldset>
                    <legend class="center"><h1>Entrar em contato </h1></legend>
                    <div class="field">
                        <label> Nome do remetente </label>
                        <input type="text" name="nome" />
                    </div>
                    <div class="field">
                        <label> Motivo do contato </label>  
                        <select name="motivo">
                            <option>Quero fazer parte do time MARB</option>
                            <option value="alt">Quero atualizar/excluir meus dados</option>
                            <option>Problema com acesso a minha conta</option>
                            <option>Problema de cadastro/alteração de dados</option>
                            <option>Outros...</option>
                        </select> 
                    </div>

                    <div class="field">
                        <label> Estado </label>  
                        <select name="state" id="state" onchange="selectedState(this)">
                            <option></option>
                        </select> 
                    </div>

                    <div class="field">
                        <label> Cidade </label>  
                        <select name="city" id="city">
                            <option>Selecionar uma cidade</option>
                        </select> 
                    </div>

                    <div class="field">
                        <label> Seu E-mail </label>  
                        <input type="email" name="email" id="email" />  
                    </div> 

                    <div class="field">
                        <label> Mensagem </label>
                        <textarea name="message"></textarea>
                    </div>   
                </fieldset>

                <button type="submit">Enviar</button>
                </form>
            </div>

            <div class="grid-12 footer">
                <main>
                    <p class="grid-7">
                        <strong>Marb |</strong> Mapa de Áreas de Riscos do Brasil. 2020 - Todos os direitos resevados. 
                    </p> 
                    <p class="grid-5 contactAlign">
                        marb@contato.com
                    </p>
                    <p class="grid-6">
                        <img src=<?php echo $whatsapp ?> alt="whatsapp"/>
                        <img src=<?php echo $facebook ?> alt="facebook"/>
                        <img src=<?php echo $instagram ?> alt="instagram"/>
                        <img src=<?php echo $twitter ?> alt="twitter"/>
                        <img src=<?php echo $linkedin ?> alt="linkedin"/>
                    </p>
                    <p class="grid-6 contactAlign">    
                        (048) 00000-0000
                    </p>
                </main> 
            </div>  
    </div>      
</body>
        
<script src="main.js"></script>    

</html>
