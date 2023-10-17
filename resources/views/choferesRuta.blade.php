<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logo Aplicación.png">
    <link rel="stylesheet" href="css/styleUbicaciones.css">
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <title>Choferes Ruta</title>
</head>
@include('header')
<body>
    <div class="principalBody">
        <div>
            <div id="map">
            </div>
        </div>
        <div>
            <h2>Ubicaciones:</h2>
            <p>20kg de Arroz. 3023 Ejido</p>
            <p>20kg de Azucar. 0943 Puscas</p>
            <p>10kg de Algodón. 8734 Ciudadela</p>
        </div>
    </div>
    <a style="text-decoration: none; color: black;" href=" /choferes">Volver</a>
</body>
<script src="js/mapa.js"></script>
@include('footer')
</html>
