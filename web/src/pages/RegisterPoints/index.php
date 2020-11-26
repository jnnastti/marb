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

      
      <div class="grid-12">

            <div class="grid-6">
                <div class="info">
                    <img src=<? echo $imgArea?> />
                    <p>
                    Um desastre natural ocorre quando um evento físico muito perigoso provoca 
                    diretamente ou indiretamente danos à propriedade, ou faz um grande número 
                    de vítimas, ou ambas. Preencha o formulário ao lado com as devidas informações 
                    sobre um ponto especifico que venha a ser reconhecido como de risco e propenso
                    a esse tipo de situação.
                    </p>
                    <p>
                    Para alterar as informações dos pontos cadastrados, clique na seta a direita.
                    </p>
                </div>
            </div>

            <div class="grid-6">
                <form method="post" name="registerPoints" action='../../../../server/src/Points/registerPoints.php'>
                <fieldset>
                    <legend class="center"><h1>Cadastrar área de risco </h1></legend>

                    <div class="field center">
                    <label> Informe no mapa a localização do ponto de risco ou informe a latitude e longitude </label>   
                    </div>

                    <!-- mapa -->
                    <div id="mapPoint" class="map"></div>

                    <div class="grid-6">
                    <label > Latitude </label> <input type="text" name="lat" id="lat" /> 
                    </div> 
                        
                    <div class="grid-6">
                    <label> Longitude </label> <input type="text" name="lon" id="lon" />
                    </div>  

                    <div class="field">
                    <label> Tipo de desastre </label>  
                    <select name="type">
                        <option value="alag"> Alagamento </option>
                        <option value="desl"> Deslizamento </option>
                        <option value="quei"> Queimada </option>
                    </select> 
                    </div>

                    <div >
                    <label> Nivel de risco</label>
                    <div>
                        <input type="radio" value="1" name="risco" > Baixo </input>
                        <input type="radio" value="2" name="risco" class="radio"> Médio </input>
                        <input type="radio" value="3" name="risco" class="radio"> Alto </input>
                    </div>
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
