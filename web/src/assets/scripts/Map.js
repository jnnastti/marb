// iniciar variavel de coordenada
var coor;

// criar ID do marcador
var idLayer = 1;

//function init() {

    // o mapa  
    var map = new ol.Map({
        target: 'mapPoint',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],

        // longitude e latitude do mapa no inicio
        view: new ol.View({
            center: ol.proj.fromLonLat([-57.0068235, -13.702797]),
            zoom: 4
        })
    });

    // quando clica no mapa
    map.on('singleclick', function (evt) {
                
        // convert coordinate to EPSG-4326
        coor = ol.proj.transform(evt.coordinate, 'EPSG:3857','EPSG:4326');

        // coor[1] = latitude; coor[0] = longitude;

        // adicionar marcador
        var layer = new ol.layer.Vector({
            source: new ol.source.Vector({
                features: [
                    new ol.Feature({
                        geometry: new ol.geom.Point(
                            ol.proj.fromLonLat([coor[0], coor[1]])
                        )
                    })
                ]
            })
        });

        map.addLayer(layer);

        // setar ID ao marcador
        layer.set('id', idLayer);

        // incrementar ID
        idLayer = idLayer + 1;

        // pegar ID do marcador adicionado
        id = layer.get('id');

        // remover marcador anterior
        if(id > 1) {
            map.getLayers().getArray()
            .filter(layer => layer.get('id') == idLayer - 2)
            .forEach(layer => map.removeLayer(layer));
        }  

        // colocar coordenadas nos input
        document.getElementById('lat').value = coor[1];
        document.getElementById('lon').value = coor[0];             
                
    });
          
//}
