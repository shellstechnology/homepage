<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logo Aplicación.png">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Trabaja con Nosotros</title>
</head>
@include("header")
<body>
    <div class="principalBody">
        <div>
            <div class="formulario">
                <div class="imagenLogo">
                    <div style="margin-top: 50px;">
                        <img src="\img\Logo Aplicación.png" alt="FastTrackerLogo" width="150" height="150">
                    </div>
                </div>
                <form action="#" method="post">
                    @csrf
                    <input class="campoTexto" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre:  "> <br>
                    <input type="mail" class="campoTexto" name="mail" id="mail" placeholder="Ingrese su mail:  "> <br>
                    <input type="tel" class="campoTexto" name="telefono" id="telefono" placeholder="Ingrese su Teléfono:  "> <br>
                    <input type="file" class="campoTexto" name="archivo" id="archivo"> <br>
                    <input class="botonSubmit" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>
@include("footer")
</html>
