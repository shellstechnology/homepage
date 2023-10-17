<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logo Aplicación.png">
    <link rel="stylesheet" href="css/styleChoferes.css">
    <title>Choferes</title>
</head>
@include('header')
<body>
    <div class="divPrincipalBody">
        <div class="paginasDisponibles">
            <div class="paginasDisponiblesHijos">
                <button>
                    <a href="/choferesPaquetes">Paquetes</a>
                </button>
            </div>
            <div class="paginasDisponiblesHijos">
                <button>
                    <a href="/choferesRuta">Ruta</a>
                </button>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
