<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="Logo Aplicación.png">
    <link rel="stylesheet" href="css/styleHomepage.css">
    <title>Presentación</title>
</head>
<body>
    @include("header")
    <div class="divPrincipalBody">
        <div class="contenidoPresentación">
            <div class="mensajes">
                <span id="mensajeIntroduccion">
                    <p>Quick Carry ofrece un increible servicio de mensajeria y paqueteria con una red que abarca
                        todo uruguay con sucursales añadidas con el tiempo.</p>
                    <p>Quick Carry fué fundada para facilitar los procesos de organización a la hora de
                        distribuir paquetes por todo el uruguay.</p>
                </span>
            </div>
            <div style="margin-right: 70px">
                <img src="img/camion.jpg" alt="camion" width="500" height="500">
            </div>
        </div>
    </div>
</body>
@include("footer")
</html>
