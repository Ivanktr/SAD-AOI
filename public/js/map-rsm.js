var map = L.map('map-rsm');

L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
    attribution:'Centro para la Competitividad y el Desarrollo',
    minZoom: 1,
    maxZoom: 18,
    subdomains:['mt0','mt1','mt2','mt3'],
}).addTo(map);

//Diseño del iconos
var marker1 = L.icon ({
    iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367551/ccd/marker1_hdqypn.png',
    iconSize: [25,35]
})

var marker2 = L.icon ({
    iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367551/ccd/marker2_weqa0n.png',
    iconSize: [25,35]
})

var marker3 = L.icon ({
    iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652367552/ccd/marker3_ekcmkc.png',
    iconSize: [25,35]
})

var marker4 = L.icon ({
    iconUrl: 'https://res.cloudinary.com/lvaldivia/image/upload/v1652373972/ccd/marker4_zwbks1.png',
    iconSize: [30,45]
})

//Añadir capa en formato Geojson
let geojson_url = "https://api.maptiler.com/data/428836f4-9131-4044-a4a2-64a4422d388f/features.json?key=xlYleewapf1kKt27GBjx"
fetch(
    geojson_url
).then(
    res => res.json()
).then(
    data => {
        let geojsonlayer = L.geoJson(data, {
            style: style,
            //Configuración popup distrito
            onEachFeature: function(feature, layer) {
                layer.bindPopup('<strong>Departamento: </strong>' + feature.properties.NOMBDEP + '</br>' + '<strong>Distrito: </strong>' + feature.properties.NOMBDIST);
                //Cambiar nombre de título
                /* document.getElementById('titulo').textContent='IDH distritos de '+feature.properties.NOMBDEP; */
            }
        }).addTo(map)
        map.fitBounds(geojsonlayer.getBounds())
    }
)

//Color por rango
function getColor(d) {
    /* return  d > 30000 ? '#FF7F7F':
            d > 10000 ? '#FAC090':
            d > 0     ? '#57CB8C':
                        '#ffffff'; */
    
    return  d == "PARARIN"              ? '#FF7F7F': //RED
            d == "LLACLLIN"             ? '#FF7F7F': //RED
            d == "MARCA"                ? '#FF7F7F': //RED
            d == "ANTONIO RAYMONDI"     ? '#FF7F7F': //RED
            d == "CAJACAY"              ? '#FF7F7F': //RED
            d == "HUAYLLACAYAN"         ? '#FF7F7F': //RED
            d == "PAMPAS CHICO"         ? '#FF7F7F': //RED
            d == "CATAC"                ? '#FF7F7F': //RED
            d == "AQUIA"                ? '#FF7F7F': //RED
            d == "HUALLANCA"            ? '#FF7F7F': //RED
            d == "LLATA"                ? '#FF7F7F': //RED
            d == "CHAVIN DE HUANTAR"    ? '#FF7F7F': //RED
            d == "PUÑOS"                ? '#FF7F7F': //RED
            d == "SAN PEDRO DE CHANA"   ? '#FF7F7F': //RED
            d == "HUACHIS"              ? '#FF7F7F': //RED
            d == "HUARMEY"              ? '#FAC090': //ORANGE
            d == "COLQUIOC"             ? '#FAC090': //ORANGE
            d == "CHIQUIAN"             ? '#FAC090': //ORANGE
            d == "SAN MARCOS"           ? '#FAC090': //ORANGE
            d == "PARAMONGA"            ? '#57CB8C': //GREEN
                                        '#ffffff';
}

//Función para mostrar los colores
function style(feature){ 
    return {
        /* fillColor: getColor(feature.properties.AREA_MINAM), */
        fillColor: getColor(feature.properties.NOMBDIST),
        weight: 1,
        opacity: 0.5,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.6
    };
}

//Markers
    var marker1 = L.marker([-10.0760,-77.1470], {icon:marker1}).addTo(map).bindPopup('<strong>Time frame:</strong>First Engagement');
    var marker2 = L.marker([-10.0697,-78.1517],{icon:marker2}).addTo(map).bindPopup('<strong>Time frame:</strong>Short Term');
    var marker3 = L.marker([-9.5869,-77.1772],{icon:marker3}).addTo(map).bindPopup('<strong>Time frame:</strong>Medium Term');
    var marker4 = L.marker([-10.1575,-77.4703],{icon:marker4}).addTo(map).bindPopup('<strong>Time frame:</strong>Long Term');

//Filtro para moverse entre ubicaciones
document.getElementById('select-location').addEventListener('change', function(e){
    let coords = e.target.value.split(",");
    if (coords=="AIO") {
        map.flyTo([-9.979670961528786,-77.4041748046875], 8.5);
    } else {
        map.flyTo(coords, 13);
    }
});