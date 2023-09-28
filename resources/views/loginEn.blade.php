<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Log-in</title>
</head>
@include("headerEn")
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
                    <input class="campoTexto" type="text" name="usuario" id="usuario" placeholder="User: "> <br>
                    <input class="campoTexto" type="password" name="password" id="password" placeholder="Password: "> <br>
                    <input class="botonSubmit" type="submit" value="Sign-In">
                </form>
            </div>
        </div>
    </div>
</body>
@include("footer")
</html>
