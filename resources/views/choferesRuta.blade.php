<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleChoferes.css">
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <title>Document</title>
</head>
@include('header')
<body>
    <div class="principalBody">
        <div class="barraDeNavegacion">

            <div class="item"><a style="text-decoration: none; color: black;" href=" /choferes">Volver</a></div>

        </div>
        <div>
            <div id="map">
            </div>
        </div>
        <div style="margin-left: 60px;">
            <h2>Ubicaciones:</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nam neque possimus aspernatur </p>
        </div>
    </div>
</body>
<script src="js/mapa.js"></script>
@include('footer')
</html>
