<?php 
include('includes.php');

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#34CB79" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>Altere os abrigos da sua cidade.</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" rel="stylesheet"/>
    
    
    <link href="./grid.css" rel="stylesheet" />
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="./styles.css" rel="stylesheet" />
    <link href='../Popup/popup.css' rel='stylesheet' />

    <link href="../../assets/ico-header.ico" rel="icon" />
     
</head>

<body>

    <div id="page-points" class="container">

      <div class="header">
        <a href="../Home" class="return"> Voltar ao início </a>
        <img src=<?php echo $header ?> />
      </div>

      
        <div class="grid-12 alt" id="accordion" role="tablist">
              <h1> Selecione o Abrigo e altere seus dados</h1>
              <?  
                include("../../../../server/connection.php"); 
                include('../../../../server/src/Points/showShelters.php');
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


</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="./jquery-slim.min.js"><\/script>')</script>

<script src="./bootstrap/util.js"></script>
<script src="./bootstrap/bootstrap.min.js"></script>
<script src="./bootstrap/collapse.js"></script>
<script src="./bootstrap/jquery-slim.min.js"></script>
<script src="./main.js"></script> 

</html>
