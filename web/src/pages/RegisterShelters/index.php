<?php 
include('includes.php');

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#34CB79" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>Cadastre ou altere os pontos da sua cidade.</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" rel="stylesheet"/>
    
    
    <link href="./grid.css" rel="stylesheet" />
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="./styles.css" rel="stylesheet" />
    <link href='../Popup/popup.css' rel='stylesheet' />

    <!-- estilo mapa -->
    <link href="../../assets/scripts/map.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    
    
    <link href="../../assets/ico-header.ico" rel="icon" />

           
</head>

<body>

    <div id="page-points" class="container">

      <div class="header">
        <a href="../Home" class="return"> Voltar ao início </a>
        <img src=<?php echo $header ?> />
      </div>

      
            
        <div class="grid-12" id="cadShelter">
            <div class="grid-6">
                <div class="info">
                <img src=<? echo $imgAbrigo?> />
                <p>
                    Um abrigo é uma estrutura ou edifício arquitetônico básico 
                    que fornece proteção contra o ambiente local. Preencha o 
                    formulário ao lado com as informações corretas sobre o local 
                    adequado que disponibiliza seu espaço para abrigar pessoas 
                    em momentos que possam vir a provocar danos à propriedade, 
                    ou fazer um grande número de vítimas, ou ambas.
                </p>
                <p> 
                    Para alterar as informações dos abrigos cadastrados, clique na seta a esquerda. 
                </p>
                </div>

            </div>
            <div class="grid-6">
                <form method="post" name="registerShelters" action='../../../../server/src/Points/registerShelters.php'>
                    <fieldset>
                    <legend class="center"><h1>Cadastrar abrigo </h1></legend>

                        <div class="field center">
                            <label> Informe no mapa a localização do abrigo ou informe a latitude e longitude </label>   
                        </div>

                        <!-- mapa -->
                        <div id="mapPoint" class="map"></div>

                        <div class="grid-6">
                            <label > Latitude </label> <input type="text" name="lat" id="lat"/> 
                        </div> 
                                
                        <div class="grid-6">
                            <label> Longitude </label> <input type="text" name="lon" id="lon" />
                        </div> 
                            
                        <div class="field">
                            <label> Nome </label> <input type="text" name="nome"/>
                        </div>

                        <div class="field">
                            <label> Endereço </label> <input type="text" name="end"/>
                        </div>

                        <div class="field">
                            <label> Ponto de referência </label> <input type="text" name="ref"/>
                        </div>

                        <div class="field">
                            <label> Telefone </label> <input type="text" name="tell"/>
                        </div>

                    </fieldset>
                    
                    <button type="submit">Cadastrar</button>
                </form>
        
            </div>
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


<!-- Exportar openLayers -->
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
<script src="../../assets/scripts/Map.js"></script>

</html>
