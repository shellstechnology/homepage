var puntos = ['-34.90569, -56.18801','-34.8083, -56.2179'];
var ubicacion = null;
var map;
var circulo = null;
var marcador = null;
var markers = [];

var ico1 = L.icon({
    iconUrl: "/img/Marker1.png",
    iconSize: [60, 60],
    iconAnchor: [30, 60],
    popupAnchor: [-3, -76]
})

var ico2 = L.icon({
    iconUrl: "/img/Marker2.png",
    iconSize: [60, 60],
    iconAnchor: [30, 60],
    popupAnchor: [-3, -76]
})

window.addEventListener("DOMContentLoaded", (event) => {
    var mapa=document.getElementById('map');
    if(mapa=!null){
        crearMapa();
        verificarMapa();
        agregarPunto();

    }
})

function agregarPunto() {
    puntos.forEach(puntoMapa => {
        var  coordenadas=puntoMapa.split(',')
        var mark = L.marker([coordenadas[0], coordenadas[1]], { icon: ico2 }).addTo(map).bindPopup("AHHHHHHHHHHH");
        markers.push(mark);
    });
}
function crearMapa() {
    if (map == undefined) {
        var x = "-34.89945,-56.13177";
        map = L.map("map").setView(x.split(','), 13);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "&copy; OpenStreetMap contributors"
        }).addTo(map);
    }
}

function verificarMapa() {
    map.locate({ setView: true, maxZoom: 16 });
    map.on('locationfound', onLocationFound);
    map.on('locationerror', onLocationError);
}

function onLocationFound(e) {
    if (ubicacion != e) {
        if (circulo != null) {
            eliminarPuntos();
        }
        crearPuntos(e);
    }
}

function onLocationError(e) {
    alert(e.message);
    controlBoton = 1;
}

function eliminarPuntos() {
    map.removeLayer(marcador);
    map.removeLayer(circulo);
}

function crearPuntos(e) {
    var radius = e.accuracy / 2;
    marcador = L.marker(e.latlng).addTo(map)
        .bindPopup("¡Estás aquí!").openPopup();
    circulo = L.circle(e.latlng, radius).addTo(map);
    ubicacion = e.latlng;
}

