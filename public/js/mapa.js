var puntos = [];
var nombres = [];
var ruta = [];
var planRuta = [];
var point;
var lastpoint;
var r = null;
var ubicacion = null;
var map;
var circulo = null;
var marcador = null;
var controlBoton = 1;
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

function agregarPunto() {
    var nombreInput = document.getElementById("nombre");
    var puntosInput = document.getElementById("puntos");
    var coordenadas = puntosInput.value.split(",").map(function (coordenada) {
        return parseFloat(coordenada.trim());
    });

    if (coordenadas.length === 2 && !isNaN(coordenadas[0]) && !isNaN(coordenadas[1])) {
        var nombre = nombreInput.value.trim();
        if (nombre !== "") {
            puntos.push(coordenadas);
            nombres.push(nombre);
            puntosInput.value = "";
            nombreInput.value = "";
            if (!map) {
                crearMapa();
            }
            console.log(coordenadas)
            var mark = L.marker([coordenadas[0], coordenadas[1]], { icon: ico2 }).addTo(map).bindPopup("AHHHHHHHHHHH");
            markers.push(mark);
            alert("Punto agregado correctamente.");
        } else {
            alert("Por favor, ingresa un nombre para el punto.");
        }
    } else {
        alert("Por favor, ingresa las coordenadas correctamente (latitud, longitud).");
    }
}
function crearMapa() {
    if (map == undefined) {
        var x = "-34.89945,-56.13177";
        map = L.map("map").setView(puntos[0], 13);
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
    limpiarRuta();
}

function limpiarRuta() {
    // Eliminar rutas existentes
    ruta.forEach(function (route) {
        map.removeControl(route);
    });
    // Limpiar el arreglo de rutas
    ruta = [];
    planRuta = [];
    r = 0;
    obtenerCheckboxesActivas();
}


