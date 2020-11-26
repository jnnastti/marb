<?php

session_start();
include('./includes.php');

?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#34CB79" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>Atualize seus dados</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" rel="stylesheet"/>
    
    
    <link href="./grid.css" rel="stylesheet" />
    <link href="./styles.css" rel="stylesheet" />
    <link href='../Popup/popup.css' rel='stylesheet' />
    
    <link href="../../assets/ico-header.ico" rel="icon" />

           
</head>

<body>
    <div id="page-AlterAgents" class="container">

        <div class="header">
            <a href="../Home" class="return"> Voltar ao início </a>
            <img src=<?php echo $header ?> />
        </div>

        <div class="grid-12">

            <div class="grid-6">
                <div class="info">
                    <img src=<? echo $imgAlter?> />
                    <p>
                        Marb é um sistema que busca informar regiões da sua cidade 
                        conceituadas como propensas a alguma fatalidade, especificando-as 
                        por tipos (alagamentos, deslizamentos, etc.) e gravidade (alto, 
                        médio ou baixo risco), além de apresentar métodos que podem ser 
                        tomados em determinadas situações de risco.
                    </p>
                    <p>
                        Faça login e atualize seus dados.
                    </p>
                </div>    
            </div>

            <?php 
            
                if($loginOk != 'loginOk') {
                    include('./login/index.php');
                } else {
                    include('./alter/index.php');
                }
            ?>

        </div>
        <div class="grid-12 footer">
            <main>
                <p class="grid-7">
                    <strong>Marb |</strong> Mapa de Áreas de Riscos do Brasil. 2020 - Todos os direitos resevados. 
                </p> 
                <p class="grid-5 contactAlign">
                    marb@contato.com
                </p>
                <p class="grid-6 social">
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
    <script src="main.js"></script>

</body>
</html>